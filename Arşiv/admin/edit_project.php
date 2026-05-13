<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["id"] ?? null;

$stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->execute([$id]);

$project = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$project){
    die("Project not found");
}

$success = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $title = trim($_POST["title"]);
    $description = trim($_POST["description"]);
    $technologies = trim($_POST["technologies"]);
    $project_link = trim($_POST["project_link"]);

    $image_url = $_POST["current_image"];

    if(isset($_FILES["project_image"]) && $_FILES["project_image"]["error"] === 0){

        $file_name = time() . "_" . basename($_FILES["project_image"]["name"]);
        $target_path = "../uploads/" . $file_name;

        move_uploaded_file($_FILES["project_image"]["tmp_name"], $target_path);

        $image_url = "uploads/" . $file_name;
    }

    $update = $pdo->prepare("
        UPDATE projects
        SET title=?, description=?, technologies=?, image_url=?, project_link=?
        WHERE id=?
    ");

    $update->execute([
        $title,
        $description,
        $technologies,
        $image_url,
        $project_link,
        $id
    ]);

    $success = "Project updated successfully.";

    $stmt->execute([$id]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project</title>
    <link rel="stylesheet" href="/portfolio-project/assets/css/style.css">
</head>
<body>

<section class="contact">

    <h2>Edit Project</h2>

    <form method="POST" enctype="multipart/form-data">

        <input
            type="text"
            name="title"
            value="<?php echo $project['title']; ?>"
            required
        >

        <textarea
            name="description"
            required
        ><?php echo $project['description']; ?></textarea>

        <input
            type="text"
            name="technologies"
            value="<?php echo $project['technologies']; ?>"
            required
        >

        <input
            type="hidden"
            name="current_image"
            value="<?php echo $project['image_url']; ?>"
        >

        <label class="upload-label">
            Project Image
            <input type="file" name="project_image" accept="image/*">
        </label>

        <?php if(!empty($project['image_url'])): ?>
            <img
                src="/portfolio-project/<?php echo $project['image_url']; ?>"
                style="width:240px; margin:20px 0; border-radius:16px;"
            >
        <?php endif; ?>

        <input
            type="text"
            name="project_link"
            value="<?php echo $project['project_link']; ?>"
        >

        <button type="submit">
            Update Project
        </button>

    </form>

    <p id="formMessage">
        <?php echo $success; ?>
    </p>

    <br>

    <a href="dashboard.php">
        Back to Dashboard
    </a>

</section>

</body>
</html>
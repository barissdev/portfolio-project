<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit;
}

$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST["title"]);
    $description = trim($_POST["description"]);
    $technologies = trim($_POST["technologies"]);
    $image_url = trim($_POST["image_url"]);
    $project_link = trim($_POST["project_link"]);

    if ($title && $description && $technologies) {
        $stmt = $pdo->prepare("INSERT INTO projects (title, description, technologies, image_url, project_link) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $description, $technologies, $image_url, $project_link]);

        $success = "Project added successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<section class="contact">
    <h2>Add New Project</h2>

    <form method="POST">
        <input type="text" name="title" placeholder="Project Title" required>

        <textarea name="description" placeholder="Project Description" required></textarea>

        <input type="text" name="technologies" placeholder="Technologies" required>

        <input type="text" name="image_url" placeholder="Image URL">

        <input type="text" name="project_link" placeholder="Project Link">

        <button type="submit">Add Project</button>
    </form>

    <p id="formMessage"><?php echo $success; ?></p>

    <br>
    <a href="dashboard.php">Back to Dashboard</a>
</section>

</body>
</html>
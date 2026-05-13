<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM projects ORDER BY created_at DESC");
$stmt->execute();

$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<section class="projects">

    <h2>Admin Dashboard</h2>

    <a href="add_project.php">Add New Project</a>
    <br><br>

    <div id="projects-container">

        <?php foreach($projects as $project): ?>

            <div class="project-card">

                <h3><?php echo $project["title"]; ?></h3>

                <p><?php echo $project["description"]; ?></p>

                <p>
                    <strong>Tech:</strong>
                    <?php echo $project["technologies"]; ?>
                </p>

                <br>

                <a href="edit_project.php?id=<?php echo $project['id']; ?>">
                    Edit
                </a>

                <br><br>

                <a href="delete_project.php?id=<?php echo $project['id']; ?>"
                   onclick="return confirm('Delete this project?')">
                    Delete
                </a>

            </div>

        <?php endforeach; ?>

    </div>

    <br><br>

    <a href="logout.php">Logout</a>

</section>

</body>
</html>
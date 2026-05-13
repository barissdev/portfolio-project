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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/portfolio-project/assets/css/style.css">
</head>
<body>

<section class="admin-panel">

    <div class="admin-header">
        <div>
            <h2>Admin Dashboard</h2>
            <p>Welcome, <?php echo $_SESSION["admin_username"]; ?> 👋</p>
        </div>

        <div class="admin-actions">
            <a href="../index.php">View Site</a>
            <a href="add_project.php">Add Project</a>
            <a href="messages.php">Messages</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Title</th>
                    <th>Technologies</th>
                    <th>Project Link</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($projects as $project): ?>
                    <tr>
                        <td><?php echo $project["id"]; ?></td>
                        <td><?php echo $project["title"]; ?></td>
                        <td><?php echo $project["technologies"]; ?></td>
                        <td>
                            <a href="<?php echo $project["project_link"]; ?>" target="_blank">
                                Open
                            </a>
                        </td>
                        <td><?php echo $project["created_at"]; ?></td>
                        <td>
                            <a href="edit_project.php?id=<?php echo $project['id']; ?>">Edit</a>
                            |
                            <a href="delete_project.php?id=<?php echo $project['id']; ?>"
                               onclick="return confirm('Delete this project?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>

</body>
</html>
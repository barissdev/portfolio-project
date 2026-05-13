<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM messages ORDER BY created_at DESC");
$stmt->execute();

$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>

    <link rel="stylesheet" href="/portfolio-project/assets/css/style.css">
</head>
<body>

<section class="admin-panel">

    <div class="admin-header">

        <div>
            <h2>Contact Messages</h2>
            <p>Messages sent from portfolio contact form.</p>
        </div>

        <div class="admin-actions">
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        </div>

    </div>

    <div class="table-wrapper">

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach($messages as $message): ?>

                    <tr>

                        <td><?php echo $message["id"]; ?></td>

                        <td><?php echo $message["name"]; ?></td>

                        <td><?php echo $message["email"]; ?></td>

                        <td><?php echo $message["subject"]; ?></td>

                        <td><?php echo $message["message"]; ?></td>

                        <td><?php echo $message["created_at"]; ?></td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</section>

</body>
</html>
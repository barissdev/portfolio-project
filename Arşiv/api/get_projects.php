<?php

require '../config/db.php';

header('Content-Type: application/json');

$stmt = $pdo->prepare("SELECT * FROM projects ORDER BY created_at DESC");
$stmt->execute();

$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($projects);

?>
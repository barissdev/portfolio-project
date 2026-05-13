<?php

require '../config/db.php';

$data = json_decode(file_get_contents("php://input"), true);

$name = trim($data["name"] ?? "");
$email = trim($data["email"] ?? "");
$subject = trim($data["subject"] ?? "");
$message = trim($data["message"] ?? "");

if($name === "" || $email === "" || $subject === "" || $message === ""){
    echo "Please fill all fields.";
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Please enter a valid email.";
    exit;
}

$stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->execute([$name, $email, $subject, $message]);

echo "Your message has been sent successfully.";

?>
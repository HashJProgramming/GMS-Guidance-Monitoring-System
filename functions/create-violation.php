<?php
// connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

$id = $_POST['id'];
$type = $_POST['type'];
$level = $_POST['level'];
$offense = $_POST['offense'];

// Check if the student ID exists
$sql = "SELECT * FROM students WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// If the student ID does not exist, return an error message
if ($stmt->rowCount() == 0) {
    echo "The student ID does not exist.";
    exit;
}

// The student ID exists, so insert the data
$sql = "INSERT INTO violations (student_id, type, offense, level) VALUES (:id, :type, :offense, :level)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':offense', $offense);
$stmt->bindParam(':level', $level);
$stmt->execute();

// Redirect the user to the violations page
header('Location: ../dashboard.php');
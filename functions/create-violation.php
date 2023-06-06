<?php
// connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

$id = $_POST['id'];
$type = $_POST['type'];
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

// Check if the student has any existing violations
$sql = "SELECT MAX(level) as max_level FROM violations WHERE student_id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result['max_level'] === null) {
    // The student has no existing violations
    $level = 1;
} else {
    // The student has existing violations, so set the level to the next highest level
    $level = $result['max_level'] + 1;
}

// Insert the violation data
$sql = "INSERT INTO violations (student_id, type, offense, level) VALUES (:id, :type, :offense, :level)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':offense', $offense);
$stmt->bindParam(':level', $level);
$stmt->execute();

// Redirect the user to the violations page
header('Location: ../dashboard.php#success');
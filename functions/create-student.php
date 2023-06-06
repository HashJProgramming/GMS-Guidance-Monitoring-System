<?php
// connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

// get the values from the form
$fullname = $_POST['fullname'];
$id = $_POST['student_id'];
$birthday = $_POST['birthday'];
$sex = $_POST['gender'];
$strand = $_POST['strand'];
$guardian_name = $_POST['guardian_name'];
$phone = $_POST['guardian_phone'];
// get the age from the birthday
$age =  date_diff(date_create($birthday), date_create('today'))->y;

// check if the student already exists
$sql = "SELECT * FROM students WHERE fullname = :fullname";
$statement = $db->prepare($sql);
$statement->bindParam(':fullname', $fullname);
$statement->execute();

// if the student already exists, redirect to the index page
if ($statement->fetchColumn() > 0) {
    header('Location: index.php');
    exit();
}

// if the student does not already exist, proceed with adding them
else {
    // prepare and execute the SQL query
    $sql = "INSERT INTO students (id, fullname, birthday, age, sex, strand, guardian_name, phone)
            VALUES (:id, :fullname, :birthday, :age, :sex, :strand, :guardian_name, :phone)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':birthday', $birthday);
    $statement->bindParam(':age', $age);
    $statement->bindParam(':sex', $sex);
    $statement->bindParam(':strand', $strand);
    $statement->bindParam(':guardian_name', $guardian_name);
    $statement->bindParam(':phone', $phone);
    $statement->execute();

    // redirect to the index page after adding the student
    header('Location: ../dashboard.php#success');
    exit();
}
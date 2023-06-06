<?php
// connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');


$id = $_POST['data_id'];
$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$age = $_POST['age'];
$sex = $_POST['gender'];
$strand = $_POST['strand'];
$guardian_name = $_POST['guardian_name'];
$phone = $_POST['guardian_phone'];

// update the student record in the database
$sql = "UPDATE students SET
            fullname = :fullname,
            birthday = :birthday,
            age = :age,
            sex = :sex,
            strand = :strand,
            guardian_name = :guardian_name,
            phone = :phone
        WHERE id = :id";
$statement = $db->prepare($sql);
$statement->bindParam(':fullname', $fullname);
$statement->bindParam(':birthday', $birthday);
$statement->bindParam(':age', $age);
$statement->bindParam(':sex', $sex);
$statement->bindParam(':strand', $strand);
$statement->bindParam(':guardian_name', $guardian_name);
$statement->bindParam(':phone', $phone);
$statement->bindParam(':id', $id);
$statement->execute();

// redirect to the dashboard after updating the student
header('Location: ../dashboard.php#success');
exit();

?>
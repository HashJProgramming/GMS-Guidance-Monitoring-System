<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM students ORDER BY fullname ASC';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table 
foreach ($results as $row) {
?>
    <tr>
        <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['fullname']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['birthday']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['age']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['sex']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['strand']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['guardian_name']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['phone']; ?></strong></td>
        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
            <a class="btn btnMaterial btn-flat success semicircle" role="button" data-id="<?php echo $row['id']?>" data-fullname="<?php echo $row['fullname']?>" data-birthdate="<?php echo $row['birthday']?>" data-age="<?php echo $row['age']?>" data-sex="<?php echo $row['sex']?>" data-strand="<?php echo $row['strand']?>" data-gurdian="<?php echo $row['guardian_name']?>" data-phone="<?php echo $row['phone']?>" data-bs-target="#update" data-bs-toggle="modal"><i class="fas fa-pen"></i></a>
            <a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" data-id="<?php echo $row['id']?>" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#confirmation" href="#"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a>
        </td>
    </tr>
        
<?php
}



<?php

function get_student($id){
    $db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');
    $sql = 'SELECT * FROM students WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        ?>
            <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['fullname']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['age']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['sex']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['strand']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['guardian_name']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['phone']; ?></strong></td>
        <?php
    }
}


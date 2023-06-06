<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM violations';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table 
foreach ($results as $row) {
    
    if($row['level'] == 1){
        $level = "1st Offense";
    }else if($row['level'] == 2){
        $level = "2nd Offense";
    }else if($row['level'] == 3){
        $level = "3rd Offense";
    }else if($row['level'] == 4){
        $level = "Candidate for Expulsion";
    }else if($row['level'] == 5){
        $level = "Expelled";
    }

    ?>
     <tr>
        <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
        <?php
            get_student($row['student_id']);
        ?>
            <td class="border-0 align-middle"><strong><?php echo $row['type']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['offense']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $level; ?></strong></td>

    </tr>
        
<?php
}

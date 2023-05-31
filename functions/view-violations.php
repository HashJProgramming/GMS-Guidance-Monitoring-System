<?php
include 'functions/get-data.php';

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM violations';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table 
foreach ($results as $row) {
?>
    <tr>
        <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
        <?php
            get_student($row['student_id']);
        ?>
            <td class="border-0 align-middle"><strong><?php echo $row['type']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['offense']; ?></strong></td>
            <td class="border-0 align-middle"><strong><?php echo $row['level']; ?></strong></td>

    </tr>
        
<?php
}



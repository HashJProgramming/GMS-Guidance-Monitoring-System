<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

// Check if search query is submitted
if (isset($_POST['id'])) {
    $searchQuery = $_POST['id'];
    // Prepare and execute search query
    $sql = 'SELECT s.*, v.id as violation_id, v.type, v.offense, v.level FROM students s 
    LEFT JOIN violations v ON s.id = v.student_id
    WHERE (s.id LIKE :query) AND v.id IS NOT NULL ORDER BY s.fullname ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute([':query' => '%'.$searchQuery.'%']);
} 

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    }else{
        $level = "No Violation";
    }

?>
    <tr>
        <td class="border-0 align-middle"><strong><?php echo $row['violation_id']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['id']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['fullname']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['age']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['sex']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['strand']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['guardian_name']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['phone']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['type']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $row['offense']; ?></strong></td>
        <td class="border-0 align-middle"><strong><?php echo $level; ?></strong></td>
    </tr>  
<?php
}
?>
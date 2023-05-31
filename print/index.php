<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PRINT</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<a href="javascript:window.print()" class="button print">Print Page</a>

<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th scope="col">Violation ID</th>
			<th scope="col">Student ID</th>
			<th scope="col">Fullname</th>
			<th scope="col">Age</th>
			<th scope="col">Sex</th>
			<th scope="col">Strand</th>
			<th scope="col">Guardian Name</th>
			<th scope="col">Guardian Phone</th>
			<th scope="col">Offense Type</th>
			<th scope="col">Offense</th>
			<th scope="col">Offense Level</th>
		</tr>
	</thead>
	<tbody>
			<?php

			include '../functions/get-data.php';

			// Connect to the database
			$db = new PDO('mysql:host=localhost;dbname=db_hashers', 'root', '');

			if(isset($_GET['filter'])){
				$sql = 'SELECT * FROM violations WHERE type = "'.$_GET['filter'].'"';
			} else{
				$sql = 'SELECT * FROM violations';
			}
			

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


			
			?>
	</tbody>
</table>
<!-- partial -->
  
</body>
</html>

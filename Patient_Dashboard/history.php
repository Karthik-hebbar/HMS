<?php

require 'dbconfig/mark1.php';
error_reporting(0);
session_start();

$user = $_SESSION['user'];

$query = "SELECT * FROM patientt WHERE username = '$user'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> History</title>
	<link rel="stylesheet" type="text/css" href="experinav.css?a=<?php echo time();?>">
</head>
<body>
	<div class="menu2">
		<div class="history">
			<br><p>user | Appointment-History</p>
		</div>

		<table class="htable" > 
			</thead>
			<tr>
				<thead>
				<th>ID</th>
				<th>PatientID</th>
				<th>Specialization</th>
				<th>Doctorid</th>
				<th>Fee</th>
				<th>Date</th>
				<th>Time</th>
			   <th>Status</th>
			   <th>Action</th>
			</tr>
			</thead>

			<?php 

			$id =  $result['id'];

			$sql = "SELECT * from appointments where patientrid = '$id' ";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0){
				  while ($row = $result -> fetch_assoc()){

				  	echo "<tr>
				  	      <tbody>
				  	      <td>".$row["id"]."</td>
				  	      <td>". $row["patientrid"]."</td>
				  	      <td>".$row["specialisationss"]."</td>
				  	      <td>".$row["doctors"]."</td>
				  	      <td>".$row["fees"]."</td>
				  	      <td>".$row["datee"]."</td>
				  	      <td>".$row["timee"]."</td>
				  	      <td>".$row["Status"]."</td>
				  	      <td><a href='cancel1.php?id=$row[id]' id='cancel'>Cancel</a>
				  	     
				  	      </tbody>
				  	      </tr>";
				  }
				  echo "</table>";

			}

			?>
		</table>
	</div>

</body>
</html>
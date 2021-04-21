<?php
require 'dbconfig/mark1.php';

error_reporting(0);
session_start();

$user = $_SESSION['user2'];

$query = "SELECT * FROM doctorr WHERE username = '$user'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>doctors</title>
	<link rel="stylesheet" type="text/css" href="doctors.css?a=<?php echo time();?>">
</head>
<body>
	<div class="menu2">
<div class="heading11">
	<p>Dr.<?php echo $result['fullname']; ?> | APPOINTMENT</p>
</div>
<div id="clear">

	<a href="clear.php"><button id="button3">Clear</button></a>
</div>
<table class="htable"> 

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
			   <th align="center" >Action</th>
			</tr>
			</thead>

			<?php 

			$id =  $result['doctorid'];

			$sql = "SELECT * from appointments where doctors = '$id' ";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0){
				  while ($row = $result -> fetch_assoc()){

				  	echo "<tr>
				  	      <tbody>
				  	      <td>".$row["id"] . "</td>
				  	      <td>". $row["patientrid"]."</td>
				  	      <td>".$row["specialisationss"]."</td>
				  	      <td>".$row["doctors"]."</td>
				  	      <td>".$row["fees"]."</td>
				  	      <td>".$row["datee"]."</td>
				  	      <td>".$row["timee"]."</td>
				  	      <td>".$row["Status"]."</td>
				  	      <td ><a href='cancel.php?rn=$row[id]'><button  id='button1' >Cancel</button></a>&nbsp<a href='accept.php?rn=$row[id]'><button id='button2'>Accept</button></a></td>
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
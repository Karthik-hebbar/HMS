<?php

require 'dbconfig/mark1.php';
// error_reporting(0);
// session_start();

// $user = $_SESSION['user1'];

// $query = "SELECT * FROM adminn WHERE username = '$user'";
// $data = mysqli_query($con,$query);
// $result = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>doctors</title>
	<link rel="stylesheet" type="text/css" href="allcss.css?a=<?php echo time();?>">
</head>
<body>
	
<div class="heading2">
	<p>ADMIN | PATIENTS</p>
</div>
<div id="main222">
<table class="htable" > 
			
			<tr>
				<thead>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Mobno</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Action</th>
				
				
			   
			</tr>
			</thead>

			<?php 

			// $id =  $result['id'];

			$sql = "SELECT * from patientt ";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0){
				  while ($row = $result -> fetch_assoc()){

				  	echo "<tr>
				  	      <tbody>
				  	      <td>".$row["id"]."</td>
				  	      <td>". $row["firstname"]."</td>
				  	      <td>".$row["lastname"]."</td>
				  	      <td>".$row["gender"]."</td>
				  	      <td>".$row["dob"]."</td>
				  	      <td>".$row["mobno"]."</td>
				  	      <td>".$row["email"]."</td>
				  	      <td>".$row["username"]."</td>
				  	      <td>".$row["password"]."</td>
				  	      <td><a href='removeuser.php?rn=$row[id]' id='delete'>Delete</a></td>
				  	      </tbody>
				  	      </tr>";
				  }
				  echo "</table>";

			}

			?>

</div>
</body>
</html>
<?php

require 'dbconfig/mark1.php';



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>doctors</title>
	<link rel="stylesheet" type="text/css" href="allcss.css?a=<?php echo time();?>">
</head>
<body>
<div class="heading1">
	<p>ADMIN | DOCTORS</p>
</div>
<div id="main222">
      <div class="adddoc">
      	<a href="add1.php">ADD-DOCTOR</a>
      </div>
      
     
	 <table class="htable" > 
			</thead>
			<tr>
				<thead>
				<th>ID</th>
				<th>Fullname</th>
				<th>Specialization</th>
				<th>Phno</th>
				<th>Email</th>
				<th>Fee</th>
				<th>Username</th>
				<th>Password</th>
				<th colspan="2">Action</th>					
			   
			</tr>
			</thead>

			<?php 


			$sql = "SELECT * from doctorr ";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0){
				  while ($row = $result -> fetch_assoc()){

				  	echo "<tr>
				  		  <tbody>
				  		  <td>".$row["doctorid"] . "</td>
				  		  <td>". $row["fullname"]."</td>
				  		  <td>".$row["specialisations"]."</td>
				  		  <td>".$row["phno"]."</td>
				  		  <td>".$row["email"]."</td>
				  		  <td>".$row["fee"]."</td>
				  		  <td>".$row["username"]."</td>
				  		  <td>".$row["password"]."</td>
				  		  <td colspan='2'><a href='edit.php?rn=$row[doctorid]' id='edit'>Edit</a> &nbsp<a href='deletedoc.php?rn=$row[doctorid]' id='delete'>Delete</a></td>

				  		  </tbody>
				  		  </tr>";
				  }
				  echo "</table>";

			}

			?>
 </div>
</body>
</html>
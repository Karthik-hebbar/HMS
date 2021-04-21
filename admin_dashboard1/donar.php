<?php

require 'dbconfig/mark1.php';



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>session</title>
	<link rel="stylesheet" type="text/css" href="allcss.css?a=<?php echo time();?>">
</head>
<body>
<div class="heading3">
	<p>ADMIN | ORGAN-DONARS</p>
</div>
<div class="main3333" style="width: -10%;">
<table class="htable"  style="margin-top: 2%; margin-left: 260px;"> 
			
			<tr>
				<thead>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>DOB</th>
				<th>Gender</th>

		        <th>Mobno</th>
				<th>Email</th>
				<th>Street</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
				<th>Pincode</th>
			    <th>Permission</th>
			    <th>Action</th>

			</tr>
			</thead>

			<?php 

			// $id =  $result['id'];

			$sql = "SELECT * from donation";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0){
				  while ($row = $result -> fetch_assoc()){

				  	echo "<tr>
				  	      <tbody>
				  	      <td>".$row["Did"] . "</td>
				  	      <td>". $row["first"]."</td>
				  	      <td>".$row["last"]."</td>
				  	      <td>".$row["Dateofbirth"]."</td>
				  	      <td>".$row["gender"]."</td>
				  	      <td>".$row["mobno"]."</td>
				  	      <td>".$row["eemail"]."</td>
				  	      <td>".$row["street"]."</td>
				  	      <td>".$row["city"]."</td>
				  	      <td>".$row["state"]."</td>
				  	      <td>".$row["country"]."</td>
				  	       <td>".$row["pincode"]."</td>
				  	      <td>".$row["permission"]."</td>
				  	       <td><a href='removedon.php?rn=$row[Did]' id='delete'>Delete</a></td>

				  	      </tbody>
				  	      </tr>";
				  }
				  echo "</table>";

			}

			?>

</div>
</body>
</html>
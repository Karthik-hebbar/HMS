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
<div class="heading4">
	<p>ADMIN | FEEDBACK</p>
</div>
<div id="main2222">
<table class="htable1"  style="margin-top: 5%;"> 
			
			<tr>
				<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Feedback</th>
				<th>Action</th>
				

			</tr>
			</thead>

			<?php 

	

			$sql = "SELECT * from feedback";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0)
			{
				  while ($row = $result -> fetch_assoc())
				  {

				  	echo "<tr>
				  	       <tbody>
				  	       <td>".$row["id"] . "</td>
				  	       <td>". $row["name"]."</td
				  	       ><td>".$row["email"]."</td>
				  	       <td>".$row["feedback"]."</td>
				  	       <td><a href='removepro.php?rn=$row[id]' id='delete'>Delete</a></td>

				  	       </tbody>
				  	       </tr>";
				  }
				  echo "</table>";

			}

			?>


</div>
</body>
</html>
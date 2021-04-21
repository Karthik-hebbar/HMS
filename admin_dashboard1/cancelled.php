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

	<a href="clear.php" style=" position: absolute; left: 93%; top: 250px;" id="anc">Clear</a>
<table class="htable1"  style="margin-top: 5%;"> 
			
			<tr>
				<thead>
				<th>ID</th>
				<th>AppointmentID</th>
				<th>PID</th>
				<th>DOCID</th>
				<th>Reason</th>
				

			</tr>
			</thead>

			<?php 

	

			$sql = "SELECT * from cancelled";
			$result = mysqli_query($con,$sql);

			if($result -> num_rows > 0)
			{
				  while ($row = $result -> fetch_assoc())
				  {

				  	echo "<tr>
				  	       <tbody>
				  	       <td>".$row["cid"] . "</td>
				  	       <td>". $row["aid"]."</td
				  	       ><td>".$row["userid"]."</td>
				  	       <td>".$row["docid"]."</td>
				  	       <td>".$row["reason"]."</td>

				  	       </tbody>
				  	       </tr>";
				  }
				  echo "</table>";

			}

			?>


</div>
</body>
</html>
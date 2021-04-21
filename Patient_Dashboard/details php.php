<?php
require 'dbconfig/mark1.php';

session_start();

 $userpro = $_SESSION['name'];
 $query = "SELECT * FROM doctorr WHERE fullname = '$userpro'";
 $data = mysqli_query($con,$query);
 $result = mysqli_fetch_assoc($data);




?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Doctor</title>
	<link rel="stylesheet"  href="search.css">
</head> 
<body>

<p><?php echo $result['about']; ?></p>

<form method="post">
	
	<a href="cancel.php">Cancel</a>
</form>




 	</body>
	</html>
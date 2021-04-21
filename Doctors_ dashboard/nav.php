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
	<title>Navigation Frame</title>
	<link rel="stylesheet"  href="doctors.css?a=<?php echo time();?>">
</head>
<body>
	<div class="menu">
		<img src="../admin_dashboard1/<?php echo $result['picssource']; ?>">
		<div class="navi">
			<!-- <p> Welcome Dr.<?php echo $result['fullname'];?></p> -->
			<ul>
<br><br><br><br><br><br><li><h3><a href="home1.php" class="cool-link"  style="text-decoration: none; margin-top:1px;">DASHBOARD</h3></a></br></li>

	<li><h3><a href="appointment1.php" class="cool-link "style="text-decoration: none;margin-top: ">APPOINTMENTS</h3></a></br></li>

		
				</ul>
					</div>
				</div>


</body>
</html>
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatiable" content="ie=edge">
	<title>Navigation Frame</title>
	<link rel="stylesheet"  href="experinav.css?v=<?php echo time();?>">
</head>
<body>
	<div class="menu">
		<img src="<?php echo $result['picsource']; ?>">
		
		<p> Welcome <?php echo $user?></p>
		<div class="navi">
			<ul>
<br><br><br><br><br><br><li><h3><a href="home1.php" class="cool-link"  style="text-decoration: none; margin-top:1px;">HOME</h3></a></br></li>

	<li><h3><a href="fix.php" class="cool-link "style="text-decoration: none;margin-top: ">FIX-APPOINTMENT</h3></a></br></li>

		<li><h3><a href="search1.php" class="cool-link" style="text-decoration: none;">SEARCH-DOCTOR</h3></a></br></li>

			<li><h3><a href="history1.php" class="cool-link" style="text-decoration: none;"style="text-decoration: none;">APPOINTMENT-HISTORY</h3></a></br></li>

				<li><h3><a href="Don1.php" class="cool-link" style="text-decoration: none; ">ORGAN-DONATION</h3></a></br></li>
				<li><h3><a href="profile1.php" class="cool-link" style="text-decoration: none; ">PROFILE</h3></a></br></li>

				
				</ul>
					</div>
				</div>








</body>
</html>
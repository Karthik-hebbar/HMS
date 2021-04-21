<?php

session_start();
require 'dbconfig/mark1.php';



?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="picture.css">
</head>

<body>
	<div class="menu">
		<div class="logo">
			<img src="cooltext330950241525008.png">
			<a href="../home.php"><img src="../Patient_Dashboard/back2.png" id="imggg"></a>

		</div>
		<div class="loginbox">
			<h2>ADMIN LOG-IN</h2>
			<form method="post">

				<div class="input">
					<input type="text" name="user" placeholder="" required="">
					<label>admin name</label>
				</div>
				<div class="input">

					<input type="password" name="password" placeholder="" required="">
					<label>password</label>
				</div>
				<input class="btn" type="submit" name="submit" value="submit"><br><br><br><br>
				<div>


				</div>

			</form>
			<?php

			if (isset($_POST['submit'])) {

				$un = $_POST['user'];
				$pw = $_POST['password'];

				$query = "select * from adminn WHERE username ='$un' AND password = '$pw'";

				$query_run = mysqli_query($con, $query);

				if (mysqli_num_rows($query_run) > 0) {
					$_SESSION['user1'] = $un;
					header('location:home1.php');
				} else {
					echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
				}
			}


			?>

		</div>
		<div class="Footer">
			<p>Copyright &copy;2019.
				All rights reserved</p>
		</div>
	</div>




</html>
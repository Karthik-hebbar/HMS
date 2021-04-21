<?php

session_start();
require 'dbconfig/mark1.php';




?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> login form design</title>
	<link rel="stylesheet" href="stylee.css?a=<?php echo time(); ?>">
</head>

<body>

	<div class="menu">
		<div class="logo">
			<img src="cooltext330950241525008.png">
			<a href="../home.php"><img src="../Patient_Dashboard/back2.png" id="imggg"></a>

		</div>
		<div class="loginbox">
			<h2>DOCTOR LOG-IN</h2>
			<form method="post">

				<div class="input">
					<input type="text" name="user" placeholder="" required="">
					<label>username</label>
				</div>
				<div class="input">

					<input type="password" name="password" id="showpw" placeholder="" required=""></button>
					<label>password</label>
				</div>
				<input class="btn" type="submit" name="submit" value="submit"><br><br>


				<div class="hlink">
					<a href="#">
						<center>forgot your password?</center>
					</a><br>

				</div>

			</form>

			<?php

			if (isset($_POST['submit'])) {

				$un = $_POST['user'];
				$pw = $_POST['password'];

				$query = "SELECT * from doctorr WHERE username ='$un' AND password = '$pw'";

				$query_run = mysqli_query($con, $query);

				// $query_runnn = mysql_error($con,$query1);

				if (mysqli_num_rows($query_run) > 0) {
					$_SESSION['user2'] = $un;
					header('location:loading.html');
				} else {
					echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
				}
			}


			?>


		</div>


	</div>
	<div class="Footer">
		<p>Copyright &copy;2019.
			All rights reserved</p>
	</div>


</body>

</html>
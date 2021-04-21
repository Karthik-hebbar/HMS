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
	<script type="text/javascript">
		function lettersonly(input) {

			var regex = /[^a-z]/gi;
			input.value = input.value.replace(regex, "");
		}
	</script>

</head>

<body>

	<div class="menu">
		<div class="logo">
			<img src="../cooltext330950241525008.png">

			<a href="../home.php"><img src="back2.png" id="imggg"></a>

		</div>
		<div class="loginbox">
			<h2>PATIENT LOG-IN</h2>
			<form method="post" name="form">

				<div class="input">
					<input type="text" name="user" placeholder="" required="" onkeyup="lettersonly(this)">
					<label>username</label>
				</div>
				<div class="input">

					<input type="password" name="password" id="showpw" placeholder="" required="">
					<label>password</label>
				</div>

				<!-- <img src="" width="30" height="35"> -->
				<input class="btn" type="submit" name="submit" value="submit"><br><br>


				<div class="hlink">

					<p>Don't have an account?</p>
					<a href="create.php">
						<center>create a new account</center>
					</a>
				</div>

			</form>

			<?php

			if (isset($_POST['submit'])) {

				$un = $_POST['user'];
				$pw = $_POST['password'];

				$query = "SELECT * from patientt WHERE username ='$un' ";
				$query12 = "SELECT * from patientt WHERE  password = '$pw'";
				$query_run = mysqli_query($con, $query);
				$query_run2 = mysqli_query($con, $query12);


				if (mysqli_num_rows($query_run) <= 0 || mysqli_num_rows($query_run2) <= 0) {
					if (mysqli_num_rows($query_run) <= 0 && mysqli_num_rows($query_run2) <= 0) {
						echo '<script type="text/javascript"> alert("Invalid username and password")</script>';
						exit();
					}
					if (mysqli_num_rows($query_run) <= 0) {
						echo '<script type="text/javascript"> alert("Invalid username")</script>';
					} else {
						echo '<script type="text/javascript"> alert("Invalid password")</script>';
					}
				} else {
					$_SESSION['user'] = $un;
					header('location:loading.html');
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
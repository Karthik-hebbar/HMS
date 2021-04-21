<?php
session_start();
		require'dbconfig/mark1.php';


			$user=$_SESSION['user'];
			$query="select * from patientt where username='$user'";
			$query=mysqli_query($con,$query);
			$row = mysqli_fetch_assoc($query);

			



?>
<!DOCTYPE html>
<html>
<head>
	<title>	patient's dashboard</title>
	<link rel="stylesheet" type="text/css" href="experinav.css?a=<?php echo time();?>">
</head>
<!-- <script type="text/javascript">
	function myFunction() {

   const pass = document.getElementById('id1');


  
} 
</script> -->
<body>
	<div class="menu3">
	<div class="profile1">
		<p>user | Edit Profile</p><br>
		<hr id="hr">
	</div>
<div class="loginbox4">
<form method="post" onsubmit="return validation();" >
	<div id="text">
	<p>U.ID</p><input type="text" name="id" value="<?php echo $row['id'] ?>" readonly>
<p>First Name</p><input type="text" name="first" value="<?php echo $row['firstname'] ?>">
	<p>Last Name</p><input type="text" name="last" value="<?php echo $row['lastname'] ?>">
		<p>Username</p><input type="text" name="user" value="<?php echo $row['username'] ?>">
		<p>DOB</p><input type="date" name="dob" value="<?php echo $row['dob'] ?>">
			<p>Mobno</p><input type="text" name="mobno" value="<?php echo $row['mobno'] ?>">
				<p>Email</p><input type="text" name="email" value="<?php echo $row['email'] ?>">
					<p>Password</p><input type="text" name="pass" value="<?php echo $row['password'] ?>">
						<p>Confirm Password</p><input type="text" name="conpass"  id="id1" > <p id="error"></p>
					</div>
								<input type="submit" name="submit" value="Edit" onclick="myFunction()"><br><br>
								<input type="submit" name="back" value="Back">




		</form>
</div>
		<?php

		     if(isset($_POST['submit']))
            {
				$id = $_POST['id'];
				$first = $_POST['first'];
				$user = $_POST['user'];
				$last = $_POST['last'];
				$dob = $_POST['dob'];
				$mobno = $_POST['mobno'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$conpass = $_POST['conpass'];
            
				if($pass == $conpass)
				{
						$query2= "UPDATE patientt SET id='$id',firstname='$first',lastname='$last',username='$user',dob='$dob',email='$email',mobno='$mobno',password='$pass' where id= '$id'";
						$result = mysqli_query($con,$query2);

						if($result)
						{
							echo '<script type="text/javascript" > alert("Successfully updated")</script>';
						}
						else
						{
							echo '<script type="text/javascript" > alert("Error")</script>';
						}

				}

            }
            else
            	if(isset($_POST['back']))
            {
            	header('location:profile1.php');
            }
		?>
	</div>
</body>
</html>

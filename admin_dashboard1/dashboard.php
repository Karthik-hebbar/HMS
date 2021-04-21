<?php
require 'dbconfig/mark1.php';

error_reporting(0);
session_start();

$user = $_SESSION['user1'];

$query = "SELECT * FROM adminn WHERE username = '$user'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatiable" content="ie=edge">
 <title>  admin dashboard </title>
<link rel="stylesheet"  href="allcss.css?a=<?php echo time();?>" >
</head>

<body>
<div class="menu1">
    <img src="gear-flat-icon-sign-gears-logo-for-web-design-vector-12366271.jpg">
    <p style="margin-left: 77px; color: white; font-size: 20px;"><?php echo $user?></p>
    
    <div class="navi">
      <ul>
<br><br><br><br><br><br><li><h3><a href="home1.php" class="cool-link"  style="text-decoration: none; margin-top:1px;">DASHBOARD</h3></a></br></li>

  <li><h3><a href="doctor1.php" class="cool-link "style="text-decoration: none; ">DOCTORS</h3></a></br></li>

    <li><h3><a href="patient1.php" class="cool-link" style="text-decoration: none;">PATIENTS</h3></a></br></li>

      <li><h3><a href="donar1.php" class="cool-link"style="text-decoration: none;">ORGAN DONORS</h3></a></br></li>

        <li><h3><a href="feedback1.php" class="cool-link" style="text-decoration: none; ">FEEDBACK</h3></a></br></li>
     
          <li><h3><a href="cancelled1.php" class="cool-link" style="text-decoration: none; ">CANCELLED-APPOINTMENTS</h3></a></br></li>
        </ul>
          </div>
        </div>
</body>
</html>

 
<?php


session_start();

$user = $_SESSION['user2'];

if($user == true)
{

}
else
{
	header('location:doctorlog.php');
}


?>
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
	<title>Home</title>
	<link rel="stylesheet"  href="doctors.css?a=<?php echo time();?>">
</head>
<body>

	
	<div class="banner-area">
		<div class="head">
			<br><p>Dr.<?php echo $result['fullname']; ?> | DASHBOARD</p>
		</div>
		
	<center><table>
		<tr>
	<td ce><div class="one">
	<a href="appointment1.php" name="main_frame"><img src="appointment.png"></a>
	<p>Appointment</p>
</div><br></td>


</tr>
	

</table></center>
</div>

</body>
</html>
<?php
session_start();
require'dbconfig/mark1.php';
$user = $_SESSION['user'];
$query= "SELECT * FROM patientt WHERE username='$user'";
$query1 = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($query1);
$id = $data['id'];
$query2 = "DELETE from patientt WHERE id='$id'";
$queryrun = mysqli_query($con,$query2);
if($queryrun)
{
	header('location:loginform.php');
}
else
{
	echo '<script type="text/javascript" > alert("Error")</script>';
}


?>
<?php
	
	require 'dbconfig/mark1.php';

   
// session_start();
// $user = $_SESSION['user2'];
$query = "SELECT * FROM cancelled";
$data = mysqli_query($con,$query);

// $doctors = $result['doctorid'];
 	
   
   
	$query3 = "DELETE  FROM cancelled " ;
	$data3 = mysqli_query($con,$query3);

	if($data3)
	{
		header('location:cancelled1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}


 ?>
 
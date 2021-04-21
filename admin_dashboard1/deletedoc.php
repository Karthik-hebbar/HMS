<?php
	
	require 'dbconfig/mark1.php';

    $id = $_GET['rn'];
	$query = "DELETE  FROM doctorr WHERE doctorid= '$id'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		header('location:doctor1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}

 ?>
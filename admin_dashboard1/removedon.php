<?php
	
	require 'dbconfig/mark1.php';

    $id = $_GET['rn'];
	$query = "DELETE  FROM donation WHERE Did= '$id'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		header('location:donar1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}

 ?>
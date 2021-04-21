<?php
	
	require 'dbconfig/mark1.php';

    $id = $_GET['rn'];
	$query = "UPDATE appointments SET Status='REJECTED' WHERE id='$id'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		header('location:appointment1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}

 ?>

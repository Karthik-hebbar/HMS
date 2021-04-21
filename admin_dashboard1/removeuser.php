<?php
	
	require 'dbconfig/mark1.php';

    $id = $_GET['rn'];
	$query = "DELETE  FROM patientt WHERE id= '$id'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		header('location:patient1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}

 ?>
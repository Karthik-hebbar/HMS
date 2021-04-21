<?php
	
	require 'dbconfig/mark1.php';

    $id = $_GET['rn'];
	$query = "DELETE  FROM feedback WHERE id= '$id'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		header('location:feedback1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}

 ?>
<?php
	
	require 'dbconfig/mark1.php';

   
session_start();
$user = $_SESSION['user2'];
$query = "SELECT * FROM doctorr WHERE username = '$user'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);
$doctors = $result['doctorid'];
 	
    $query1 = "SELECT * FROM appointments WHERE doctors='$doctors' AND Status='PENDING' ";
$query_run1 = mysqli_query($con,$query1 );
    if(mysqli_num_rows($query_run1)>0)
    {
    
       echo '<script type="text/javascript" > alert("There are some pending appointments")</script>';
       
       	header('location:appointment1.php');
      
   }
   else
   {
   
	$query3 = "DELETE  FROM appointments WHERE doctors='$doctors'" ;
	$data3 = mysqli_query($con,$query3);

	if($data3)
	{
		header('location:appointment1.php');
	}
	else
	{
		echo '<script type="text/javascript" > alert("Error!")</script>';
	}
}

 ?>
 
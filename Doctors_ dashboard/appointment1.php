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
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Dashboard</title>

<meta charset="utf-8" />
		

	<link rel="stylesheet"  href="doctors.css?a=<?php echo time();?>">
	
</head>
<body>
	  <div id="app" >	
	      
		<?php include('top.php');?>
	     
	</div>
	<div class="appp">
 <?php include('appointment.php');?> 
		</div> 
                <div id="apppp" style="margin-top: -10%;" >
			   <?php include('nav.php');?> 

			    </div> 
</body>
</html>
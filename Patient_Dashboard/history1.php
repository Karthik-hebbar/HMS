<?php


session_start();
error_reporting(0);
$user = $_SESSION['user'];

if($user == true)
{

}
else
{
	header('location:loginform.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Dashboard</title>

<meta charset="utf-8" />
		

	<link rel="stylesheet"  href="experinav.css?a=<?php echo time();?>">
	
</head>
<body>
	  <div id="app" >	
	      
		<?php include('top.php');?>
	     
	</div>
			<div class="appp">
			 <?php include('history.php');?> 
				</div>
 
                <div id="apppp" style="margin-top: 1%;"  >
			   <?php include('nav1.php');?> 

			    </div> 
</body>
</html>
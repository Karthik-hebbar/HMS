

<?php


session_start();

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
 <?php include('home.php');?> 
		</div> 
                <div id="apppp" style="margin-top: -58%;" >
			   <?php include('nav1.php');?> 

			    </div> 
</body>
</html>
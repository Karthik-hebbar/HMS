
<?php


session_start();

$user = $_SESSION['user'];

if($user == true)
{

}
else
{
	header('location:admin.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>vvc</title>

<meta charset="utf-8" />
		

	<link rel="stylesheet"  href="allcss.css?a=<?php echo time();?>">
	
</head>
<body>
	  <div id="app" >	
	      
		<?php include('top.php');?>
	     
	</div>
	 <div id="appp">

       <?php include('home.php');?>

	 </div>
	

	
                <div id="apppp" style="margin-top: -55%;"  >
			   <?php include('dashboard.php');?> 

			    </div> 
</body>
</html>
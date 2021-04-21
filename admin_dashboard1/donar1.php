<?php


session_start();

$user = $_SESSION['user1'];

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
	<title>Admin Dashboard</title>

<meta charset="utf-8" />
		

	<link rel="stylesheet"  href="allcss.css?a=<?php echo time();?>">
	
</head>
<body>
	  <div id="app" >	
	      
		<?php include('top.php');?>
	     
	</div>

	 <div id="appp">

       <?php include('donar.php');?>

	 </div>
	 
                <div id="apppp" style="position: absolute; top: 100px;"   >
			   <?php include('dashboard.php');?> 

			    </div> 
</body>
</html>
<?php
require 'dbconfig/mark1.php';

session_start();

 $userpro = $_SESSION['id'];
 $query = "SELECT * FROM doctorr WHERE doctorid = '$userpro'";
 $data = mysqli_query($con,$query);
 $result = mysqli_fetch_assoc($data);




?>
<!DOCTYPE html>
<html>
<head>

	<title>Search Doctor</title>
	<link rel="stylesheet"  href="experinav.css?a=<?php echo time(); ?>">
</head> 
<body>
	<div id="all">
		
		

	<div class="name">
	<p><?php echo $result['specialisations'];   ?> | Dr.<?php echo $result['fullname'];   ?></p> <br>
	<form method="post">
	
	<a href="cancel.php"><img src="back.png"></a>
</form>
</div>
<div id ="docimage">
	<img src="../admin_dashboard1/<?php echo $result['picssource'];?>">   
</div>
<div id="para">
<h2>ABOUT</h2>
<p><?php echo $result['about']; ?></p><br><br>


<h2>ACCOMPLISHMENTS</h2>
<p><?php echo $result['accomplishments']; ?></p><br><br>


<h2>EXPERIENCE</h2>
<p><?php echo $result['experience']; ?></p><br><br><br><br><br><br>

</div>
</div>
<div id= "para1">

	<h3>Email-ID:</h3>   <p><?php echo $result['email']; ?></p>
	<h3>Mobile-no:</h3>
	 <p>+91-<?php echo $result['phno'];?></p>
	</div>





 	</body>
	</html>
<?php 

require 'dbconfig/mark1.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Patient's Dashboard</title>
	<link rel="stylesheet" type="text/css" href="experinav.css?a=<?php echo time();?>">
</head>
<body>
<div class="menu3">
	<div class="profile">
		<p>user | Profile</p>
	</div>

  <div class="names">

  		<p><a href="editprofile.php" id="ed">Edit Profile</a></p><br>
  		<hr>
  	
  		<br><p><a href="deleteprofile.php" id="del">Delete my account</a></p><br>
  		


  </div>






</div>


</body>
</html>
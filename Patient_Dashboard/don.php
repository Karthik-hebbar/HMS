<?php

session_start();
require 'dbconfig/mark1.php';

$user= $_SESSION['user'];
$query = "SELECT * FROM patientt WHERE username = '$user'";

$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);

   

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>organ-donation</title>
	<link rel="stylesheet" type="text/css" href="experinav.css?a=<?php echo time()?>">
</head>
<body>
	<div class="containerr">
		<div class="fontt"><br>
			<p class="text">USER | ORGAN-DONATION</p>

	</div>
</div>
<div class="loginbox1">
	<h3>ORGAN DONATION FORM</h3>
	<form method="post">
		Full Name<br><br>
		<input type="text" name="fname" placeholder="first" value="<?php  echo $result['firstname'] ?>" readonly>
		<input type="text" name="lname" placeholder="last" value="<?php  echo $result['lastname'] ?>" readonly><br>
		DOB<br><br>
		<input type="Date" name="date" value="<?php  echo $result['dob'] ?>" readonly><br>
		Mobno<br><br>
		<input type="text" name="number" placeholder="### ### ####" value="<?php  echo $result['mobno'] ?>" readonly><br>
		Email<br><br>
		<input type="Email" name="email" value="<?php  echo $result['email'] ?>" readonly><br>
		Home Address<br><br>
		<input type="text" name="streett" placeholder="Street Address" required><br>
		<input type="text" name="city" placeholder="City" required>  
															<select name="State">
			                                                <option value="" disabled selected>State</option>
		  	                                                <option value="Karnataka">Karnataka</option>
		  	                                                <option value="Kerala">Kerala</option>
		  	                                                <option value="Tamil Nadu">Tamil Nadu</option>
		  	                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
		  	                                                <option value="Telangana">Telangana</option>
		  	                                                <option value="Maharashtra">Maharashtra</option>
		  	                                                <option value="Gujurat">Gujurat</option>
		  	                                                <option value="Himachal pradesh">Himachal pradesh</option>
		  	                                                <option value="Madhya pradesh">Madhya pradesh</option>
		  	                                                <option value="Punjab">Punjab</option>
		  	                                                <option value="Odisha">Odisha</option>
		  	                                                </select><br>
		<input type="text" name="pin" placeholder="PIN CODE" required>  <select name="Country" required>
			                                                <option value="" disabled selected>Country</option>
		  	                                                <option value="India">India</option> 	  
		  	                                                </select><br>                                    
        Gender<br><br>
        Male<input  type="radio" name="status" value="Male">
		Female<input  type="radio" name="status" value="Female"><br>

		I authorize you to use my organs/tissues for<br><br>
		Research<input  type="radio" name="status1" value="Research"><br>
		Transplant<input  type="radio" name="status1" value="Transplant"><br>
        
         <input class="btn" type="submit" name="submit" value="submit">
         
	</form>


	<?php 

			if(isset($_POST['submit']))
			{

				$finame =   $_POST['fname'];
                $laname =   $_POST['lname'];
                $dobb =   $_POST['date'];
                 $phno =   $_POST['number'];
                 $email = $_POST['email'];
                 if(isset($_POST['status']))
             {
             	$gender = $_POST['status'];
             }
             else
             {
             	echo '<script type="text/javascript" > alert("Please select gender")</script>';
             	exit();
             }
             if(isset($_POST['status1']))
             {
             	$permission = $_POST['status1'];
             }
             else
             {
             	echo '<script type="text/javascript" > alert("Please select gender")</script>';
             	exit();
             }

               $stre = $_POST['streett'];
                 $city = $_POST['city'];
                 $state = $_POST['State'];
                 $country = $_POST['Country'];
                 $pin = $_POST['pin'];


                 $query="SELECT * from donation WHERE mobno = '$phno'";

                 $query_run = mysqli_query($con,$query);

                 if(mysqli_num_rows($query_run)>0)
                 {

                 	 echo ' <script type ="text/javascript"> alert(" You have already registered ") </script>';

                 }
                 else
                 {
                 	$query1="insert into donation(first,last,Dateofbirth,mobno,eemail,street,city,state,pincode,country,gender,permission) values(' $finame','$laname','$dobb' ,'$phno','$email','$stre','$city','$state','$pin','$country,','$gender','$permission')";
                 	$query_run1 = mysqli_query($con,$query1);

                 	 if($query_run1)
                     {
                     	echo '<script type="text/javascript" > alert("Successfully Registered")</script>';
                     }
                     else
                     {
                     	echo '<script type="text/javascript" > alert("Error!")</script>';
                     }

                 }


			}




	 ?>

</body>
</html>
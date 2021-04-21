<?php
require 'dbconfig/mark1.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<link  rel="stylesheet"  href="add.css" >
</head>
<body>
<div class="container">
		<div class="font"> <br>
		<p class="text" >ADMIN|ADD-DOCTOR</p>
	</div>
</div>
<div class="loginbox">
<form method="post">

	Full-Name:<input type="text" name="fname">
	Ph-no:<input type="text" name="phno">
	Emailid:<input type="email" name="email">
    Specialization:<select name="Select_Specification" >
            <option >Select_Specification</option>
		  	 <option value="Gynecologist">Gynecologist</option>
		  	  <option value="General Physician">General Physician</option>
		  	   <option value="Homeopath">Homeopathy</option>
		  	    <option value="Ayurveda">Ayurveda</option>
		  	     <option value="Dentist">Dentist</option>
                 <option value="psychiatrist">Psychiatrist</option>
                 <option value="Oncologist">Oncologist</option>

		  	</select><br>
	Fee:<input type="text" name="fee">	  	
		  	
   

	User-Name:<input type="text" name="uname">
	Password:<input type="password" name="pass">
	Confirm-Password:<input type="password" name="cpass">

	<input type="submit" name="submit" value="Register">


	

</form>
</div>

</body>
</html>

<?php

   if (isset($_POST['submit'])) {

       $fn= $_POST['fname'];
       $pn = $_POST['phno'];
        $em = $_POST['email'];

        $Specialization = $_POST['Select_Specification'];
        $fee = $_POST['fee'];

$un = $_POST['uname'];
$pass= $_POST['pass'];   	
   
   $cpass = $_POST['cpass'];



   if($pass==$cpass)
             {
             
               $query1 = "select * from doctorr WHERE username='$un' ";
               $query2 = "select * from doctorr WHERE email='$em'"; 
               $query3 = "select * from doctorr WHERE  phno='$pn'";
             	   $query_run1 = mysqli_query($con,$query1 );
                   $query_run2 = mysqli_query($con,$query2 );
                   $query_run3 = mysqli_query($con,$query3 );
             	 

             	 if(mysqli_num_rows($query_run1)>0)
             	{
             		echo '<script type="text/javascript" > alert("username already exist")</script>';
             	}
             	else
             	{
             		if(mysqli_num_rows($query_run2)>0)
             		{
             			echo '<script type="text/javascript" > alert("emailid already exist")</script>';
             		}
             		else
             		{
             			if(mysqli_num_rows($query_run3)>0)
             			{
             				echo '<script type="text/javascript" > alert("phno already exist")</script>';
             			}

             			else
             			{
                              $query="insert into doctorr (fullname,phno,email,specialisation,fee,username,password) values('$fn','$pn' ,'$em','$Specializationn','$fee','$un','$pass')";
             		$query_run = mysqli_query($con,$query);


                         if($query_run)
                         {
                     	echo '<script type="text/javascript" > alert("Successfully Registered")</script>';
                        }
                        else
                        {
                     	echo '<script type="text/javascript" > alert("Error!")</script>';
                        }
             	     }	
                }
             	}
             	
        }
        else
        {
        	echo '<script type="text/javascript" > alert("Password and confirm does not match")</script>';
        }     	
}
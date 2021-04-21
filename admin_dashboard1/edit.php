<?php
require 'dbconfig/mark1.php';
error_reporting(0);
$id = $_GET['rn'];

        $query = "SELECT * FROM doctorr WHERE doctorid = '$id'";
        $data = mysqli_query($con,$query);
        $result = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<link  rel="stylesheet"  href="add.css?a=<?php echo time() ?>" >


</head>
<body>
<div class="container">
		<div class="font1"> <br>
		<p class="text" >ADMIN | EDIT-DOCTOR</p>
	</div>
</div>
<div class="loginbox">
<form method="post">

	<p>Full-Name:</p><input type="text" name="fname" value="<?php  echo $result['fullname'] ?>" >
	<p>Ph-no:</p><input type="text" name="phno" value="<?php  echo $result['phno'] ?>">
	<p>Emailid:</p><input type="email" name="email" value="<?php  echo $result['email'] ?>">
    <p>Specialization:</p><input type="text" name="Specialization" value="<?php  echo $result['specialisations'] ?>"><br>
	<p>Fee:</p><input type="text" name="fee" value="<?php  echo $result['fee'] ?>">	  	
		  	
    <p>About:</p> <input type="text" name="about" id="big"   value="<?php  echo $result['about'] ?>">   <br>     <br>
    <p>Accomplishments:</p>  <input type="text" name="accomplishments" id="big"  value="<?php  echo $result['accomplishments'] ?>"><br> <br>

    <p>Experience:</p><input type="text" name="experience" id="big"  value="<?php  echo $result['experience'] ?>"><br>   <br> <br>
   

	<p>User-Name:</p><input type="text" name="uname" value="<?php  echo $result['username'] ?>">
	<p>Password:</p><input type="text" name="pass" value="<?php  echo $result['password'] ?>">
	<p>Confirm-Password:</p><input type="password" name="cpass" >

	<input type="submit" name="submit" value="Save">
    <input type="submit" name="submitt" value="Back">
<?php
     if (isset($_POST['submit'])) {

        $fn= $_POST['fname'];
        $pn = $_POST['phno'];
        $em = $_POST['email'];

        $Specialization = $_POST['Specialization'];
        $fee = $_POST['fee'];
        $about=  $_POST['about']; 
        $acheive = $_POST['accomplishments']; 
        $experience = $_POST['experience'];

        $un = $_POST['uname'];
        $pass= $_POST['pass'];      
   
        $cpass = $_POST['cpass'];

        if($pass==$cpass)
             {
             
               // $query1 = "select * from doctorr WHERE username='$un' ";
               // $query2 = "select * from doctorr WHERE email='$em'"; 
               // $query3 = "select * from doctorr WHERE  phno='$pn'";
               //     $query_run1 = mysqli_query($con,$query1 );
               //     $query_run2 = mysqli_query($con,$query2 );
               //     $query_run3 = mysqli_query($con,$query3 );
                 
                          // echo '<script type="text/javascript" > confirm("Are you sure?")</script>' ;
         
                              $query=" UPDATE doctorr set fullname='$fn', phno='$pn', email='$em', specialisations='$Specialization',about='$about',accomplishments='$acheive', experience='$experience', username='$un',password='$pass' WHERE doctorid='$id'";
                    $query_run = mysqli_query($con,$query);


                         if($query_run)
                         {
                        echo '<script type="text/javascript" > alert("Successfully updated")</script>';

                         header('location:doctor1.php');
                        }
                        else
                        {
                        echo '<script type="text/javascript" > alert("Error!")</script>';
                        }
                 
                
                // else
                // {
                //  echo '<script type="text/javascript" > alert("password does not match")</script>';
                // }
        }
        else
        {
            echo '<script type="text/javascript" > alert("Password and confirm does not match")</script>';
        }       
}
elseif (isset($_POST['submitt'])) {


   header('location:doctor1.php');


}

?>





	

</form>
</div>

</body>
</html>


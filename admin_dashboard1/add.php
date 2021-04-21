<?php
require 'dbconfig/mark1.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<link  rel="stylesheet"  href="add.css?a=<?php echo time()?>" >
    <script type="text/javascript">
        

        function numberonly(input){
           
                 var phoneno = /^\d{10}$/;
                var regex = /[^0-9]/gi;
                input.value = input.value.replace(regex,"");
                 


            }
             function numberonlyy(input){
           
                 var phoneno = /^\d{10}$/;
                var regex = /[^0-9]/gi;
                input.value = input.value.replace(regex,"");
                 


            }

    </script>
</head>

<body>
<div class="container">
		<div class="font"> <br>
		<p class="text" >ADMIN|ADD-DOCTOR</p>
	</div>
</div>
<div class="loginbox" style="margin-top: 5%;">
<form method="post" enctype="multipart/form-data">

	<p>Full-Name:</p><input type="text" name="fname">
    <div class="input">
	<p>Ph-no:</p><input type="text" name="phno" onkeyup="numberonly(this)">
</div>
	<p>Emailid:</p><input type="email" name="email">
  <p>  Specialization:</p><select name="Select_Specification"  >
                    <option value disabled selected>Select Specification</option>
                 <?php
                 $sql = "SELECT  *  FROM specialisation";

                 $resultt = $con->query($sql);
                 while ($rs=$resultt->fetch_assoc()) {
                  ?>


<option value="<?php echo $rs["specialisationn"];    ?>" > <?php echo ( $rs["specialisationn"]); ?> </option>
         <?php
                 }
                 ?>  

                
                     
                 </select>
                 <div class="input">
	<p>Fee:</p><input type="text" name="fee" onkeyup="numberonlyy(this)">
</div>

    <p>About:</p> <textarea rows="9"  cols="165" name="about" value="<?php  echo $result['about'] ?>"></textarea><br><br>
    <p>Accomplishments:</p>  <textarea rows="9"  cols="165" name="accomplishments" ></textarea><br> <br>

    <p>Experience:</p><textarea rows="9"  cols="165" name="experience" value="<?php  echo $result['experience'] ?>"></textarea><br><br> <br>
   

	<p>User-Name:</p><input type="text" name="uname">
    <p>Add your photo:</p> <input type="file" name="file">
	<p>Password:</p><input type="password" name="pass">
	<p>Confirm-Password:</p><input type="password" name="cpass">

	<input type="submit" name="submit" value="Register">


	

</form>
</div>

</body>
</html>

<?php

   if (isset($_POST['submit'])) {

        $fn= $_POST['fname'];
                                $len =strlen($_POST['phno']);
       
                                    if($len>10 || $len<10)
                                    {
                                        echo '<script type="text/javascript" > alert("Enter a valid mob number")</script>';
                                                        exit();
                                         

                                    }
                                    else
                                    {
                                      $pn = $_POST['phno'];
                                    }
        $em = $_POST['email'];

        $Specialization = $_POST['Select_Specification'];
        $fee = $_POST['fee'];

        $un = $_POST['uname'];
        $pass= $_POST['pass'];

   
        $cpass = $_POST['cpass'];
        $about=  $_POST['about']; 
        $acheive = $_POST['accomplishments']; 
        $experience = $_POST['experience'];      
        

        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
         $folder1 = "images/".$filename;


       

        
        

      
        move_uploaded_file($tempname, $folder1);
       

                   $queryn = "SELECT * from specialisation where specialisationn = '$Specialization'";
                   $data = mysqli_query($con,$queryn);
                   $result = mysqli_fetch_assoc($data);
                   $specid = $result['id'];          


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
                                                        $query="insert into doctorr (fullname,phno,email,specialisations,fee,username,picssource,specialisationnid,password,about,accomplishments,experience) 

                                                                 values('$fn','$pn','$em','$Specialization','$fee','$un','$folder1','$specid','$pass','$about','$acheive','$experience')";
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
             	// else
             	// {
             	// 	echo '<script type="text/javascript" > alert("password does not match")</script>';
             	// }
        }
        else
        {
        	echo '<script type="text/javascript" > alert("Password and confirm password does not match")</script>';
        }     	
}

?>
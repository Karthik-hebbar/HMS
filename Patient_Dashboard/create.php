<?php
require 'dbconfig/mark1.php';



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>create a account</title>
	<link rel="stylesheet"  href="create.css?a=<?php echo time()?>">
     

    <script type="text/javascript">
        
     
      

            function lettersonly(input){

                var regex = /[^a-z]/gi;
                input.value = input.value.replace(regex,"");
            }

        function numberonly(input){
           
                 // var phoneno = /^\d{10}$/;
                var regex = /[^0-9]/gi;
                input.value = input.value.replace(regex,"");
                 


            }

       


    </script>

</head>
<body>
<div class="menu">
		<div class="logo">
		<img src="cooltext330950241525008.png"><br><br><br><br><br><br>

	</div>

    <a href="loginform.php"><img src="back2.png" id="imggg"></a>

	<div class="loginbox">
		<h2>CREATE ACCOUNT</h2>
		<form name="form" method="post" enctype="multipart/form-data">
			
			<div class="input">
			<input type="text" name="fname" placeholder="" required="" onkeyup="lettersonly(this)">
			<label>First-Name</label>			
		</div>

		<div class="input">
			<input type="text" name="lname" placeholder="" required="" onkeyup="lettersonly(this)">
			<label>Last-Name</label><br>			
		</div>
		<div class="label2">
<label>Gender</label><br><br>
		Male<input  type="radio" name="status" value="Male">
		Female<input  type="radio" name="status" value="Female"><br><br>
		
	</div>
         <div class="input" >
			<input type="text" name="uname" placeholder="" required="">
			<label>Username</label>			
		</div>

			<div class="input1">
			<label>DOB</label> <br><br>
			<input type="date" name="dob" id="dob" placeholder="" required="">
				
			</div>



			<div class="input">
			<input type="E-mail" name="email" placeholder="" required="" autocomplete="off">
			<label>E-mail ID</label>			
		</div>

		<div class="input">
			<input type="text" name="number" placeholder="" required="" onkeyup="numberonly(this)" >
			<label>MOB.NO</label>			
		</div>
        <p>Add your photo</p>
        <div class ="input">
            <input type="file" name="file">
        </div>
		  <div class="input">
			<input type="Password" name="password" placeholder="" required="">
			<label>Password</label>
						
		</div>
		<div class="input">
			<input type="Password" name="cpassword" placeholder="" required="" >
			<label>Confirm Password</label>			
		</div>
			<input class="btn" type="submit" name="submit"  id="submit" value="submit" ><br><br><br><br><br><br>
			
			</div>

		</form>
<?php
      

       if(isset($_POST['submit']))   // $_POST is a global variable which is inbuilt in php language   and isset checks whether the button is clicked or not
{

           
             $finame =   $_POST['fname'];
             $laname =   $_POST['lname'];
            
           if(isset($_POST['status']))
             {
             	$gender = $_POST['status'];
             }
             else
             {
             	echo '<script type="text/javascript" > alert("Please select gender")</script>';
             	exit();
             }
             $usname =   $_POST['uname'];
             $dobb =   $_POST['dob'];
             $gmail =   $_POST['email'];
                                                if (filter_var( $gmail, FILTER_VALIDATE_EMAIL))
                                                 {
                                                  
                                                 

                                                } 
                                                else
                                                 {
                                                  echo '<script type="text/javascript" > alert("Email is invalid")</script>';
                                                        exit();
                                                 }




            // $phno =   $_POST['number'];

                                                    $length = strlen($_POST['number']);
                                                    if($length>10 || $length<10)
                                                    {
                                                        echo '<script type="text/javascript" > alert("Enter a valid mobnumber")</script>';
                                                        exit();
                                                        
                                                    }
                                                    else
                                                    {
                                                         $phno =   $_POST['number'];

                                                    }
             $pass =   $_POST['password'];
             $cpass =   $_POST['cpassword'];
                    

            
             $filename = $_FILES["file"]["name"];
             $tempname = $_FILES["file"]["tmp_name"];

             $folder = "images/".$filename;
             move_uploaded_file($tempname, $folder);




             if($pass==$cpass)
             {
             
               $query1 = "select * from patientt WHERE username='$usname' ";
               $query2 = "select * from patientt WHERE email='$gmail'"; 
               $query3 = "select * from patientt WHERE  mobno='$phno'";
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
                              $query="insert into patientt(firstname,lastname,gender,username,dob,email,mobno,picsource,password) values('$finame','$laname','$gender' ,'$usname','$dobb','$gmail','$phno','$folder','$pass')";
             		$query_run = mysqli_query($con,$query);

                     if($query_run)
                     {
                        //sleep(1000);
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
        	echo '<script type="text/javascript" > alert("Password and confirm password does not match")</script>';
        }     	
}

       	?>
    </div>
<div class="Footer">
      <p>Copyright &copy;2019.
      All rights reserved</p>
    </div>

</body>
</html>
<?php

require 'dbconfig/mark1.php';



$id = $_GET['id'];

$query="Select * from appointments where id='$id'";
$query_run=mysqli_query($con,$query);
$result = mysqli_fetch_assoc($query_run);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cancel Appointment</title>
	<style type="text/css">

		body{
			background-image: url('cancel.jpeg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			margin-top: 43%;
		}
		
.loginbox1 {
  width: 770px;
  height: 795px;
  background: transparent;
  color: black;
  top: 50%;
  left: 50%;
    margin-top: 20px;
    margin-left: 20px;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 40px;
   box-shadow: 0 15px 25px rgba(0,0,0,0.5);
     border-radius: 10px;
   /*  text-transform: uppercase;*/

}
.loginbox1 h3 {
    margin-right: 500px;
    margin: 0 0 30px;
    padding: 0;
    color: black;
font-size: 30px;
font-family: Arial, Helvetica, sans-serif;
   
    text-align: center;
}
.loginbox1 input,textarea{
  width: 100%;
  height: auto;
  margin-bottom: 20px;
  color: black;
  font-size: 23px;
  border-radius: 10px;
}
.loginbox1 p{
	 font-size: 20px;
	 font-weight: bold;
	 font-family: Arial, Helvetica, sans-serif;
}
.loginbox1 input[type="submit"]
{
  border:none;
  outline: none;
  height: 40px;
  background: #fb2525;
  color: white;
  font-size: 18px;
  /*border-radius: 20px;*/
   transition: background 0.4s,color 0.4s;
}
.loginbox1 input[type="submit"]:hover
{
  cursor: pointer;
  background: #ffc107;
  color: #000;
  
}

	</style>
</head>
<body>
	

			<div class="loginbox1">
	<form method=post>
	<h3>Cancel Appointment</h3>
			<p>AppointID:</p><input type="text" value="<?php echo $result['id']; ?>" name="aid" >
			<p>UserID:</p><input type="text" name="uid" value="<?php echo $result['patientrid']; ?>">
			<p>DoctorID:</p><input type="text" name="did" value="<?php echo $result['doctors']; ?>">

			<p>Reason:</p><textarea rows="6" cols="96" name="reason"></textarea>
			<input type="submit" name="submit" value="cancel appointment">
			<input type="submit" name="back" value="back">

	</form>
	<?php

		if(isset($_POST['submit']))
		{
			$appid=$_POST['aid'];
			$userid =$_POST['uid'];
			$docid = $_POST['did'];

			$reason = $_POST['reason'];


			$query1="insert into cancelled(aid,userid,docid,reason) values('$appid','$userid','$docid','$reason')";
			$query_run1=mysqli_query($con,$query1);

			$query2="delete from appointments where id='$appid'";
			$query_run2=mysqli_query($con,$query2);
			if($query_run1 && $query_run2)
			{
				echo '<script type="text/javascript" > alert(" the Appointment has been cancelled")</script>';
					header('location:history1.php');

			}
		else
		{
			echo '<script type="text/javascript" > alert("ERROR!")</script>';
		}


		}
		elseif(isset($_POST['back']))
		{
			header('location:history1.php');
		}


	?>
</div>
</body>
</html>
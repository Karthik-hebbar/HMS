<?php
require 'dbconfig/mark1.php';


?>


<!DOCTYPE html>
<html>
<head>
	<title>appointment
  </title>
	<link rel="stylesheet"  href="experinav.css?a=<?php echo time(); ?>">
  <link rel = "stylesheet" href ="js/jquery-ui.css">
</head>


<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
                                        <script>
                                        	   
                                          	function getdoctor(val)
                                          	{
                                               $.ajax({
                                               	type:"POST",
                                               	url:"get_doctor1.php",
                                               	data: 'specialisationn='+val,
                                               	success: function(data){

                                                              $("#doctors").html(data);

                                               	}
                                               });
                                          	}

                                          		function getfee(val)
                                          	{
                                               $.ajax({
                                               	type:"POST",
                                               	url:"get_fee.php",
                                               	data: 'id='+val,
                                               	success: function(data){

                                                              $("#fees").html(data);

                                               	}
                                               });
                                          	}                


                                            
                                        </script>
                                        <script>
                                        $(function(){

                                            $("#datee").datepicker({

                                              dateFormat : "yy-mm-dd",

                                              minDate : 1,

                                              beforeShowDay:disablesunday

                                            });
                                          
                                             function disablesunday(sunday){
                                              var calenderday = sunday.getDay();
                                              return[(calenderday>0)];
                                             };                 
                                        });
                                        </script>
<body>
	
	<div class="container">
		<div class="font"> <br>
		<p class="text" >USER | BOOK-APPOINTMENT</p>
	</div>
</div>
<div class="loginbox">
	<h3>Book Appointment</h3>
	<form method="POST">

    User ID <br>
         
         <?php 


            session_start();
          $user = $_SESSION['user'];
          $query = "SELECT * FROM patientt WHERE username = '$user'";

          $data = mysqli_query($con,$query);



          while ($roww = mysqli_fetch_array($data)) {
          
          
          ?>
        <input type="text" name="id" value = "<?php  echo $roww['id'] ?>" readonly>
        <?php
      }
      ?>
		Specialization <br>
		  <select name="Select_Specification" placeholder="Select Specification" onchange="getdoctor(this.value);">  
		  	
         <option value disabled selected>Select Specialization</option>
		  	     <?php
		  	     $sql = "SELECT  *  FROM specialisation";

		  	     $resultt = $con->query($sql);
		  	     while ($rs=$resultt->fetch_assoc()) {
                  ?>


<option value="<?php echo $rs["specialisationn"];    ?>" > <?php echo ( $rs["specialisationn"]); ?> </option>
		 <?php
		  	     }
		  	     ?>  
		  	      
		  	</select><br>
		  	Doctors<br>
		  	<select name="Select_Doctor" id="doctors" onChange="getfee(this.value);" ><br><br>
		  		
		  		
		  	</select>
		  				
 </select>
 <br> Consultancy Fees<br>
  <select name="Select_fee" id="fees"><br><br>
		  		
		  		
		  	</select>
 Date<br>
  <input type="text" name="date" id ="datee" autocomplete="off"><br>
  Time<br>
 <select name="time" style="background-color: white;" required>
          <option value disabled selected> Select Time</option>
          <option value="10:00 AM">10:00 AM</option>
          <option value="11:00 AM">11:00 AM</option>
           <option value="12:30 PM">12:30 PM</option>
            <option value="10:00 AM">3:00 PM</option>
    </select>
      <br><br>

 
  <input class="btn" type="submit" name="submit" value="submit">
	</form>

<?php
          if(isset($_POST['submit']))
          {
            $id = $_POST['id'];
            $spec = $_POST['Select_Specification'];
            $doctor = $_POST['Select_Doctor'];
            $fee = $_POST['Select_fee'];
            $date = $_POST['date'];
            $time = $_POST['time'];


                                  $query1 = " SELECT * FROM appointments WHERE doctors = '$doctor' AND  timee = '$time' AND datee = '$date'";

                                  $query_run1 = mysqli_query($con,$query1);

                                  if(mysqli_num_rows($query_run1)>0)
                                  {

                                echo '<script type="text/javascript" > alert(" is booked at the selected time")</script>';   
 

                                   }
                                  else
                                   {
                                           
                                      


                                                      $status = "PENDING";
                                                      $query = $query="insert into appointments (patientrid, specialisationss,doctors,fees,datee,timee,Status) values('$id','$spec' ,'$doctor','$fee','$date','$time','$status')";

                                                      $query_run = mysqli_query($con,$query);

                                                              if($query_run)
                                                              {
                                                                  echo '<script type="text/javascript" > alert("Appointment scheduled")</script>';
                                                              }
                                                             else
                                                              {
                                                                  echo '<script type="text/javascript" > alert("Error!")</script>';
                                                              }
                                    }

            }




?>



</div>
 
</body>
</html>












<?php
require 'dbconfig/mark1.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Doctor</title>
	<link rel="stylesheet"  href="search.css?a=<?php echo time();?>">
</head>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script> 
<script>
     
    function getdoctor(val)
    {
       $.ajax({
        type:"POST",
        url:"get_doctor2.php",
        data: 'id='+val,
        success: function(data){

                      $("#doctors").html(data);

        }
       });
    }
</script>
<body>
<div class="menu1">
	<div class="search">
	<br><p>USER | SEARCH-DOCTORS</p>
	</div>
</div>
<div class="search1">
	<form method="post">
	

        <br>
      <select name="Select_Specification" placeholder="Select Specification" onchange="getdoctor(this.value);" id="select1">  
        <option value disabled selected>Select Specialization</option>
             <?php
             $sql = "SELECT  *  FROM specialisation";

             $resultt = $con->query($sql);
             while ($rs=$resultt->fetch_assoc()) {
                  ?>


<option value="<?php echo $rs["id"];?>" > <?php echo ( $rs["specialisationn"]); ?> </option>
     <?php
             }
             ?>  
              
        </select><br><br><br>
        <select name="Select_Doctor" id="doctors">
         
          
        </select>
        <input type="submit" name="submit" value="Search">
	</form>
<?php
  			if(isset($_POST['submit']))

  			{
  				$search = $_POST['Select_Doctor'];


               $query = "SELECT * FROM doctorr WHERE doctorid = '$search'";
               $query_run1 = mysqli_query($con,$query);
                  
                  if(mysqli_num_rows($query_run1)>0)
                  {

                     session_start();

  				           $_SESSION['id'] = $search ;
                 
                    header('location:details1.php');
                  }
                else
                     {
                     	echo '<script>alert("Entered name does not exist");</script>' ; 
                     }

                  }

  				
  				?>
</div>



</div>
</body>
</html>
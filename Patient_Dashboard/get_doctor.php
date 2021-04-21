<!DOCTYPE html>
<?php
require 'dbconfig/mark1.php';

$query= "SELECT * FROM doctorr where specialisation= '".$_POST["specialisation1"]."' ";
$result= $con->query($query);
?>

<html>

<option>Select Doctor</option>
<?php
 			while ($rs=$result->fetch_assoc()) {

 				?> 

					<option value="<?php echo $rs["doctorid"];   ?>"> <?php  echo $rs["fullname"];  ?></option>


 				<?php
 			}

          

               ?>
</html>

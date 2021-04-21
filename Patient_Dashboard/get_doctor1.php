<!DOCTYPE html>
<?php
require 'dbconfig/mark1.php';

$query= "SELECT * FROM doctorr where specialisations= '".$_POST["specialisationn"]."' ";
$result= $con->query($query);
?>

<html>
<select>
<option >Select Doctor</option>
<?php

 			while ($rs=$result->fetch_assoc()) {

 				?> 

					<option value="<?php echo $rs["doctorid"];   ?>"> <?php  echo $rs["fullname"];  ?></option>


 				<?php
 			}

          

               ?>
           </select>
</html>



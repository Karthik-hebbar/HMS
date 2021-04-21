<!DOCTYPE html>
<?php
require 'dbconfig/mark1.php';

$query= "SELECT fee FROM doctorr where doctorid= '".$_POST["id"]."' ";
$result= $con->query($query);
?>

<html>
<select>

<?php

	# code...
			while ($rs=$result->fetch_assoc()) {

 				?> 

					<option value="<?php echo $rs["fee"];   ?>"> <?php  echo $rs["fee"];  ?></option>


 				<?php
 			}

          
          

               ?>
           </select>
</html>
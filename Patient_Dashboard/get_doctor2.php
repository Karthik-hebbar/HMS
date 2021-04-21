
<?php
require 'dbconfig/mark1.php';
$id=$_POST['id'];
$query= "SELECT * FROM doctorr where specialisationnid='$id'"; 
$result= $con->query($query);
?>
<!DOCTYPE html>
<html>
<select id="doctors">
	 <option value="" selected disabled >Select Doctor</option>

<?php

 			while ($rs=$result->fetch_assoc()) {

 				?> 

					<option value="<?php echo $rs['doctorid']; ?>"> <?php  echo $rs['fullname'];  ?></option>


 				<?php
 			}

          

               ?>
           </select>
</html>



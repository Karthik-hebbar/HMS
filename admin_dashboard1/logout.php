<?php

// echo '<script type="text/javascript" > confirm("Are you sure?")</script>' ;
session_start();
session_unset();
header('location:admin.php');
?>
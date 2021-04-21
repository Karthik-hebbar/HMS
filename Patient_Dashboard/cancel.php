<?php


session_start();
session_unset($_SESSION['name']);
header('location:search1.php');
?>
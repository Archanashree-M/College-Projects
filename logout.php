<?php 
ob_start();
session_start();
include 'config/config.php'; 
unset($_SESSION['ecom_website_admin']);
session_destroy();
header("location: login.php"); 
?>
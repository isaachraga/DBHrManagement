<?php
// Initialize the session
session_start();
session_destroy();
$_SESSION["loggedin"] = false;
$_SESSION["id"] = '';
$_SESSION["name"] = ''; 
$_SESSION["position"] = '';    
header("location: login.php");
    exit;
?>
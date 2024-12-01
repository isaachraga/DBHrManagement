<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<!--<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <p><nav class="nav justify-content-center">
    <h1>Fake Company Internal Website</h1>
        <div class="button-container">
            <a href="blank.php"><button class="button">Pay Adjustment</button></a>
            <a href="newEmployee.php"><button class="button">Add New Employee</button></a>
            <a href="blank.php"><button class="button">Policy Infraction</button></a>
            <a href="blank.php"><button class="button">Position/Department Change</button></a>
            <a href="enterTimecard.php"><button class="button">Enter Timecard</button></a>
            <a href="blank.php"><button class="button">View Timecard</button></a>
            <a href="emplyeeList.php"><button class="button">Employee List</button></a>
            <a href="logout.php"><button class="button">Logout</button></a>
        </div>
    </nav>
</body>-->
</html>
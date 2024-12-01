<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Employees</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
		table, th, td { border: 1px solid black; }
    </style>
</head>
<body>
    <p><nav class="nav justify-content-center">
    
    
    <div>
    <p><h2>List of Employees:</h2></p>
</div>
</nav>
<p><nav class="nav justify-content-center">
<div>
    <?php // this line starts PHP Code
    $sql = "SELECT id, first_name, last_name, email, phone, positionID, departmentID, hire_date FROM Employee";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
            // Setup the table and headers
        echo "<Center><table><tr><th>ID</th><th>Last Name</th><th>First Name</th><th>Email</th><th>Phone Number</th><th>Position ID</th><th>Department ID</th><th>Hire Date</th></tr>";
        // output data of each row into a table row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["last_name"]."</td><td> ".$row["first_name"]."</td><td> ".$row["email"]."</td><td> ".$row["phone"]."</td><td> ".$row["positionID"]."</td><td> ".$row["departmentID"]."</td><td> ".$row["hire_date"]."</td></tr>";
        }

        echo "</table></center></div>"; // close the table
        echo "</nav><div>There are ". $result->num_rows . " results.";
        // Don't render the table if no results found
        } else {
                echo "</nav><div>0 results";
                }
        $mysqli->close();

    ?> <!-- this is the end of our php code -->
<p>  
            </div>
</nav>
</body>
</html>
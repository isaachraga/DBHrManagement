<?php
/*Allows a user to search for a student by a partial name match. For example, the user should be able to
enter the string “Jon” and find students named “Jonson” and “Jones”. The results should show the ID,
Name, Department Name, and total number of credits for each student. Use a table to format the
results*/


$servername = 'localhost';
$username = 'ihraga'; // Flashline username
$password = '7nxus8ZB'; // phpMyAdmin password
$dbname = 'ihraga'; // Flashline username

/* Attempt to connect to MySQL database */
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($mysqli === false){
    //echo "ERROR: Could not connect. " . $mysqli->connect_error;
    die("ERROR: Could not connect. " . $mysqli->connect_error);
} 

?>
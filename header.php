<?php

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        <a href="welcome.php"><h1>Fake Company Internal Website</h1></a>
    </nav>
    <p><nav class="nav justify-content-center">
        <?php
        if ($_SESSION["position"]==3){
            echo"<div class=\"button-container\">";
            echo"<a href=\"blank.php\"><button class=\"button\">Pay Adjustment</button></a>";
            echo"<a href=\"newEmployee.php\"><button class=\"button\">Add New Employee</button></a>";
            echo"<a href=\"blank.php\"><button class=\"button\">Policy Infraction</button></a>";
            echo"<a href=\"blank.php\"><button class=\"button\">Position/Department Change</button></a>";
            echo"<a href=\"enterTimecard.php\"><button class=\"button\">Enter Timecard</button></a>";
            echo"<a href=\"viewTimecard.php\"><button class=\"button\">View Timecard</button></a>";
            echo"<a href=\"viewEmployees.php\"><button class=\"button\">Employee Directory</button></a>";
            echo"<a href=\"logout.php\"><button class=\"button\">Logout</button></a>";
            echo"</div>";
        }else{
            echo"<div class=\"button-container\">";
            echo"<a href=\"enterTimecard.php\"><button class=\"button\">Enter Timecard</button></a>";
            echo"<a href=\"viewTimecard.php\"><button class=\"button\">View Timecard</button></a>";
            echo"<a href=\"viewEmployees.php\"><button class=\"button\">Employee Directory</button></a>";
            echo"<a href=\"logout.php\"><button class=\"button\">Logout</button></a>";
            echo"</div>";
        }
        ?>
        
    </nav>
</body>
</html>
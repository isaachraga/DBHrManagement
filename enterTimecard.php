<?php
session_start();
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    
    // Check input errors before inserting in database
    
        
        // Prepare an insert statement
    $sql = "INSERT INTO Timecard (employeeID, week_ending_date, Sat, Sun, Mon, Tue, Wed, Thu, Fri) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssssssss", $param_id, $param_week_ending_date, $param_Sat, $param_Sun, $param_Mon, $param_Tue, $param_Wed, $param_Thu, $param_Fri);
        
        // Set parameters
        $param_id = $_SESSION["id"];
        $param_week_ending_date = trim($_POST["weDate"]); 
        $param_Sat = trim($_POST["sat"]); 
        $param_Sun = trim($_POST["sun"]); 
        $param_Mon = trim($_POST["mon"]);
        $param_Tue = trim($_POST["tue"]); // Creates a password hash
        $param_Wed = trim($_POST["wed"]); 
        $param_Thu = trim($_POST["thu"]);
        $param_Fri = trim($_POST["fri"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Redirect to login page
            header("location: viewTimecard.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }
    
    
    // Close connection
    $mysqli->close();
}
include "header.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Timecard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
<p><nav class="nav justify-content-center">
    <div class="wrapper">
        <h2>Time Card</h2>
        <p>Please fill this form to enter your weekly timecard.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Time Entry for Each Day of the Week -->
        <div class="form-group">
            <div class="form-group">
                <label for="weDate">Week Ending Date</label>
                <input type="date" id="weDate" name="weDate" required>
            </div>
                <label for="sat">Saturday</label>
                <input type="number" id="sat" name="sat" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="sun">Sunday</label>
                <input type="number" id="sun" name="sun" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="mon">Monday</label>
                <input type="number" id="mon" name="mon" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="tue">Tuesday</label>
                <input type="number" id="tue" name="tue" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="wed">Wednesday</label>
                <input type="number" id="wed" name="wed" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="thu">Thursday</label>
                <input type="number" id="thu" name="thu" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="fri">Friday</label>
                <input type="number" id="fri" name="fri" placeholder="Hours Worked" min="0" step="0.1" required>
            </div>    
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
        </form>
    </div>   
</nav> 
</body>
</html>

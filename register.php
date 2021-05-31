<?php
// Include config file
require_once "config.php";
 
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $username=trim($_POST["username"]);
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result=mysqli_query($link,$sql);
        if (mysqli_num_rows($result) === 1) {
            $username_err = "This username is already taken.";
        } else{
            $username = trim($_POST["username"]);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result=mysqli_query($link,$sql);
            
            if($result){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

        }
    
    
    // Close connection
    mysqli_close($link);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; background: url('img/background.jpg'); background-size: cover; }
        .wrapper{ width: 400px; padding: 20px; margin: auto; margin-top: 150px; background: #ffffff57; border-radius: 7px; }
        .center{text-align:center;}.help-block{color: red;}
    </style>
</head>
<body>
    <div class="wrapper">
    <div class="center">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
    </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
<!--                <input type="reset" class="btn btn-default" value="Reset">-->
            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
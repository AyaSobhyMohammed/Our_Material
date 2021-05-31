<?php
// Initialize the session
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result=mysqli_query($link,$sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $row['id'];
                            $_SESSION["username"] = $username;  
                            $_SESSION["type"] = $row['type'];  

                            if($row['type'] == 1){
                                header("location: admin.php"); 
                            }else{
                                header("location: home.php"); 
                            }
            }else{
                // Display an error message if password is not valid
                $password_err = "The password you entered was not valid.";
            }

        }else{
            // Display an error message if username doesn't exist
            $username_err = "No account found with that username.";
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
    <title>Login</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; background: url('img/background.jpg'); background-size: cover; }
        .wrapper{ width: 350px; padding: 20px; margin: auto; margin-top: 150px; background: #ffffff57; border-radius: 7px; }
        .center{text-align:center;}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="center">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>
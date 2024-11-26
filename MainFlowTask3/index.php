<?php
include('db.php');

session_start();

if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    
    header("Location: https://happytravels.com.au/");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background: url('Images/travel3.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="container">
        <form action="login.php" method="POST" class="form">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" style="background-color:blue">Login</button>
            <div class="signup-link">
                Not registered yet? <a href="signup.php"><span style="color:green">Click here to sign up</span></a>
            </div>
        </form>
    </div>
</body>
</html>
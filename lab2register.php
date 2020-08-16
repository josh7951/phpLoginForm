<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="lab2.css">
    </head>
    <body class="login-bg">
            <div class="form-container">
                <form action="lab2formhandler.php" method="post">
                    <h1>Welcome!</h1>
                    <!--Username Field-->
                    <label>Username:</label>
                    <input type="text" id="user" placeholder="josham" name="user"> 
                    <span id="nameMsg"></span>
                    <!--Password Field-->
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass">
                    <label>Confirm Password:</label>
                    <input type="password" id="pass" name="pass-confirm">
                    <span id="passMsg"></span>
                    <button type="submit" id="submitBtn" class="btn" name="register">Register</button>
                    <br>
                    <hr>
                    <p>Already Registered? <a href="lab2.php">sign in here</a></p>
                </form>
            </div>
    </body>
</html>
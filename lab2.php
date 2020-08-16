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
                    <h1>Welcome<br>Back!</h1>
                    <!--Username Field-->
                    <label>Username:</label>
                    <input type="text" id="user" placeholder="josham" name="user"> 
                    <span id="nameMsg"></span>
                    <!--Password Field-->
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass">
                    <span id="passMsg"></span>
                    <button id="submitBtn" class="btn" type="submit" name="login">Log In</button>
                    <br>
                    <hr>
                    <p>New Users <a href="lab2register.php">sign up here</a></p>
                </form>
            </div>
    </body>
</html>
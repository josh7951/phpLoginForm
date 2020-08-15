<!DOCTYPE html>
<?php
    $db = mysqli_connect("localhost", "root", "", "users_lab2");
    $sql = "SELECT userId, username, password from users";
    $usersResult = mysqli_query($db, $sql);
?>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="lab2.css">
    </head>
    <body class="login-bg">
            <div class="form-container">
                <form action="" method="POST">
                    <h1>Welcome!</h1>
                    <!--Username Field-->
                    <label name="user">Username:</label>
                    <input type="text" id="user" placeholder="josham">
                    <span id="nameMsg"></span>
                    <!--Password Field-->
                    <label name="pass">Password:</label>
                    <input type="password" id="pass">
                    <span id="passMsg"></span>
                    <input id="submitBtn" class="btn" type="button" value="Log In">
                </form>
            </div>
    </body>
</html>
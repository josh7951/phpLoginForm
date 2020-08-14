<?php
    include("")//poss config file??
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

    }
?>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="lab2.css">
    </head>
    <body>
        <div class="form-container">
            <form action="" method="POST">
                <!--Username Field-->
                <label for="user">Username:</label>
                <input type="text" id="user" placeholder="josham">
                <span id="nameMsg"></span>
                <!--Password Field-->
                <label for="pass">Password:</label>
                <input type="password" id="pass">
                <span id="passMsg"></span>
                <button class="btn">Log in<button>
            </form>
        </div>
    </body>
</html>
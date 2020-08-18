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
                    <!--Error Messages-->
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "emptyfields") {
                                echo '<p class="error-msg">Please fill out all fields!</p>';
                                }
                            else if ($_GET['error'] == "passwordcheck") {
                                echo '<p class="error-msg">Passwords do not match!</p>';
                            }
                            else if ($_GET['error'] == "userexists") {
                                echo '<p class="error-msg">Username already taken!</p>';
                            }
                        }
                    ?>
                    <!--Username Field-->
                    <label>Username:</label>
                    <input type="text" placeholder="josham" name="user"> 
                    <!--Password Field-->
                    <label>Password:</label>
                    <input type="password" name="pass">
                    <label>Confirm Password:</label>
                    <input type="password" name="pass-confirm">
                    <button type="submit" id="submitBtn" class="btn" name="register">Register</button>
                    <br>
                    <hr>
                    <p>Already Registered? <a href="lab2.php">sign in here</a></p>
                </form>
            </div>
    </body>
</html>
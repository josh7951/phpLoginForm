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
                    <!--Error Messages-->
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "emptyfields") {
                                echo '<p class="error-msg">Please fill out all fields!</p>';
                                }
                            else if ($_GET['error'] == "passwordinvalid") {
                                echo '<p class="error-msg">Incorrect password!</p>';
                            }
                            else if ($_GET['error'] == "userinvalid") {
                                echo '<p class="error-msg">Username does not exist!</p>';
                            }
                        }
                    ?>
                    <!--Username Field-->
                    <label>Username:</label>
                    <input type="text" placeholder="josham" name="user"> 
                    <!--Password Field-->
                    <label>Password:</label>
                    <input type="password" name="pass">
                    <button id="submitBtn" class="btn" type="submit" name="login">Log In</button>
                    <br>
                    <hr>
                    <p>New Users <a href="lab2register.php">sign up here</a></p>
                </form>
            </div>
    </body>
</html>
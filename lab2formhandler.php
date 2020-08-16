<?php
    $db = mysqli_connect("localhost", "root", "", "users_lab2");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    
    if (isset($_POST['register'])) {
        $passconfirm = $_POST['pass-confirm'];
        //form field checks
        if (empty($username) ||empty($pass) || empty($passconfirm)) {
            header("Location: lab2register.php?error=emptyfields&user=".$username);
            exit();
        }
        else if($pass !== $passconfirm){
            header("Location: lab2register.php?error=passwordcheck&user=".$username);
        }
        else {
            //check if username already exists
            $sql = "SELECT username FROM users WHERE username=?";
            $stmt = mysqli_stmt_init($db);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: lab2register.php?error=sqltookapoop1");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result = mysqli_stmt_num_rows($stmt);
                if($result > 0){
                    header("Location: lab2register.php?error=userexists");
                    exit();
                }
                else {
                    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                    $stmt = mysqli_stmt_init($db);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: lab2register.php?error=sqltookapoop2");
                        exit();
                    }
                    else {
                        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);//or use $pass for non hash
                        mysqli_stmt_execute($stmt);
                        header("Location: lab2.php?siginup=success");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($db);
    }
    else if (isset($_POST['login'])) {
        if(empty($username) || empty($pass)){
            header("Location: lab2.php?error=emptyfields&username=".$username);
            exit();
        }
        else {
            $sql = "SELECT * FROM users WHERE username=?;";
            $stmt = mysqli_stmt_init($db);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: lab2.php?error=sqltookapoop3");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $passwordVerify = password_verfy($pass, $row['password']);
                    if($passwordVerify == false) {
                        header("Location: lab2.php?error=passwordinvalid&username=".$user);
                    }
                    else if($passwordVerify == true){
                        session_start();
                        $_SESSION['uID'] = $row['userId'];
                        $_SESSION['user'] = $row['username'];

                        header("Location: adminpage.php?login=success");
                        exit();
                    }
                    else{
                        header("Location: lab2.php");
                    }
                }
                else{
                    header("Location: lab2.php?error=userinvalid");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: lab2.php");
        exit();                                              
    }
?>
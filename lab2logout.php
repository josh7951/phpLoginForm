<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: lab2.php");
?>
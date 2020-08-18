<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="lab2.css">
        <script>
            function colorChanger() {
                let color = document.getElementById('colorSwatch').value;
                document.getElementById("user-bg").style.backgroundColor = color;
            }
        </script>
    </head>
    <body id="user-bg">
        <div class="user-container">
            <form action="lab2logout.php" method="post">
                <button class="logout-btn" type="submit" name="logout">LOGOUT</button>
            </form>
            <?php
                if(isset($_GET['username'])){
                    $username = $_GET['username'];
                    echo "<h1>Hello, " . $username  . "!</h1>";
                }
            ?>
            <p>Finally reached the end of COMP484 eh? What a fun ride! :)</p>
            <h2>Want to change the background color?</h2>
                <input type="color" id="colorSwatch">
                <input type="button" id="colorChange" class="color-btn" value="Change Color" onclick="colorChanger()">
        </div>
    </body>
</html>
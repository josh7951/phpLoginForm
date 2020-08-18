<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Admin!</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="lab2.css">
    </head>
    <body>
        <div class="user-container">
            <form action="lab2logout.php" method="post">
                <button class="logout-btn" type="submit" name="logout">LOGOUT</button>
            </form>
            <h1>Welcome Overlord!</h1>
            <p>Yaaaayyyy! We did it. Finished COMP484 in <u style="font-weight:bold;">SIX</u> weeks! Shout out to Professor Kaplan for being an awesome dude.</p>
            <h2>Users</h2>
            <table>
                <tbody>
                    <tr>
                        <th>userId</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
            <?php
                $dbhandle = mysqli_connect("localhost", "root", "", "users_lab2");
                if (!$dbhandle) {
                    print("</tbody></table>");
                    print("Connection failed: " . mysqli_connect_error() );
                    print("<body></html>");
                    die();
                }

                $sql = "SELECT * from users ORDER BY username";
                $usersResult = mysqli_query($dbhandle, $sql);

                while ($row = mysqli_fetch_row($usersResult)) {
                    print '<tr><td style="text-align: center;">';
                    print $row[0];
                    print "</td><td>";
                    print $row[1];
                    print "</td><td>";
                    print $row[2];
                    print "</td></tr>";
            }

                mysqli_close($dbhandle);
            ?>
        </div>
        
    </body>
</html>
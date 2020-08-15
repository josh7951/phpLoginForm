<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Admin!</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Welcome Overlord!</h1>
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

            $sql = "SELECT userId, username, password from users";
            $usersResult = mysqli_query($dbhandle, $sql);

            while ($row = mysqli_fetch_row($usersResult)) {
                print "<tr><td>";
                print $row[0];
                print "</td><td>";
                print $row[1];
                print "</td><td>";
                print $row[2];
                print "</td></tr>";
        }

            mysqli_close($dbhandle);
        ?>
        
    </body>
</html>
<?php
    require_once 'validation/userValidation.php';
    $users=getUsers();
?>
<html>
    <head><title>Dashboard</title></head>
    <body>
        <center>
        <h1>My Dashboard - All User</h1>
        <table border="1">
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            <?php
                foreach($users as $user)
				{
                    echo "<tr>";
                    echo "<td>".$user["name"]."</td>";
                    echo "<td>".$user["username"]."</td>";
                    echo "<td>".$user["email"]."</td>";
                    echo "<td>".$user["phone"]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
    </body>
</html>
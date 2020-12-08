<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center><h1>Login</h1></center>
        <center>
            <form action="validation/userValidation.php" method="post" onsubmit="return LoginValidation()">
                <input type="text" id="username" placeholder="Username" name="username"><span id="err_username" style="color:red;"></span><br>
                <input type="password" id="password" placeholder="Password" name="password"><span id="err_pass" style="color:red;"></span><br>
                <a href="registration.php">Register</a>
                <input type="submit" name="login" value="Login">
            </form>
        </center>
        <script src="scripts/script.js"></script>
    </body>
</html>
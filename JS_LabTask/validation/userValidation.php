<?php
    require_once '../database/db_conn.php';
?>
<?php
    if(isset($_POST["login"]))
	{
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        if(getUser()){
            header("Location: ../dashboard.php");
        }
        else{
            echo "Invalid Credentials!";
        }
    }
    if(isset($_POST["register"]))
	{
        $name=htmlspecialchars($_POST["name"]);
        $email=htmlspecialchars($_POST["email"]);
        $phone=htmlspecialchars($_POST["phone"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        addUser();
        header("Location: ../login.php");
    }
    
    function getUser()
	{
        global $username,$password;
        $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=doQuery($query);
        if(count($result)>0)
		{
            return true;
        }
        return false;
    }
    function getUsers()
	{
        $query="SELECT * FROM users";
        return doQuery($query);
    }
    function addUser()
	{
        global $name,$username,$email,$password,$phone;
        $query="INSERT INTO users VALUES('$name','$username','$password','$email','$phone')";
        doNoQuery($query);
    }
?>
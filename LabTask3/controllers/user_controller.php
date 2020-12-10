<?php
    require_once '../models/db_connection.php';
?>
<?php
    if(isset($_POST["login"])){
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        if(getUser($username,$password)){
            session_start();
            $_SESSION["username"] = $username;
            setcookie("username",$username,time() + 360);
            header("Location: ../views/dashboard.php");
        }
        else{
            echo "Invalid Credentials!";
        }
    }
    
    function getUser($username,$password){
        $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=get($query);
        if(count($result)>0){
            return true;
        }
        return false;
    }
?>
<?php
    $username="root";
	$severname="localhost";
	$password="";
	$db_name="webtech";
	
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else
		{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"]))
		{
			$err_pass="Password Required";
			$hasError = true;
		}
		else
		{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError)
		{
			$conn = mysqli_connect($severname,$username,$password,$db_name);
		    if(!$conn)
			{
				die("Connection Faild" . mysqli_connect_error());
			}
			$p=md5($pass);
		    $result = mysqli_query($conn,"SELECT * FROM task1 WHERE name ='$uname' AND password='$p'");
			

            if (mysqli_num_rows($result)) 
            {
                setcookie("username",$username,time() + 300); 
				header("Location: dashboard.php");
            }
			else
				echo "Username or Password Incorrect";
		}
	}
?>
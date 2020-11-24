<?php
    $username="root";
	$severname="localhost";
	$password="";
	$db_name="webtech";

	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$type="";
	$err_type="";
	$hasError=false;
	if(isset($_POST["register"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if(empty($_POST["type"])){
			$err_type="User type Required";
			$hasError =true;	
		}
		else{
			$type = htmlspecialchars($_POST["type"]);
		}
		if(!$hasError){
			$conn = mysqli_connect($severname,$username,$password,$db_name);
		    if(!$conn)
			{
				die("Connection Faild" . mysqli_connect_error());
			}
		}
		$p=md5($pass);
		mysqli_query($conn,"INSERT INTO task1(name,password,type) VALUES('$uname','$p','$type')");
		header("Location: login.php");
	}
	
?>
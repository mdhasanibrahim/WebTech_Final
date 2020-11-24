<?php
    $username="root";
	$severname="localhost";
	$password="";
	$db_name="webtech";
	
	$conn = mysqli_connect($severname,$username,$password,$db_name);
	if(!$conn)
	{
		die("Connection Faild" . mysqli_connect_error());
	}
    $query="SELECT * FROM task1";
	$results=mysqli_query($conn,$query);
	if(mysqli_num_rows($results)>0)
	{
		echo '<Table border="1">';
		echo '<tr>';
		echo '<th>User ID</th>';
		echo '<th>Username</th>';
		echo '<th>Password</th>';
		echo '<th>User Type</th>';
		echo '</tr>';
		
		while($row = mysqli_fetch_assoc($results))
		{
			echo '<tr>';
		    echo '<th>'.$row["id"].'</th>';
		    echo '<th>'.$row["name"].'</th>';
		    echo '<th>'.$row["password"].'</th>';
		    echo '<th>'.$row["type"].'</th>';
		    echo '</tr>';
		}

	}

?>
<?php

	$conn=mysqli_connect("localhost",'root','');
	if($conn)
	{	echo"Connected!!<br>";
		$sql="CREATE DATABASE User_Database";
		$a=mysqli_query($conn, $sql) or die(mysqli_error($conn));
		if($a)
		{	
			echo "Database Created Successfully !! <br>";
			mysqli_select_db($conn, "User_Database");
			$sql="create table login_data( id int auto_increment primary key, usrname varchar(50) not null, pass varchar(50) not null)";
			if(mysqli_query($conn, $sql))
				echo "Table login_data Created Successfully !! <br>";
			$sql="create table user_data(id int auto_increment primary key, name varchar(50) not null,phone bigint(10) not null )";
			if(mysqli_query($conn, $sql))
				echo "Table user_data created Successfully !! <br>";

		}

	}
	mysqli_close($conn);

?>
<?php

	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{
		$count=mysqli_fetch_array(mysqli_query($conn,"SELECT MAX(id) FROM user_data"))[0];
		$list=mysqli_fetch_array(mysqli_query("$conn","SELECT * FROM user_data"));
		
	}

?>
<?php

$conn=mysqli_connect('localhost','root','','User_Database');
if($conn)
{
	echo("Connection in Place!!");
	for($i=7;$i<=14;$i++)
	{
		$sql="delete from `login_data` where id=$i ";
		mysqli_query($conn,$sql);
		$sql="delete from `user_data` where id='" . $i . "' ";
		$result=mysqli_query($conn,$sql);
		if($result)
		echo("DELETED WHERE ID=" . $i);
		else 
			echo mysqli_error($conn);
	}
	mysqli_close($conn);
}


?>
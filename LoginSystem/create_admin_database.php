<?php

$conn=mysqli_connect('localhost','root','');
if($conn)
{	mysqli_query($conn,"create database Admin_Database");
	mysqli_select_db($conn,"Admin_Database");
	mysqli_query($conn,"create table admin_login(username varchar(50) not null,password varchar(50) not null)  ");
	echo(mysqli_error($conn));
	$username="admin_prashasy";
	$password="admin_asd";
	$sql="insert into admin_login(`username`,`password`) values('$username','$password')  ";
	if(mysqli_query($conn,$sql))
	{
		echo "All Tasks Completed Successfully!!";
	}
	else echo(mysqli_error($conn));
}

?>
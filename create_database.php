<?php

	$conn=mysqli_connect('localhost','root','');
	if(! mysqli_select_db($conn,"User_Database"))
	{
		mysqli_query($conn,"create database User_Database");
	}

	if($conn)
	{
		$sql="create table player_list ( 
			player_id int primary key, 
			round_1 int not null, 
			round_2 int not null, 
			round_3 int not null, 
			wins int not null, 
			losses int not null, 
			state varchar(50) default 'alive')";
		$result=mysqli_query($conn, $sql);
		if($result)
			echo "Table Created Successfully!!";
		else
			echo mysqli_error($conn);

	}

?>
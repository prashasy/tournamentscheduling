<?php

$conn=mysqli_connect('localhost','root','','User_Database');
if($conn)
{	mysqli_query($conn,"drop table round_2");
	$sql="create table round_2(serial int primary key not null,plyid_1 int not null,plyid_2 int not null,winner int not null)";
	if(mysqli_query($conn,$sql))
		echo"Table Created Successfully";
	else
		echo mysqli_error($conn);

}


?>
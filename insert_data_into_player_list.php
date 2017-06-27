<?php

	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{
		$sql="select * from user_data";
		$r=mysqli_query($conn,$sql);
		if($r)
		{
			while($result=mysqli_fetch_assoc($r))
			{	
				$plyid=$result['id'];
				$sql="insert into player_list(player_id)values($plyid)";
				if(mysqli_query($conn,$sql))
					echo "Inserted ID nmbr = ".$plyid."<br>";
			}
		}
	}

?>
<?php

	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{	$query=mysqli_query($conn,"select * from player_list");
		while($row=mysqli_fetch_assoc($query))
		{
			$loses=$row['loses'];
			if($loses>=2)
			{	$id=$row['player_id'];
				$state="out";
				$sql="update player_list set state='" . $state . "' where player_id='" . $id . "'   ";
				if(mysqli_query($conn,$sql))
				echo "<br>Updated player state of player id=".$id."<br>";
				else
					echo mysqli_error($conn);
			}
			else
				echo "Player id: ".$row['player_id']." alive<br>";
		}
	}

?>
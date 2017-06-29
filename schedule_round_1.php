<?php
	
	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{
		$count=mysqli_fetch_array(mysqli_query($conn,'select max(player_id) from player_list'))[0];
		$present_serial=0;
		if($count%2==0)
		{
		for($i=1;$i<=($count/2);$i++)
		{	$present_serial++;
			$id2=$count-$i+1;
			$sql="insert into round_1( serial,plyid_1,plyid_2 ) values ($present_serial,$i,$id2)  ";
			if(mysqli_query($conn,$sql))
				echo("Inserted into round_1:  Player 1 :".$i." Player 2 : ".$id2);
			else
				echo mysqli_error($conn);
		}
	}
	else
	{	$i;
		for($i=1;$i<=($count/2);$i++)
		{	$present_serial++;
			$id2=$count-$i+1;
			$sql="insert into round_1( serial,plyid_1,plyid_2 ) values ($present_serial,$i,$id2)  ";
			if(mysqli_query($conn,$sql))
				echo("Inserted into round_1:  Player 1 :".$i." Player 2 : ".$id2);
			else
				echo mysqli_error($conn);
		}
		$id2=999;
		$present_serial++; //dummy player id
		$sql="insert into round_1( serial,plyid_1,plyid_2)values ($present_serial,$i,$id2) ";
		if(mysqli_query($conn,$sql))
			echo("Inserted into round_1:  Player 1 :".$i." Player 2 : ".$id2);
		else
			echo mysqli_error($conn);

	}
	}
	mysqli_close($conn);


?>
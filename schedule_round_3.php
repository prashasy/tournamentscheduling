<?php
	
	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{	$result_d=mysqli_query($conn,"select * from player_list where state='alive' order by player_id desc");
		$result_a=mysqli_query($conn,"select * from player_list where state='alive' order by player_id asc");
		$count=mysqli_num_rows($result_a);
		$present_serial=0;
		if($count%2==0)
		{ 	$idlast=mysqli_fetch_assoc($result_d)['player_id'];
			$idlast2=mysqli_fetch_assoc($result_d)['player_id'];
			while($row_a=mysqli_fetch_assoc($result_a))
			{	$row_d=mysqli_fetch_assoc($result_d);
				$present_serial++;
				if($present_serial==$count/2)
				{	echo "here";
					$sql="insert into round_3( serial,plyid_1,plyid_2 ) values ($present_serial,$idlast2,$idlast)  ";
					if(mysqli_query($conn,$sql))
						echo("<br>Inserted into round_3:  Player 1 :".$idlast2." Player 2 : ".$idlast);
					else
						echo mysqli_error($conn);
					break;
				}
				$id1=$row_a['player_id'];
				$id2=$row_d['player_id'];
				$sql="insert into round_3( serial,plyid_1,plyid_2 ) values ($present_serial,$id1,$id2)  ";
				if(mysqli_query($conn,$sql))
					echo("<br>Inserted into round_3:  Player 1 :".$id1." Player 2 : ".$id2);
				else
					echo mysqli_error($conn);

			}

		}
		else
		{ 	$idlast=mysqli_fetch_assoc($result_d)['player_id'];
			$idlast2=mysqli_fetch_assoc($result_d)['player_id'];
			while($row_a=mysqli_fetch_assoc($result_a))
			{	$row_d=mysqli_fetch_assoc($result_d);
				$present_serial++;
				if($present_serial==($count/2)-0.5)
				{	echo "here";
					$sql="insert into round_3( serial,plyid_1,plyid_2 ) values ($present_serial,$idlast2,$idlast)  ";
					if(mysqli_query($conn,$sql))
						echo("<br>Inserted into round_3:  Player 1 :".$idlast2." Player 2 : ".$idlast);
					else
						echo mysqli_error($conn);
					$present_serial++;
					$id1=$row_a['player_id'];
					$id2=999;
					$sql="insert into round_3(serial,plyid_1,plyid_2) values ($present_serial,$id1,$id2)";
					if(mysqli_query($conn,$sql))
						echo("<br>Inserted into round_3:  Player 1 :".$id1." Player 2 : ".$id2);
					else
						echo mysqli_error($conn);
					break;
				}
				$id1=$row_a['player_id'];
				$id2=$row_d['player_id'];
				$sql="insert into round_3( serial,plyid_1,plyid_2 ) values ($present_serial,$id1,$id2)  ";
				if(mysqli_query($conn,$sql))
					echo("<br>Inserted into round_3:  Player 1 :".$id1." Player 2 : ".$id2);
				else
					echo mysqli_error($conn);

			}

		}	
	}

?>
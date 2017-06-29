<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{	
		$conn=mysqli_connect('localhost','root','','User_Database');
		if($conn)
		{	
			$n=mysqli_fetch_array(mysqli_query($conn,"select max(serial) from round_2 "))[0];
			for($i=1;$i<=$n;$i++)
			{	
				$winid=$_POST["match".$i];
				$sql="select * from round_2 where serial='" . $i . "' ";
				$row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
				if($winid==$row['plyid_1'] )
					$loseid=$row['plyid_2'];
				else
					$loseid=$row['plyid_1'];

				$sql="update round_2 set winner='" . $winid . "' where serial='" . $i . "' ";
				if(mysqli_query($conn,$sql))
				echo "Updated winner for match no. ".$i."<br>";
				else echo mysqli_error($conn);
				if($winid!=999)
				{
				$sql="select * from player_list where player_id='" . $winid . "' ";
				$row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
				$score=$row['score']+10;
				$wins=$row['wins']+1;
				$sql="update player_list set round_2=10, wins='" . $wins . "', score='" . $score . "' where player_id='" . $winid . "'";
				if(mysqli_query($conn,$sql))
					echo "<br>Updated player_list for winner of match ".$i." with player id=".$winid."<br>";
				else
					echo mysqli_error($conn);
			
			}
				if($loseid!=999)
				{
				$sql="select * from player_list where player_id='" . $loseid . "' ";
				$row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
				$score=$row['score']-10;
				$loses=$row['loses']+1;
				$sql="update player_list set round_2=-10, loses='" . $loses . "', score='" . $score . "' where player_id='" . $loseid . "'";
				if(mysqli_query($conn,$sql))
					echo "<br>Updated player_list for loser of match ".$i." with player id=".$loseid."<br>";
				else
					echo mysqli_error($conn);
			}
			}
		}
		mysqli_close($conn);
	}

?>
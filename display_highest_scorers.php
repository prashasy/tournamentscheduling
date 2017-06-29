<?php

	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{
		$result=mysqli_query($conn,"select * from player_list order by score desc");
		$row=mysqli_fetch_assoc($result);
		$highest=$row['score'];
		$id=$row['player_id'];
		$round1=$row['round_1'];
		$round2=$row['round_2'];
		$round3=$row['round_3'];
		$wins=$row['wins'];
		$loses=$row['loses'];
		$score=$row['score'];
		$name=mysqli_fetch_array(mysqli_query($conn,"select name from user_data where id=$id"))[0];
		echo "<table border=2px solid black>
		<tr>
		<th>Player ID</th>
		<th>Player Name</th>
		<th>Round 1</th>
		<th>Round 2</th>
		<th>Round 3</th>
		<th>Wins</th>
		<th>Loses</th>
		<th>Score</th>
		</tr> ";
		echo "<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$round1</td>
		<td>$round2</td>
		<td>$round3</td>
		<td>$wins</td>
		<td>$loses</td>
		<td>$score</td>
		</tr> ";
		while($row=mysqli_fetch_assoc($result))
		{
			if($row['score']<$highest)
				break;
		$id=$row['player_id'];
		$round1=$row['round_1'];
		$round2=$row['round_2'];
		$round3=$row['round_3'];
		$wins=$row['wins'];
		$loses=$row['loses'];
		$score=$row['score'];
		$name=mysqli_fetch_array(mysqli_query($conn,"select name from user_data where id=$id"))[0];
		echo "<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$round1</td>
		<td>$round2</td>
		<td>$round3</td>
		<td>$wins</td>
		<td>$loses</td>
		<td>$score</td>
		</tr> ";


		}
		echo "</table>";

	}
	mysqli_close($conn);


?>
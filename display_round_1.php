<?php

	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{
		$sql="select * from round_1";
		if($result=mysqli_query($conn,$sql))
		{	echo "<table>";
			echo "<tr>
					<th>S.No</th>
					<th>Player 1</th>
					<th>Player 2</th> 
					</tr>";
			while($row=mysqli_fetch_assoc($result))
			{	$plyid1=$row['plyid_1'];
				$ply1=mysqli_fetch_assoc(mysqli_query($conn,"select * from user_data where id=$plyid1 "))['name'];
				$plyid2=$row['plyid_2'];
				if($plyid2==999)
					$ply2="dummy player";
				else
				$ply2=mysqli_fetch_assoc(mysqli_query($conn,"select * from user_data where id=$plyid2 "))['name'];
				echo "<tr>
				<td>".$row['serial']." </td>
				<td> $ply1 </td>
				<td> $ply2 </td>
				<tr>";
			}
			echo"</table>"; //hello
		}
	}
	mysqli_close($conn);

?>

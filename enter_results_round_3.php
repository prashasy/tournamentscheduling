<html>
<head>
	<title>Round 1</title>
</head>
<body>
<?php

	$conn=mysqli_connect('localhost','root','','User_Database');
	if($conn)
	{
		echo "<form action=set_results_round_3.php method=POST> <table border=2px>
		<tr>
		<th>Match No.</th>
		<th>Player 1 id</th>
		<th>Player 1</th>
		<th>Player 2</th>
		<th>Player 2 id</th>
		<th>Winner</th>
		</tr>";
		$sql="select * from round_3";
		if($r=mysqli_query($conn,$sql))
		{	
			while($result=mysqli_fetch_assoc($r))
			{
				$id1=$result['plyid_1'];
				$ply1=mysqli_fetch_array(mysqli_query($conn,"select name from user_data where id=$id1"))[0];
				$id2=$result['plyid_2'];
				if($id2==999)
					$ply2="dummy player";
				else
					$ply2=mysqli_fetch_array(mysqli_query($conn,"select name from user_data where id=$id2"))[0];
				$sno=$result['serial'];
				echo "<tr>
				<td>$sno</td>
				<td>$id1</td>
				<td>$ply1</td>
				<td>$ply2</td>
				<td>$id2</td>
				<td><input name=match$sno type=number required></td>
				</tr>";
			}
			echo "</table>";
			echo "<input type=submit>";
			echo "</form>";
		}
		
	}



?>
</body>
</html>
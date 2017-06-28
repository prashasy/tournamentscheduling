<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{	
		$conn=mysqli_connect('localhost','root','','User_Database');
		if($conn)
		{	
			$n=mysqli_fetch_array(mysqli_query($conn,"select max(serial) from round_1 "))[0];
			for($i=1;$i<=$n;$i++)
			{	
				$winid=$_POST["match".$i];
				$sql="update round_1 set winner='" . $winid . "' where serial='" . $i . "' ";
				if(mysqli_query($conn,$sql))
					echo "Updated winner for match no. ".$i."<br>";
				else echo mysqli_error($conn);

			}
		}
		mysqli_close($conn);
	}

?>
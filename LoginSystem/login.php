<?php
if($_SERVER['REQUEST_METHOD']=='POST')
	{	$name=$_POST['usrname'];
		$pass=$_POST['usrpass'];

		$conn=mysqli_connect("localhost",'root','','User_Database');
		$sql="SELECT * from login_data where usrname='$name' and pass='$pass'";
		$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$count=mysqli_num_rows($result);
		echo "<p>$count</p>";
		if(mysqli_num_rows($result)==1)
		{	$id=mysqli_fetch_array($result)['id'];
			$sql="select * from user_data where id='$id' ";
			$result=mysqli_query($conn, $sql);
			session_start();
			$_SESSION['login_user']=mysqli_fetch_array($result)['name'];
			$_SESSION['login']=true;
			mysqli_close($conn);
			header('location: dashboard.php');
		}
		else
			{echo "Wrong Credentials";}

	mysqli_close($conn);
}else
header("location:index.php");
?>

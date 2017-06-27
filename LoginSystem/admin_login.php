<?php
if($_SERVER['REQUEST_METHOD']=='POST')
	{	$name=$_POST['usrname'];
		$pass=$_POST['usrpass'];

		$conn=mysqli_connect("localhost",'root','','Admin_Database');
		$sql="SELECT * from admin_login where username='$name' and password='$pass'";
		$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$count=mysqli_num_rows($result);
		if(mysqli_num_rows($result)==1)
		{	$id=mysqli_fetch_assoc($result)['id'];
			$sql="select * from user_data where id='$id' ";
			$result=mysqli_query($conn, $sql);
			session_start();
			$_SESSION['login_user']='Admin';
			$_SESSION['login']=true;
			mysqli_close($conn);
			header('location: ../admin_dashboard.php');
		}
		else
			{echo "Wrong Credentials";}

	mysqli_close($conn);
}else
header("location:index.php");
?>

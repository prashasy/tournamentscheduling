<html>
<head>
	<title>"Sign Up!!"</title>
</head>
<body>
	<?php
		session_start();
		$flag=1;
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$name=$_POST['name'];
		$uname=$_POST['uname'];
		$phno=$_POST['phno'];
		$pass=$_POST['pass'];
		if($_SERVER['REQUEST_METHOD']=='POST'){
		$conn=mysqli_connect($dbhost, $dbuser, $dbpass);
		if(! $conn)
		{
			die('Could not connect' . mysqli_error());
			$flag=0;
		}
		echo "<p>Connected Successfully!!</p>";
		$c=mysqli_select_db($conn, "User_Database");
		if($c)
		{	$sql="select * from login_data where usrname='$uname' ";
			$result=mysqli_query($conn, $sql);
			if(!$result)
			{die ("mysqli_error($conn)");$flag=0;}
		else{
			if(mysqli_num_rows($result)>0)
			{
				die("Username Already Exists");$flag=0;
			}
			else
			{
				$idno=(mysqli_fetch_array(mysqli_query($conn,"SELECT MAX(id) FROM login_data"))[0])+1;
			$sql="INSERT INTO login_data(id,usrname,pass) VALUES( '" . $idno . "' ,'" . $uname . "','" . $pass. "')";
			if(mysqli_query($conn, $sql))
				echo "<p>Record Inserted in login_data!!</p>";
			else 
				{echo "<p>Record could not be inserted in login_data</p>" . mysqli_error($conn);$flag=0;}
			$sql="INSERT into user_data(id,name,phone) values ( '" . $idno . "' , '" . $name . "' , '" . $phno . "')";
			if(mysqli_query($conn , $sql))
				echo "<p> Record inserted into user_data Successfully </p>";
			else
				{echo "<p> Record could not be inserted into user-data </p>". mysqli_error($conn);$flag=0;}
			

		}
		}
	}
		mysqli_close($conn);
		echo "<p>Connection closed!! </p>";
		if($flag==1)
		{  
			
			$_SESSION['index_page_redirect_counter']=true;
		header("location:index.php?msg=OK");
	}
	}
	else
		header("location:index.php");
	?>
</body>
</html>
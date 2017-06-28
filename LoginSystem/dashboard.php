<?php
?>
<html>
<head>
	<title>Dashboard</title>
	</head>
	<body>
		<?php
		session_start(); //session starts
		if(isset($_SESSION['login']))
		{	
			$user=$_SESSION['login_user'];
			if($user=='Admin')
				header("location: ../admin_dashboard.php");

			echo "<h1>Welcome  $user </h1>"; //Personalised welcome address
			echo "<a href=logout.php>Logout</a>"; //Logout Button
		}
		else
		{
			header("location: index.php");//redirection to home-page
		}
		?>
	</body>
</html>
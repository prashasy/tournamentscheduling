
<?php
session_start();
if( isset($_SESSION['login']) )
{
$a=$_SESSION['login_user'];
	header("location: dashboard.php");
}
?>
<html>
<head>
	<?php
	if(!(empty($_GET['msg'])) and  $_SESSION['index_page_redirect_counter'])
	{
		?>
		<script type="text/javascript">
		alert("You have signed up Successfully");
		</script>
		<?php
		$_SESSION['index_page_redirect_counter']=false;
	}

	?>
	<script type="text/javascript">
	function validate()
	{
		var n=document.forms['signup_form']['name'].value;
		for(i=0;i<n.length;i++)
		{
			var a=n.charCodeAt(i);
			if(a>=48 && a<=57)
			{	document.getElementById("2").reset();
				alert("There is a number in the name?? :D");
				return false;
			}
		}
	}
	</script>

	<title>Home Page!! </title>
	<style type="text/css">
	body{
		font-family:courier;
		background-color:green;
	}

	
	.LoginContent{
		display:none;
		background-color: orange;
	}
	.LoginHover{
		position:absolute;
		top:255px;
		left:200px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.LoginHover:hover .LoginContent{
		display:block;
	}

		.SignupContent{
		display:none;
		background-color: orange;
	}
	.SignupHover{
		position:absolute;
		top:255px;
		left:700px;
		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.SignupHover:hover .SignupContent{
		display:block;
	}


		.AdminLoginContent{
		display:none;
		background-color: orange;
	}
	.AdminLoginHover{
		position:absolute;
		top:10px;
		left:1000px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:250px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.AdminLoginHover:hover .AdminLoginContent{
		display:block;
	}



	</style>
	</head>

	<body>		
	
		<h1 style="text-align:center"> Welcome to mah Website !! </h1>
		
		<div class="LoginHover">
			<p id="logintext"> Log In </p>
				<div class=LoginContent>
					<form name="login_form" action='login.php' method="post">
						<input type="username" required name="usrname" placeholder="Enter Username">
						<input type="password" required name="usrpass" placeholder="Enter Password">
						<input type="submit" value="Log In">
					</form>
				</div>
		</div>



		<div class="SignupHover">
			<p> SignUp </p>

			<div class="SignupContent">
				<form id="2" name="signup_form" onsubmit="return validate()" action="signup.php" method="post">
					<input type="text" name="name" required placeholder="Full name please :)">
					<input type="number" name="phno" required placeholder="Phone Number ;)">
					<input type="text" name="uname" required placeholder="Username">
					<input type="password" name="pass"required  placeholder="Password">
					<input type="submit" value="SignUp!!">
					<input type="reset">
				</form>

			</div>
		</div>

		<div class="AdminLoginHover">
			<p id="adminlogintext"> Admin Log In </p>
				<div class=AdminLoginContent>
					<form name="admin_login_form" action='admin_login.php' method="post">
						<input type="username" required name="usrname" placeholder="Enter Username">
						<input type="password" required name="usrpass" placeholder="Enter Password">
						<input type="submit" value="Log In">
					</form>
				</div>
		</div>
	



















</body>
</html>

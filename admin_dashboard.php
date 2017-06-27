<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login']))
	header("location:LoginSystem/index.php");
?>



<html>
<head>
	<title> Admin Dashboard!! </title>

	<style type="text/css">
	body{
		background-color:green;
		font-family:courier;
	}
	.MenuWrapper{
		background-color:orange;
		width:300px;
		position:absolute;
		left:475px;
		top:75px;
	}

	.btn1{
		background-color: pink;
		height:25px;
	}
	.btn2{
		background-color: white;
		height:25px;
	}
	.btn3{
		background-color: pink;
		height:25px;
	}
	.btn4{
		background-color: white;
		height:25px;
	}
	.btn5{
		background-color: pink;
		height:25px;
	}

	.logoutbtnwrapper{
		background-color: orange;
		font-family: courier;
		position:absolute;
		left:105px;
		top:225px;
		width:100px;
		height:50px;
		text-align: center;
	}

	</style>

</head>

<body>
	<h1 style="text-align:center">Hello Admin Prashasy </h1>
	<div class="MenuWrapper">
		<a href=create_database.php>
			<div class="btn1">
				<p>Create Database</p>
			</div>
		</a>
		<a href=insert_data_into_player_list.php>
			<div class="btn2">
				<p>Insert data into player list</p>
			</div>
		</a>
		<a href=create_table_round_1.php>
			<div class="btn3">
				<p>Create table for round 1 </p>
			</div>
		</a>
		<a href=schedule_round_1.php>
			<div class="btn4">
				<p>Schedule Round 1</p>
			</div>
		</a>
		<a href=display_round_1.php>
			<div class="btn5">
				<p>Display Schedule of Round 1</p>
			</div>
		</a>

		<div class="logoutbtnwrapper">
			<a href=LoginSystem/logout.php>
			<div class="logoutbtn">
				<p> Logout </p>
			</div>
			</a>
		</div>

	</div>
</body>
</html>
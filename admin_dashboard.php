<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login']))
	header("location:LoginSystem/index.php");
$user=$_SESSION['login_user'];
if(!($user=='Admin'))
	header("location:LoginSystem/dashboard.php");
?>



<html>
<head>
	<title> Admin Dashboard! </title>

	<style type="text/css">
	body{
		background-color:green;
		font-family:courier;
	}
	.MenuWrapper{
		border:2px solid black;
		background-color:orange;
		width:500px;
		position:absolute;
		left:400px;
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

	.btn6{
		background-color: white;
		height:25px;
	}

	.btn7{
		background-color: pink;
		height:25px;
	}

	.btn8{
		background-color: white;
		height:25px;
	}

	.btn9{
		background-color: pink;
		height:25px;
	}

	.btn10{
		background-color: white;
		height:25px;
	}

	.btn11{
		background-color: pink;
		height:25px;
	}

	.btn12{
		background-color: white;
		height:25px;
	}

	.btn13{
		background-color: pink;
		height:25px;
	}

	.btn14{
		background-color: white;
		height:25px;
	}

	.btn15{
		background-color: pink;
		height:25px;
	}

	.btn16{
		background-color: white;
		height:25px;
	}


	.logoutbtnwrapper{
		background-color: orange;
		font-family: courier;
		position:relative;
		left:205px;
		top:55px;
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

		<a href=enter_results_round_1.php>
			<div class="btn6">
				<p>Enter results of Round 1 in Database</p>
			</div>
		</a>
		<a href=update_player_states.php>
			<div class="btn7">
				<p>Update Player States</p>
			</div>
		</a>

		<a href=create_table_round_2.php>
			<div class="btn8">
				<p>Create Table for Round 2</p>
			</div>
		</a>

		<a href=schedule_round_2.php>
			<div class="btn9">
				<p>Schedule Round 2</p>
			</div>
		</a>

		<a href=display_round_2.php>
			<div class="btn10">
				<p>Display Schedule of Round 2</p>
			</div>
		</a>

		<a href=enter_results_round_2.php>
			<div class="btn11">
				<p>Enter results of Round 2 in Database</p>
			</div>
		</a>

		<a href=create_table_round_3.php>
			<div class="btn12">
				<p>Create Table for Round 3</p>
			</div>
		</a>

		<a href=schedule_round_3.php>
			<div class="btn13">
				<p>Schedule Round 3</p>
			</div>
		</a>

		<a href=display_round_3.php>
			<div class="btn14">
				<p>Display Schedule of Round 3</p>
			</div>
		</a>

		<a href=enter_results_round_3.php>
			<div class="btn15">
				<p>Enter results of Round 3 in Database</p>
			</div>
		</a>

		<a href=display_highest_scorers.php>
			<div class="btn16">
				<p>Display Highest Scorers</p>
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

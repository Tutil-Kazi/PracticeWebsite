
<?php
	session_start();
	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$userName = $_POST['userName'];
		$password = $_POST['password'];

		if (!empty($userName) && !empty($password) && !is_numeric($userName)) 
		{

			//saveto database
			$userId = random_num(20);
			$query = "Insert into users (userId, userName, password) values('$userId', '$userName', '$password')";

			mysqli_query($con, $query);

			header("location: login.php");
			die;


		}
		else{
			echo 'Please enter some valid information';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link href="https://fonts.googleapis.com/css2?family=WindSong&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/de7287d937.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="sec1">
		<div class="header">
			<!-- <div class="nav">logo</div> -->
			<div class="nav"><a href="home.php">Home</a></div>
			<div class="nav"><a href="designs.php">Designs</a></div>
			<div class="nav"><a href="contact.php">Contact</a></div>
			<div class="nav"><a href="contact.php">Book Sessions</a></div>
			<!-- <div class="nav"><a href="about.html">About</a></div> -->
			<div class="nav"><a href="login.php">Login</a></div>
		</div>

	</div>


	<div class="sec2">

		<div class="box">
			<form id="form" method="post">
				<table>
					<tr>
						<td><h3>Sign up</h3></td>
					</tr>

					<tr>
						<td><br></td>
						<td><br></td>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<td><label>Name:</label></td>
						<td><input type="text" id="text" name= "userName" placeholder="Enter your full name" required></td>
					</tr>
					<br>

					<tr>
						<td><label>Password</label></td>
						<td><input type="Password" id="text" name= "password" placeholder="Enter password" required></td>
					</tr>
					<br>

					<tr>
						<td></td>
						<td><input id="button" type="submit" value="Sign up"></td>
					</tr>
			</table>
			</form>
		</div>
	</div>

	<div class="sec4">
		
		<span class="about">
			<h4>About</h4>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
		</span>

		<div>
			<span id="i"><i class="fas fa-map-marker-alt" style="font-size: 15px;"></i></span><span>
			Chashara, Narayanganj-1400</span>
		</div>
	</div>

	
</body>
</html>
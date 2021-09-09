<?php
	session_start();
	include("connection.php");
	include("functions.php");

	// $user_data = check_login($con);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hennartify by TK</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css2?family=WindSong&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/de7287d937.js" crossorigin="anonymous"></script>

</head>
<body>

	<!-- header and navigation bar  -->
	<div class="sec1">
		<div class="header">
			<div class="nav"><h3>Welcome !</h3></div>
			<div class="nav"><a href="home.php">Home</a></div>
			<div class="nav"><a href="designs.php">Designs</a></div>
			<div class="nav"><a href="contact.php">Contact</a></div>
			<!-- <div class="nav"><a href="book.php">Book Sessions</a></div> -->
			<!-- <div class="nav"><a href="about.php">About</a></div> -->
			<div class="nav"><a href="signup.php">Sign up</a></div>
			<div class="nav"><a href="login.php">Login</a></div>
		</div>

		<div class="img"><img src="cover3.jpg" width="1519px" height="900px"></div>
	</div>

	<div class="sec2" style="text-align: center;">
		<div class="quote"><dd>"A work of art which did not begin in emotion is not art."</dd><dd> ―  Paul Cezanne</dd></div>
		<span><i class="fas fa-caret-down fa-2x"></i></span>

	</div>
	

	<div class="sec3">

		<a href="book.php"><button class="btn">Book a Henna session</button></a>

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
<?php
	session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<script src="https://kit.fontawesome.com/de7287d937.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
</head>
<body>

	<!-- header and navigation bar  -->
	<div class="sec1">
		<div class="header">
			<div class="nav"><h2>Hello, <?php echo $user_data['userName']; ?></h2></div>
			<div class="nav"><a href="loggedinhome.php">Home</a></div>
			<div class="nav"><a href="designs.php">Designs</a></div>
			<div class="nav"><a href="contact.php">Contact</a></div>
			<div class="nav"><a href="book.php">Book Sessions</a></div>
			<div class="nav"><a href="logout.php">Logout</a></div>
			
		</div>

		<!-- <div class="img"><img src="cover3.jpg" width="1519px" height="900px"></div> -->
	</div>

	<div class="sec2">
		<div class="box">
			<br><br>
			<br><br>
			<h1>Reach out to us!</h1>
			<br><br>
			<br><br>
			<br><br>

			<div><span id="cont"><i class="far fa-envelope" style="color: floralwhite; font-size: 25px;"></i></span>
				<a href="info.hbtk@gmail.com">info.hbtk@gmail.com</a></div>
				<br>

			<div><span id="cont"><i class="fas fa-phone-alt" style="color: floralwhite; font-size: 25px;"></i></span>
				<a href="tel:+880170550036">+880170550036</a></div>
				<br>

			<div><span id="cont"><i class="fab fa-facebook-square" style="color: floralwhite; font-size: 25px;"></i></span><a href="facebook.com">Hennartify by TK</a></div>
			<br>

			<div><span id="cont"><i class="fas fa-users" style="color: floralwhite; font-size: 25px;"></i></span><a href="https://www.facebook.com/groups/712201966102645">www.facebook.com/groups</a></div>
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
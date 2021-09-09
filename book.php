<?php
	session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$bookingDate = $_POST['bookingDate'];
		$bookingTime = $_POST['bookingTime'];
		$userName = $_POST['userName'];
		

		if (!empty($bookingDate) && !empty($bookingTime) && !is_numeric($userName)) 
		{

			//save to database
			$squery = "Insert into bookdb (userName, bookingDate, bookingTime) values('$userName','$bookingDate', '$bookingTime')";

			mysqli_query($con, $squery);

			echo '<script>alert("You have successfully booked a Henna session!")</script>';
			die;


			//logged in user check
			$query = "select * from users where userName = '$userName' limit 1";

			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['userId'] = $user_data['userId'];
						
						header("Location: loggedinhome.php");
						die;
					}
				}
			}
			echo 'Wrong Username and Password';


		}
		else{
			echo 'Please put valid information';
		}
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book a Henna session</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link href="https://fonts.googleapis.com/css2?family=WindSong&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/de7287d937.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="sec1">
		<div class="header">
			<div class="nav"><h2>Hello, <?php echo $user_data['userName']; ?></h2></div>
			<div class="nav"><a href="loggedinhome.php">Home</a></div>
			<div class="nav"><a href="designs.php">Designs</a></div>
			<div class="nav"><a href="contact.php">Contact</a></div>
			<div class="nav"><a href="book.php">Book Sessions</a></div>
			<div class="nav"><a href="logout.php">Logout</a></div>
			<!-- <div class="nav"><a href="book.php">Book Sessions</a></div> -->
			<!-- <div class="nav"><a href="about.php">About</a></div> -->
		</div>
	</div>

	<div class="sec2">
		<div class="box">
			<form id="form" method="post">
				<table>
					<tr>
						<td><h3>Book Henna session</h3></td>
					</tr>
				
					<tr>
						<td><label>Username</label></td>
						<td><input type="text" id="text" placeholder="Enter username" name="userName"required></td>
					</tr>
					<br>

					<tr>
						<td><label>Password</label></td>
						<td><input type="password" id="text" name= "password" placeholder="Enter password" required></td>
					</tr>
					<br>

					<tr>
						<td><label>Date</label></td>
						<td><input type="date" id="text" name="bookingDate" required></td>
					</tr>
					<br>

					<tr>
						<td><label>Time</label></td>
						<td><input type="time" id="text" name= "bookingTime" required></td>
					</tr>
					<br>

					<tr>
						<td></td>
						<td><input id="button" type="submit" value="Confirm"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>

	
</body>
</html>
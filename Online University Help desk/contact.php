<?php
	session_start(); 
	if(!isset($_SESSION["login"])){
		header('location: Login page.php');
	}

	if(isset($_POST["logout"]))
{
session_destroy();
unset($_SESSION['login']);
header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us - UniGuide</title>
		<link rel ="stylesheet" href = "Styles/contact styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<div class = "nav">
		<div class = "icon">UniGuide</div>		
		<ul>
			<li><a href="index 2.0.php">Home</a></li>
			<li class = "active"><a href="contact.php">Contact Us</a></li>
			<li><a href = "My Ticket.php">My Tickets</a></li>
			<li><a href="FAQ.php">FAQs</a></li>
		</ul>
			<div class = "space">	
			</div>
		
		<ul>
			<li class = "logout"><a href="index new.php">Logout</a></li>		
		</ul>
		
		</div>
		<br><br><br>
		<div class = "content">
			<form method = "post"action="contact.php">
			<h3>Contact Form</h3>
		<div class = "spacing">
			<br>
		<center><h2>
		<?php

			include 'contactconfig.php';
	
			if(isset($_POST['submit']))
			{
				$firstName = $_POST['firstname'];
				$lastName = $_POST['lastname'];
				$regNo = $_POST['RegisterNumber'];
				$mobileNo = $_POST['mobilenumber'];
				$email = $_POST['email'];
				$type = $_POST['Type'];
				$subject = $_POST['subject'];
				$description = $_POST['description'];
			
				$sql = "insert into ticket(RegisterNumber, FirstName, LastName, MobileNumber, Email, TicketType, Subject, Description)
				values('$regNo','$firstName','$lastName','$mobileNo','$email','$type','$subject','$description')";
			
				$result = mysqli_query($con,$sql);
			
				if($result)
				{
					echo "Data Entered Successfully!";
				}
				else
				{
					die(mysqli_error($con));
				}
			}
		
		?>
		</center></h2>
		<br>
			First Name*<br>
			<input type = "text" Name= "firstname" placeholder = "First Name" required>
			<br><br>
			Last Name*<br>
			<input type = "text" Name= "lastname" placeholder= "Last Name" required>
			<br><br>
			Register Number*
			<input type = "text" Name= "RegisterNumber" placeholder= "Register No:" required>
			<br><br>
			Mobile Number*<br>
			<input type = "phone" name="mobilenumber" pattern="[0-9]{10,10]" placeholder = "0123456789" required><br><br>
			Email*<br>
			<input type="email" name="email" placeholder="example@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9._%+-]+\.[a-z]{2,3}" required>
			<br><br>
			Ticket Type*<br><br>
			<input type = "radio" Name ="Type" value = "URGENT"> URGENT
			<input type = "radio" Name ="Type" value = "NON-URGENT"> NON-URGENT
			<br><br>
			Subject*
			<input type = "text" Name= "subject" placeholder = "Subject" required>
			<br><br>
			Description*<br>
			<textarea name="description" rows="8" cols="40" required></textarea>
			<br><br>
			<center>
			<input type = "submit" id = "submit" value="submit" name = "submit">
			</center>
			<br><br>
		</div>
		</form>	
		</div>
		<br><br><br>
		<div class = "footer">
				<div class = "col-1">
				<a href ="Feedback.php">Provide Feedback</a>
				<div class = "row-1">
				info@uniguide.lk
				</div>
				<div class = "row-2">
				Copyright 2022 © UniGuide. All Rights Reserved.
				</div>
				</div>
				<div class = "col-2">
					<div class = "imgarea">
					<img src = "images/qr-code.WEBP" div class = "qr-code">
					</div>
					<a href="facebook.com" class="fa fa-facebook"></a>
					<a href="twitter.com" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="instagram.com" class="fa fa-instagram"></a>
					<a href="linkedin.com" class="fa fa-linkedin"></a>
				</div>
			</div>
	</body>
</html>
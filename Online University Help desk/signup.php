

<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us - UniGuide</title>
		<meta charset= "utf-8">
		<link rel ="stylesheet" href = "Styles/styles.css">
		<link rel ="stylesheet" href = "Styles/styles signup.css">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/myscript.js"></script>
	</head>
	
	<body>

		<div class = "nav">
		<div class = "icon">UniGuide</div>		
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href = "My Ticket.php">My Tickets</a></li>
			<li><a href="FAQ.php">FAQs</a></li>
		</ul>
			<div class = "space">
				
			</div>
		<ul>
			<li><a href="Login page.php">Login</a></li>
			<li class = "signup.php"><a href="">Sign Up</a></li>
		</ul>
		</div>
		<br><br><br>
		
		
		
		  <section>
		  
	    <ul align ="center">
	    <div class="center">
             <ul>
            <h1>Sign up</h1>
			
			<form method="post"action="signup.php" enctype="multipart/form-data">
			<center><h2>
			<?php 
				include("web connection signup.php");

			?><br></h2></center>
			
			Full Name:<br/>
			<input type="text" name="username" value="<?=$username?>"">
			<br/><br/>
			Registration Number:<br/>
			<input type="text" name="register" value="<?=$register?>">
			<br/><br/>
			E-mail address:<br/>
			<input type="email" name="email" value="<?=$email?>">
			<br/><br/>
			Password:<br/>
			 <input type="password" name="password1">
			<br/><br/>
			Confirm Password:<br/>
			 <input type="password" name="password2">
			<br/><br/>
			<br>
			
			<p> Already have an account?<a href="Login page.php">Login here</a>.</p>
			<center>
			    <input type="submit" class="submit" name="submit">
			</center>
			
		</form>	
		<br><br><br>
		</div>	
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
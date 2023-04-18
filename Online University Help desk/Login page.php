<?php 
include("web connection.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
	<head>
		<title>UniGuide</title>
		<meta charset= "utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel ="stylesheet" href = "Styles/Login styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
	<div class = "nav">
		<div class = "icon">UniGuide</div>		
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="My Ticket.php">My Tickets</a></li>
			<li><a href="FAQ.php">FAQs</a></li>
		</ul>
			<div class = "space">
				
			</div>
		<ul>
	
			<li class ="active"><a href="Index new.php">Logout</a></li>
			<li class = "signup"><a href="signup.php">Sign Up</a></li>
		</ul>
	</div>
	
	<article>
			<li><img src = "images\logo.png" div class = "imageabsolute"></li>
	</article>
	
	<section>
	
<ul align = "center">	
		<div class="center">
		<ul>
      <h1>Login</h1>
      <form method = "post" action="Login page.php" enctype="multipart/form-data">
	  
        <div class="txt_field">
          <input type="text" name="register" value="<?=$register?>">
          <span></span>
          <label>Register no</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" >
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name = "login" action = "index.php">
        <div class="register_link">
          Not Registered? <a href="signup.php">Register</a>
        </div>
      </form>
	  </ul>
    </div>
</ul>
</section>


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
		</div>
	</body>
</html>
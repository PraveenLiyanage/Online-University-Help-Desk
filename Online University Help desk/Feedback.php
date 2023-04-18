<!DOCTYPE html>
<html>
	<head>
		<title>Provide Feedback- UniGuide</title>
		<link rel ="stylesheet" href = "Styles/feedback styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/myscript.js"></script>
	</head>
	
	<body>
		<div class = "nav">
		<div class = "icon">UniGuide</div>		
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class = "active"><a href="contact.php">Contact Us</a></li>
			<li><a href = "My Ticket.php">My Tickets</a></li>
			<li><a href="FAQ.php">FAQs</a></li>
		</ul>
			<div class = "space">
				
			</div>
		<ul>
			<li><a href="Login page.php">Login</a></li>
			<li class = "signup"><a href="signup.php">Sign Up</a></li>
		</ul>
		</div>
		<br><br><br>
		
		  <section>
	    <ul align ="center">
	    <div class="center">
             <ul>
			 <h3> This Feedback form stores your Feedbacks anonymously therefore it does not collect any user information.</h3>
            <h1> Provide Feedback</h1><br>
			<br>
			
			<form method="POST" action = "Feedback.php">
			<?php
               include 'feedbackconfig.php';
			   if(isset($_POST['submit']))
			   {
				   $IncidentCen = $_POST ['IncidentCenter'];
				   $IncidentLoc = $_POST ['IncidentLocation'];
				   $FeedbackDet	=  $_POST ['FeedbackDetails'];
				   $DesiredOut = $_POST ['DesiredOutcomes'];	
            	
            
					$sql = "insert into feedback (IncidentCenter, IncidentLocation, FeedbackDetails, DesiredOutcomes)
					values('$IncidentCen', '$IncidentLoc', '$FeedbackDet', '$DesiredOut')";
				
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
			
			
			
			<br>
			Incident Center:<br/>
			<input type="text" name="IncidentCenter"   placeholder="Incident Center" required>
			<br/><br/>
			Incident Location:<br/>
			<input type="text" name="IncidentLocation"  placeholder="Incident Location"   required>
			<br/><br/>
			Feedback Details:<br/>
			<input type="text" name="FeedbackDetails" placeholder="Describe the Incident"   required>
			<br/><br/>
			Desired Outcomes:<br/>
			<input type="text" name="DesiredOutcomes"  placeholder="Suggest Solution" required>
			<br/><br/>
			
			
			<br>
			
			<center>
			    <input type="submit" value="Submit form" id="submitBtn" name = "submit">
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
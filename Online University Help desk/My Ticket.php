
 <?php 
    session_start();
	include("confige.php");
	
	if(!isset($_SESSION["User"])){
		header('location: Login page.php');
	}
	
if(isset($_POST["logout"]))
{
session_destroy();
unset($_SESSION['User']);
header("Location:index.php");
}
 
 ?>


<!DOCTYPE html>

<html>
	<head>
		<title>UniGuide</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/my tickets styles.css">
	</head>
	
	<body>
	<div class = "nav">

		<div class = "icon">UniGuide</div>		
		<ul>
			<li><a href="index 2.0.php">Home</a></li>
			<li ><a href="contact.php">Contact Us</a></li>
			<li class = "active1"><a href="My Tickets.php">My Tickets</a></li>
			<li><a href="FAQ.php">FAQs</a></li>
			
		</ul>
		<div class = "space"></div>
		
		<div class="us">
		<a href = "User Account.php"><button class="user"><i class="fa fa-user-circle-o"></i></button></a>
		</div>
	</div>
	
		<div class="out">
		
		<div class="round-large">
			<h2 >My Tickets</h2>	
		</div>
	
		<button class=" sbutton"><a href="contact.php">New Ticket</a></button>
		</div>
	
		<div class="inbtn">
			<p><a href="My Ticket.php"> <button class="activeinbutton" ><i class="fa fa-envelope"></i>   All Tickects </button></a></p>
			<p><a href="Resolved.php"><button class="inbutton"><i class="fa fa-check"></i>  Resolved </button></a></p>
			<p><a href="Pending.php"><button class="inbutton"><i class="fa fa-spinner"></i>   Pending  </button></a></p>
			<p><a href="Open.php"><button class="inbutton"><i class="fa fa-envelope-open-o"></i>    Open </button></a></p>	
		</div>
		
		<table class="ttable">
		<colgroup>
			<col  style="width: 25%;">
			<col style="width:0%">
			<col style="width:20%">
			<col style="width:0%">
			<col style="width:15.9%">
		</colgroup>
  <tr>
    <th>Title</th>
    <th>Ticket Number</th>
	<th>Ticket Type </th>
    <th>Date Created </th>
	<th>Status </th>
	
  </tr>
 
  <?php
	$RegisterNumber=$_SESSION["User"];
	$sql="Select * from `ticket` where RegisterNumber='$RegisterNumber'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		while($row=mysqli_fetch_assoc($result)){
			
			$Subject=$row['Subject'];
			$TicketType=$row['TicketType'];
			$Date=$row['Date'];
			$TicketNumber=$row['TicketNumber'];
			$status=$row['status'];
			
			echo '<tr>
			<td>'.$Subject.'</td>
			<td>'.$TicketNumber.'</td>
			<td>'.$TicketType.'</td>
			<td>'.$Date.'</td>
			<td>'.$status.'</td>
			</tr>';
		}
		
		
	}
 ?>	
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
  </tr>
  
   <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
  </tr>
  
  </table>


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
					<a href="" class="fa fa-facebook"></a>
					<a href="twitter.com" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="instagram.com" class="fa fa-instagram"></a>
					<a href="linkedin.com" class="fa fa-linkedin"></a>
				</div>
			</div>
	
	</body>
</html>
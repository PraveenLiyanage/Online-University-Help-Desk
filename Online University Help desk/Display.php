<?php
include 'feedbackconfig.php';?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Provide Feedback</title>
 </head> 
 <body>
 
 <div class="container">
 <button class="btn btn-primary my-5"><a href="Feedback.php"
 class="text-light"> Feedback Details </a>
 </button>
 
 <table class ="table">
  <thead>
   <tr>
       <th scope="col">ID</th>
	   <th scope="col">IncidentCenter</th>
	   <th scope="col">IncidentLocation</th>
	   <th scope="col">IncidentDate</th>
	   <th scope="col">FeedbackDetails</th>
	   <th scope="col">DesiredOutcomes</th>
   </tr>
  </thead>	

 

 <?php

$sql="Select * from feedback";
$result =mysqli_query($con,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
         $ID=$row['ID'];
		 $IncidentCenter=$row['IncidentCenter'];
		 $IncidentLocation=$row['IncidentLocation'];
		 $IncidentDate=$row['IncidentDate'];
		 $FeedbackDetails=$row['FeedbackDetails'];
		 $DesiredOutcomes=$row['DesiredOutcomes'];
		 
		 echo ' <tr>
		 <th scope="row">'.$ID. '</th>
		 <td>' .$IncidentCenter. '</td>
		 <td>' .$IncidentLocation. '</td>
		 <td>' .$IncidentDate. '</td>
		 <td>' .$FeedbackDetails. '</td>
		  <td>' .$DesiredOutcomes. '</td>
		  </tr>';
}   
}
?>   

 
 </div>
 </body>
</html>
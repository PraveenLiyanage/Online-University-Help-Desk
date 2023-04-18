<?php
	
	$con=new mysqli('localhost','root','','register');
	
	if(!$con)
	{
		die(mysqli_error($con));
	}


?>
<?php

session_start();


$register='';
$servername = '';
$username = '';
$password = '';
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'register');


if (isset($_POST['login'])) {
  $register = mysqli_real_escape_string($db, $_POST['register']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($register)) {
  	array_push($errors, "Register no is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE register='$register' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['register'] = $register;
  	  $_SESSION['success'] = "You are now logged in";
	  $_SESSION['User'] = $register;
	  $_SESSION['login'] = $register;
	  $_SESSION['Profile'] = $register;
  	  header('location: index new.php');
  	}else {
  		array_push($errors, "Details not matched");
  	}
  }
}


?>



<?php

session_start();


$username='';
$register='';
$email='';
$servername = '';
$username = '';
$password = '';
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'register');


if (isset($_POST['submit'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $register = mysqli_real_escape_string($db, $_POST['register']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  if (empty($username)) { array_push($errors, "Please fill username field"); }
  if (empty($register)) { array_push($errors, "Please fill Register number field"); }
  if (empty($email)) { array_push($errors, "Please fill email field"); }
  if (empty($password1)) { array_push($errors, "Please fill password field"); }
  if ($password1 != $password2) {
	array_push($errors, "You entered passwords are not matched");
  }

  $user_check_query = "SELECT * FROM user WHERE  username='$username' OR register='$register' OR email='$email' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
	
	if ($user['register'] === $register) {
      array_push($errors, "Registration no already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password1);

  	$query = "INSERT INTO user (username, register, email, password) 
  			  VALUES('$username', '$register', '$email', '$password')";
  	$result = mysqli_query($db,$query);
			
				if($result)
				{
					echo "Registration Successfull!";
				}
				else
				{
					die(mysqli_error($db));
				}
  }
}

?>
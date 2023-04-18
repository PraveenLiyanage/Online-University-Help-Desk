<?php 
  session_start(); 

  if (!isset($_SESSION['register'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Login page.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['register']);
  	header("location: Login page.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Styles/afterstyles.css">
</head>
<body>

<div class="header">
	<h2>Login Successful!</h2>
</div>
	
<div class="content">
  	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php  if (isset($_SESSION['register'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['register']; ?></strong></p>
    	<p> <form method="post" action="logout.php">
		<input name="logout" type="submit" value="Logout"  style="color: red";/>
		</form>  </p>
		<p> <a href="index 2.0.php?Go Home Page ='1'" style="color: red;">Go Home Page</a> </p>
    <?php endif ?>
</div>

</body>
</html>
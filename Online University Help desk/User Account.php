<?php
$db = mysqli_connect("localhost","root","","register");
$_SESSION["id"] = 1; 
$sessionId = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM tb_user WHERE id = $sessionId "));

?>

<?php
 session_start();
	
	if(!isset($_SESSION['Profile'])){
		header('location: Login page.php');
	}
	
if(isset($_POST["logout"]))
{
session_destroy();
unset($_SESSION['Profile']);
header("Location:index.php");
}

include('Userconfig.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>UniGuide</title>
		<meta charset= "utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel ="stylesheet" href = "Styles/User Account.css">
		<link rel ="stylesheet" href = "Styles/DP Img.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	
	</head>
	
	<body>
	<header>
	<div class = "nav">
		<div class = "icon">UniGuide</div>		
		<ul>
			<li class = "active"><a href="index 2.0.php">Home</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="My Ticket.php">My Tickets</a></li>
			<li><a href="FAQ.php">FAQs</a></li>
		</ul>
			<div class = "space">
				
			</div>
		<ul>
			
			<li class = "logout"><a href="index new.php">Logout</a></li>
			<li class = "Profile"><a href="User Account.php"></a></li>
		</ul>
	</div>
	</header>
	
	
	
	<main>
	<article>
	<div class = "content1">
	<form class = "form1" id = "form" action = "" enctype = "multipart/form-data" method = "post">
	<div class = "upload">
	<?php
	$id = $user["id"];
	$name = $user["name"];
	$image = $user["image"];
	?>
	<img src = "User acc img/<?php echo $image;?>" width = 125 height = 125 title ="<?php echo $image;?>">
	<div class="round">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera" style = "color: #fff;"></i>
        </div>
	</div>
	</form>
	</div>
		<script type="text/javascript">
			document.getElementById("image").onchange = function(){
			document.getElementById("form").submit();
      };
		</script>
		
		<?php
		if(isset($_FILES["image"]["name"])){
			  $id = $_POST["id"];
			  $name = $_POST["name"];

			  $imageName = $_FILES["image"]["name"];
			  $imageSize = $_FILES["image"]["size"];
			  $tmpName = $_FILES["image"]["tmp_name"];

			  
			  $validImageExtension = ['jpg', 'jpeg', 'png'];
			  $imageExtension = explode('.', $imageName);
			  $imageExtension = strtolower(end($imageExtension));
			  if (!in_array($imageExtension, $validImageExtension)){
        echo
				"
				<script>
				  alert('Invalid Image Format');
				  document.location.href = '../Project new';
				</script>
				";
		  }
		
			 elseif ($imageSize > 1200000){
        echo
				"
				<script>
				  alert('Image Size Is Too Large');
				  document.location.href = '../Project new';
				</script>
				";
			  }
      else{
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); 
        $newImageName .= '.' . $imageExtension;
        $query = "UPDATE tb_user SET image = '$newImageName' WHERE id = $id";
        mysqli_query($db, $query);
        move_uploaded_file($tmpName, 'User acc img/' . $newImageName);
        echo
        "
        <script>
        document.location.href = '../Project new';
        </script>
        ";
      }
    }
    ?>
	</article>
	
	
	<article>
	<ul>	
		<div class="content2">
		<div>
			<form class = "form2" action = "" method="post" enctype="multipart/form-data">
			
			<?php
			$register = $_SESSION['Profile'];
			$query="Select * from user WHERE register = '$register'";
			$result =mysqli_query($db,$query);
			if($result){
			   while($row=mysqli_fetch_assoc($result)){
					 $username=$row['username'];
					 $register=$row['register'];
					 $email=$row['email'];
					 $password=$row['password'];
		
					}   
				}
			?> 
			
			
			<div class = "flex">
				<div class = "inputBox">
					<span>Username :</span>
					<input type= "text" name="username" value="<?php echo $row.$username; ?>" class="box" disabled required><br><br>
					
					<span>Registration Number :</span>
					<input type= "text" name="register" value="<?php echo $row.$register; ?>" class="box" disabled required><br><br>
					
					<span>Student email :</span>
					<input type= "email" name="email" value="<?php echo $row.$email ?>" class="box" disabled required><br><br>
					
					<span>Password :</span>
					<input type= "password" name="password" value="<?php echo $row.$password ?>" disabled class="box" required>
					
					

		</form>
				
		</div>
		</div>
	</ul>
	</article>

	</main>
	
	
	
	
	<footer>
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
	</footer>
	</body>
</html>
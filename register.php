<?php
require_once('connect.php');
if(isset($_POST)& !empty($_POST)){
	$username = mysqli_real_escape_string($connection,$_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = md5($_POST['password']);

	$sql = "INSERT into users (username,email,password) VALUES ('$username','$email','$password')";
	$result = mysqli_query($connection,$sql);
	if($result){
		echo "User registration successful";
	}
		else {
			echo "User registration failed";
			}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="text/stylesheet" href="styles.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
	    <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
		<input type="email" name="email" id="inputEmail" class="form-control"  placeholder="Email Address" required autofocus><br>
        <!--<label for="inputPassword" class="sr-only">Password</label>-->
        <input type="password" name="password" id="inputPassword" class="form-control"  placeholder="Password" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button><br>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>      
</body>
</html>

<?php
session_start();
  require_once('connect.php');
  if(isset($_POST)& !empty($_POST)){
  $username = mysqli_real_escape_string($connection,$_POST['username']);
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
  $result = mysqli_query($connection,$sql);
  $count  =mysqli_num_rows($result); 
  if($count==1){
    $_SESSION['username'] = $username;
  }
    else {
      echo "Login failed";
      }
}
if(isset($_SESSION['username'])){
  echo "User already logged in";
}
?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="styles.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href=styles.css">
	</head>
	
    <body>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
	</body>
</html>
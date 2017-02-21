<html>
	<head>
		<style>
		body{
			background-image: url("im.jpg");
		}
		p {
		text-style: wavy;
		text-align:center;
		font-size:50px
		}
		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			padding: 14px 20px;
			background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		.cancelbtn,.signupbtn {
			float: left;
			width: 50%;
		}

		/* Add padding to container elements */
		.container {
			padding: 200px;
			    margin:auto; 
				    background-color:white;
		}

		/* Clear floats */
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
			.cancelbtn, .signupbtn {
				width: 100%;
			}
		}
		</style>
	</head>
	<body>
<form action="/menu.php">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <div class="clearfix">
      <button type="button"  class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		mysqli_select_db($conn, 'parking_lots');
	   $sql = "SELECT id,name,email FROM Users";
	   $retval = mysql_query( $sql, $conn );
	   
	   if(! $retval ) {
		  die('Could not get data: ' . mysql_error());
	   }
	   
	   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		  echo "EMP ID :{$row['id']}  <br> ".
			 "EMP NAME : {$row['name']} <br> ".
			 "EMP SALARY : {$row['email']} <br> ".
			 "--------------------------------<br>";
	   }
		echo "Fetched data successfully\n";
		$conn->close();
	?>
	</body>
</html>
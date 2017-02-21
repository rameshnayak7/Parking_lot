<html>
	
	<head><title>ParKING</title>
		<style>
		.button {
			background-image:url("wa1.jpg");
			box-shadow:2px 4px #999;
			border-radius: 100px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin-top:90px;
			margin-left:600px;
			display:block;
			cursor: pointer;
			transition-duration: 0.4s;
		}
		.button:hover {
			opacity:0.7;
		}
		body{
			background-image: url("im.jpg");
		}
		p {
		text-style: wavy;
		text-align:center;
		font-size:50px
		}
		</style>
	</head>
	
	
	<body background: #00ff00 url("im.jpg") no-repeat fixed center;>
	<button type='button' class='button'>Book</button>
	<button type='button' class='button'>Cancel</button>
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
		$conn->query('create database parking_lots');
		mysqli_select_db($conn, 'parking_lots');

		$conn->close();
	?>
	</body>
	
</html>
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
		$sql="insert into Users(name,email,PasswordHash,vehicleno) 
		values('{$_POST['name']}','{$_POST['email']}','{$_POST['psw']}','{$_POST['vhno']}')";
		mysqli_query( $conn,$sql);
		echo 'Login successfull ';
		header("location:menu.php");
		exit();
		$conn->close();
	?>
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
		$sql="update Slots set status='N' where slotid='{$_POST['slotid']}'";
		mysqli_query($conn,$sql);
		$sql="delete from Books where slotid='{$_POST['slotid']}' ";
		mysqli_query($conn,$sql);
		$conn->close();
 header("location:menu.php");
 ?>
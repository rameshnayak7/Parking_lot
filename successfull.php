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
		session_start();
		mysqli_select_db($conn, 'parking_lots');
		$sql="insert into Books(date,stime,etime,email,slotid) 
		values('{$_POST['date']}','{$_POST['stime']}','{$_POST['etime']}','{$_SESSION['email']}','{$_SESSION['slotid']}')";
		mysqli_query($conn,$sql);
		$sql="update Slots set status='B' where slotid='{$_SESSION['slotid']}'";
		mysqli_query($conn,$sql);
		$conn->close();
echo "<script>window.location.replace('menu.php')</script>";
?>
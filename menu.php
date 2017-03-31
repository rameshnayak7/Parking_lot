<html>
	
	<head><title>ParKING</title>
		<style>
		.button2 {
			background-image:url("wa1.jpg");
			box-shadow:2px 4px #999;
			border-radius: 100px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin-top:-50px;
			margin-left:700px;
			display:block;
			cursor: pointer;
			transition-duration: 0.4s;
		}
		.button1 {
			background-image:url("wa1.jpg");
			box-shadow:2px 4px #999;
			border-radius: 100px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin-top:200px;
			margin-left:500px;
			display:block;
			cursor: pointer;
			transition-duration: 0.4s;
		}
		.button1:hover,.button2:hover {
			opacity:0.7;
		}
		body{
			background-image: url("im.jpg");
		}
		p {
		
		text-align:center;
		font-size:25px;
		background-color:#200752;line-height:4;
		background:rgba(250,250,250,0.4);
		letter-spacing:3pt;
		}
		a:link, a:visited {
			background-color: #f44336;
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: inline-block;
		}
		a:hover, a:active {
			background-color: red;
		}
		#header-content {
			position: absolute;
			bottom: 80;
			left: 615;
		}
		</style>
	</head>
	
	<p>Login  successfull !!</p>
	<button type='button' class='button1' onclick="window.location.replace('book.php')">Book</button>
	<button type='button' class='button2' onclick="window.location.replace('cancel.php')" >Cancel</button>
	<div id="header-content">
	<a href="login.php" target="_self" >LOGOUT</a></div>
	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$conn = new mysqli($servername, $username, $password);
			mysqli_select_db($conn, 'parking_lots');
			$dt=date("Y-m-d");
			$tm=date("h:m:a");
			$sql="update Slots set status='N' where slotid in
			(select slotid from Books where date<$dt) ";
			if(mysqli_query($conn,$sql))
				echo " cool bro ".$dt."  ".$tm."<br>";
			else
				echo " ops lol ".$conn->error;
			$sql="delete from Books where date<$dt ";
			mysqli_query($conn,$sql);
			$sql = "SELECT slotid,date FROM Books";
			$retval = mysqli_query( $conn,$sql);
			while($row = mysqli_fetch_array($retval)) {
			echo "user sid : {$row['slotid']} <br> ".
			 "user dt : {$row['date']} <br> ".
			 "--------------------------------<br>";
			}
			 echo "<br> LOL <br>";
			while($row = mysqli_fetch_array($retval)) {
			echo "user sid : {$row['slotid']} <br> ".
			 "--------------------------------<br>";
	   }
			$conn->close();
	?>
	</body>
</html>
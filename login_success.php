	  <?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$conn = new mysqli($servername, $username, $password);
		mysqli_select_db($conn, 'parking_lots');
		$ml=$_POST['email'];
		$ps=$_POST['psw'];
		session_start();
		$sql = "SELECT name,PasswordHash,email FROM Users";
		$retval = mysqli_query( $conn,$sql);
		while($row = mysqli_fetch_array($retval)) {
		    if((strpos($row['PasswordHash'],$ps ) !== false)&&(strpos($row['email'],$ml ) !== false))
			{
			$_SESSION['username']=$row['name'];
			$_SESSION['email']=$ml;
			 header("location:menu.php");
			 exit();
			}
	   }
	   header("location:login.php");echo '<br /><a href="succesfull.php">page 2</a>';
	   $conn->close();
	  ?>
  <html>
  <head>
  <style>
	.button-N{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	float:center;
	}
	.button-N:hover,.button-B:hover,.disabled:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
	.button-B{
    background-color: #F00; /* Green */
    border: none;
    color: white;
	cursor: not-allowed;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	float:center;
	}
	.disabled {
    cursor: not-allowed;
	background-color:   #a9a9a9;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	float:center;
	}
	body {
	background-image:url("bo.jpg");
    }
	input[type="time"],input[type="date"] {
    width: 150px;
    display: block;
    margin-bottom: 10px;
    background-color: white;
}
.submit{
background: #B9DFFF;
color: #fff;
border: 1px solid #eee;
border-radius: 20px;
padding:15px;
font-size:18px;
box-shadow: 5px 5px 5px #eee;
}
.submit:hover {
background: #016ABC;
color: #fff;
border: 1px solid #eee;
border-radius: 20px;
box-shadow: 5px 5px 5px #eee;
}
		a:link, a:visited {
			background-color: YELLOW;
			color: BLACK;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: inline-block;
		}
		a:hover, a:active {
			background-color: BLUE;
		}
  </style>
  </head>
  <body>
	<h1 style="text-align: center;letter-spacing: 3px;text-shadow: 3px;"><?php session_start();echo $_SESSION['username'];?>, Please select a slot and enter details</h1>
  	<form method="post" action="fix_slot.php">
	<div style="width: 80%; margin: 100px 200px 15px 200px">
    <button type="submit" class="<?php getclass(0) ?>" value="<?php getsid(0) ?>" id="btn" name="btn"><?php getsid(0) ?></button>
	<button type="submit" class="<?php getclass(1) ?>" value="<?php getsid(1) ?>" id="btn" name="btn"> <?php getsid(1) ?></button>
	<button type="submit" class="<?php getclass(2) ?>" value="<?php getsid(2) ?>" id="btn" name="btn"> <?php getsid(2) ?></button>
	<button type="submit" class="<?php getclass(3) ?>" value="<?php getsid(3) ?>" id="btn" name="btn"> <?php getsid(3) ?></button>
	<button type="submit" class="<?php getclass(4) ?>" value="<?php getsid(4) ?>" id="btn" name="btn"> <?php getsid(4) ?></button>
	<button type="submit" class="<?php getclass(5) ?>" value="<?php getsid(5) ?>" id="btn" name="btn"> <?php getsid(5) ?></button><br><br>
	<button type="submit" class="<?php getclass(6) ?>" value="<?php getsid(6) ?>" id="btn" name="btn"> <?php getsid(6) ?></button>
	<button type="submit" class="<?php getclass(7) ?>" value="<?php getsid(7) ?>" id="btn" name="btn"> <?php getsid(7) ?></button>
	<button type="submit" class="<?php getclass(8) ?>" value="<?php getsid(8) ?>" id="btn" name="btn"> <?php getsid(8) ?></button>
	<button type="submit" class="<?php getclass(9) ?>" value="<?php getsid(9) ?>" id="btn" name="btn"> <?php getsid(9) ?></button>
	<button type="submit" class="<?php getclass(10) ?>" value="<?php getsid(10) ?>" id="btn" name="btn"> <?php getsid(10) ?></button>
	<button type="submit" class="<?php getclass(11) ?>" value="<?php getsid(11) ?>" id="btn" name="btn"> <?php getsid(11) ?></button>
	</div>
	<div style="width: 100%; margin: 0px 200px 400px 950px">
				    DATE:  <input type="date" id="date" name="date"><br>
				    FROM:  <input type="time" id="stime" name="stime"><br>
					TO:    <input type="time" id="etime" name="etime"><br>
					<input type='submit' formaction="successfull.php" sname='Submit' value='submit' class='submit' onclick="dispmsg()" class="button" />
	<a href="menu.php" target="_self" >BACK</a></div>
	</div>
	</form>
	<script>
	function dispmsg(){
	window.alert("Congratulation booking done!");
	}
	</script>
   <?php
		function getsid($i){
			  $servername = "localhost";
			$username = "root";
			$password = "";
			$conn = new mysqli($servername, $username, $password);
			mysqli_select_db($conn, 'parking_lots');
			$sql= "SELECT slotid FROM Slots";
			$result = mysqli_query($conn,$sql);
			global $row;
			while($i-->=0)
			$row= mysqli_fetch_array($result);
			echo $row['slotid'];
			$conn->close();
			}
		function getclass($i){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$conn = new mysqli($servername, $username, $password);
			mysqli_select_db($conn, 'parking_lots');
			$sql= "SELECT status,slotid FROM Slots";
			$result = mysqli_query($conn,$sql);
			global $row;
			while($i-->=0)
			$row= mysqli_fetch_array($result);
				if($row['status']=='N')
					echo 'Button-N';
				else if ($row['status']=='NA')
					echo 'disabled';
				else
					echo 'Button-B';
			$conn->close();
			}
   ?>
   </body>
  </html>
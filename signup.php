<html>
	<head>
		<style>
		body{
			background-image: url("im.jpg");
		}
		input[type=text], input[type=password] {
			width: 45%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 5px solid #ccc;
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
			float: center;
			width: 30%;
		}

		/* Add padding to container elements */
		.container {
					padding: 0;
				    background-color:white;
					background:rgba(250,250,250,0.4); /*change opacity of background, without the text*/
					text-align:center;
					width:500px;
					margin: 0 auto;
					min-height: 100%;
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

<form name="form" action="new_user.php" method="post">
  <div class="container">
    <br><br><br><b>
    <label><br>Name</br></label>
	<input type="text" placeholder="Enter Name" id="name" name="name">
	<label><br>Vehicle number</br></label>
	<input type="text" placeholder="Enter Vehicle number " id="vhno" name="vhno" required>
    <label><br>Email</br></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>
    <label><br>Password</br></label>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
    <label><br>Repeat Password</br></label>
    <input type="password" placeholder="Repeat Password" id="npsw" name="psw-repeat" required>
    <div class="clearfix">
		<button type="button"  class="cancelbtn" onclick="window.location.replace('login.php')">Cancel</button>
		<button type="submit" class="signupbtn">Sign Up</button>
    </div>
 
</form>
	</body>
</html>

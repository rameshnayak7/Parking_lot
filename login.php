<html>

	<head>
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
			margin-top:10px;
			margin-left:70px;
			display:inline-block;
			cursor: pointer;
			transition-duration: 0.4s;
		}
		.button:hover {
			opacity:0.7;
		}
		body{
			background-image: url("welcome.jpg");
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

		/* Center the image and position the close button */
		.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;	
		}

		img.avatar {
		width: 50%;
		border-radius: 50%;
		}

		.container {
		padding: 20px;
		}

		span.psw {
		float: right;
		padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		opacity:0.5;
		padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
		background-color: #fefefe;
		margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
		border: 1px solid #888;
		background:rgba(250,250,250,0.9);
		width: 80%; /* Could be more or less, depending on screen size */
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			}
		}
	</style>
	</head>
	
	<body>
		<div style="text-shadow:1px 1px 20px rgba(255,255,0,1);font-weight:bold;color:#FFFFFF;background-color:#200752;background:rgba(20,20,250,0.7);letter-spacing:3pt;word-spacing:7pt;font-size:17px;text-align:center;font-family:comic sans, comic sans ms, cursive, verdana, arial, sans-serif;line-height:2;">Parking at your convenience</div>
		<?php session_start();?>
		<form class="modal-content animate" action="login_success.php" method="post">
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			  <img src="book_im.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="container">
			  <label><b>email</b></label>
			  <input type="text" placeholder="Enter email-id" id="email" name="email" required>  
			  <label><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
			  <input type='submit' name='Submit' value='login' class="button" />
			  <button type='button' class='button' onclick="window.location.replace('signup.php')">sign up</button>
			</div>
	  </form>
	</body>

</html>
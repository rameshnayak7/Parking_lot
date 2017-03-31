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
	body {
	background-image:url("bo.jpg");
    }
	input[type="time"],input[type="date"] {
    width: 150px;
    display: block;
    margin-bottom: 10px;
    background-color: white;
}
  </style>
  </head>
  <body>
	<h1 style="text-align: center;letter-spacing: 3px;text-shadow: 3px;"><?php session_start();echo $_SESSION['username'];?>, Please enter the slot to cancel booking</h1>
  	<form method="post" action="cancel_done.php">
	<div style="width: 80%; margin: 100px 200px 15px 200px">
    <input type='text' name='slotid' id='slotid'></input>
	<input type='submit' name='cancel' value='cancel this slot' class='submit' onclick="dispmsg()" class="button" />
	</div>
	</form>
	<script>
	function dispmsg(){
	window.alert(" cancelled successfully ");
	}
	</script>
   </body>
  </html>
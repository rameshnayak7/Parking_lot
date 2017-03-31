<?php
session_start();
 $_SESSION['slotid']=$_POST['btn'];
 echo '<br /><a href="succesfull.php">page 2</a>';
 header("location:book.php");
?>
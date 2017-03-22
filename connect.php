<?php
$connection = mysqli_connect('localhost','root','');
if(!$connection){
die("Database Connection Falied" . mysql_error($connection));
}
$select_db = mysqli_select_db($connection, 'user_login');
if(!$select_db){
die("Database Selection Falied" . mysql_error($connection));
}
?>
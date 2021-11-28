<?php
$a	= $_POST['name'];
$b  = $_POST['password'];
$c  = $_POST['mail'];
$d  = $_POST['phoneno'];
$e  = $_POST['address'];



$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "house";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into register (name ,password,mail,phoneno,address) values('$a','$b','$c','$d','$e')";

if(mysqli_query($con,$sql))
	header('location:home.php');
else
	echo "Connection failed".mysqli_error($con);
?>
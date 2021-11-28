<?php
$a	= $_POST['name'];
$b  = $_POST['mail'];
$c  = $_POST['subject'];



$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "house";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into responsecontact (name ,mail,subject) values('$a','$b','$c')";

if(mysqli_query($con,$sql))
	header('location:contact.php');
else
	echo "Connection failed".mysqli_error($con);
?>
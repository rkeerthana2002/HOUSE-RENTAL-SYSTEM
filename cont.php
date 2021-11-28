<?php
$ftname= $_POST['ftname'];
$lname  = $_POST['lname'];
$email  = $_POST['email'];
$subject  = $_POST['subject'];

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "house";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into contact(fname,lname,email,subject) values('$fname','$lname','$email','$subject')";

if(mysqli_query($con,$sql))
	header('location:responsecontact.php');
else
	echo "Connection failed".mysqli_error($con);
?>
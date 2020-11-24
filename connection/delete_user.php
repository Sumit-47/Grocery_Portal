<?php

session_start();
$username=$_SESSION['username'];

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);

$sql="DELETE from signup WHERE username='$username'";
$result=mysqli_query($conn,$sql);

session_destroy();
header('location:../login.html');
echo "<script> alert('Account Deleted Successfully')</script>";


 ?>

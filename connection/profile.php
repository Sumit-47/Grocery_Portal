<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);

$s="select * from signup where username='sks4547' && password='aosn*8sm'";
$result=mysqli_query($conn, $s);

$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($result);
 ?>

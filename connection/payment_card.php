<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);


$totalprice2=$_SESSION['totalprice'];
$payc="INSERT INTO payment (amount,type) values ($totalprice2,'Credit/Debit Card')";
$payquery=mysqli_query($conn,$payc);
header('location:../order_cnf.php');

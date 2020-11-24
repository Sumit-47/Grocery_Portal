<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);


$totalprice2=$_SESSION['totalprice'];
$payco="INSERT INTO payment (amount,type) values ($totalprice2,'COD')";
$payoquery=mysqli_query($conn,$payco);
header('location:../order_cnf.php');

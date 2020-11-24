<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);


$totalprice2=$_SESSION['totalprice'];
$payn="INSERT INTO payment (amount,type) values ($totalprice2,'Net Banking')";
$paynquery=mysqli_query($conn,$payn);
header('location:../order_cnf.php');

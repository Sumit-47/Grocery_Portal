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

$s="select * from signup where username='$username' && password='$password'";

$result=mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username']=$username;
  header('location:../hp.php');
}else{
    header('location:../login.html');

}
 
?>

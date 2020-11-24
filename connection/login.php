<?php

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
  $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
  session_start();
  $_SESSION['username']=$res[0]['username'];
  $_SESSION['email']=$res[0]['email'];
  $_SESSION['Address']=$res[0]['Address'] ;
  $_SESSION['contact']=$res[0]['contact'] ;
  $_SESSION['password']=$res[0]['password'] ;
  $_SESSION['name']=$res[0]['name'] ;
  header('location:../test.php');
}else{
    header('location:../login.html');

}

?>

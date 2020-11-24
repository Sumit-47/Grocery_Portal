<?php

$email = $_POST['email'];
$password = $_POST['password'];
$username=$_POST['username'];
$contact=$_POST['contact'];
$name=$_POST['name'];

if(!empty($email)){
  if(!empty($password)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error()){
    die('Connection failed ('. mysqli_connect_error().')'.mysqli_connect_error());
   }
   else{
     $sql="INSERT INTO signup (email,password,username,contact,name) values ('$email','$password','$username',$contact,'$name')";
     if($conn->query($sql)){
       echo "<script> alert('New Account Created Successfully')</script>";
       header('location:../login.html');
     }
     else{
       echo "Error:". $sql. "<br>". $conn->error;
     }
     $conn->close();
   }
 }
 else{
   echo "Password should not be empty";
   die();
 }
}
else{
  echo "Email should not be empty";
  die();
}

?>

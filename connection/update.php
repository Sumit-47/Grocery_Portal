<?php
session_start();

$currentuser=$_SESSION['username'];

if(!empty($_POST['user']))
{
  $user=$_POST['user'];
}
else{
  $user=$_SESSION['username'];
}


if(!empty($_POST['nameup']))
{
  $nameup=$_POST['nameup'];
}
else{
  $nameup=$_SESSION['name'];
}


if(!empty($_POST['emailup']))
{
  $emailup=$_POST['emailup'];
}
else{
  $emailup=$_SESSION['email'];
}


if(!empty($_POST['addressup']))
{
  $addressup=$_POST['addressup'];
}
else{
  $addressup=$_SESSION['Address'];
}


if(!empty($_POST['contactup']))
{
  $contactup=$_POST['contactup'];
}
else{
  $contactup=$_SESSION['contact'];
}


if(!empty($_POST['passwordup']))
{
  $passwordup=$_POST['passwordup'];
}
else{
  $passwordup=$_SESSION['password'];
}

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);

$up1="UPDATE signup SET username='$user',email='$emailup',contact=$contactup , Address='$addressup',name='$nameup',password='$passwordup' where username='$currentuser'";

$upquery=mysqli_query($conn,$up1);
echo "<script>alert('Records Updated')</script>";
session_destroy();
header('location:../login.html');



 ?>

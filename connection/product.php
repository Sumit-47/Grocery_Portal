<?php

$pid = $_POST['pid'];
$pname = $_POST['pname'];
$price=$_POST['price'];
$img=$_POST['image'];

if(!empty($pid)){
  if(!empty($pname)){
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
     $sql="INSERT INTO products (product_id,pname,price,p_image) values ($pid,'$pname',$price,'$img')";
     if($conn->query($sql)){
       echo "New Record Inserted";
     }
     else{
       echo "Error:". $sql. "<br>". $conn->error;
     }
     $conn->close();
   }
 }
 else{
   echo "Product ID should not be empty";
   die();
 }
}
else{
  echo "Product Name should not be empty";
  die();
}

?>

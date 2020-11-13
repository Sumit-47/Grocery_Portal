<?php

$brand_id = $_POST['brand_id'];
$bname = $_POST['bname'];

if(!empty($brand_id)){
  if(!empty($bname)){
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
     $sql="INSERT INTO brand (brand_id,bname) values ($brand_id,'$bname')";
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
   echo "Brand ID should not be empty";
   die();
 }
}
else{
  echo "Brand Name should not be empty";
  die();
}

?>

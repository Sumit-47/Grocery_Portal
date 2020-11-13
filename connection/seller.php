<?php

$seller_id = $_POST['seller_id'];
$sname = $_POST['sname'];
$s_contact=$_POST['s_contact'];

if(!empty($seller_id)){
  if(!empty($sname)){
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
     $sql="INSERT INTO seller (seller_id,sname,s_contact) values ($seller_id,'$sname',$s_contact)";
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
   echo "Seller ID should not be empty";
   die();
 }
}
else{
  echo "Seller Name should not be empty";
  die();
}

?>

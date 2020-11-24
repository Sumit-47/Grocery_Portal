<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location:connection/login.php');
}
?>

<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="avi";

// Create connection
$con=new mysqli($host, $dbusername, $dbpassword, $dbname);
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['pname'];
$code = $row['code'];
$price = $row['price'];
$image = $row['p_image'];

$cartArray = array(
	$code=>array(
	'pname'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'p_image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Fresh Mart</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<div id="header">
   <div>
     <img src="images/logo.png" width="200" height="70" align="left" >
   </div>



   <div id="nav" align="right">
     <a href="profile.php"><?php echo $_SESSION['username']; ?></a>
     <a href="aboutus.php">About</a>
     <a href="Contact.php">Contact</a>
     <a href="connection/logout.php">Logout</a>

   </div>
  <h1 id="heading">Our Products</h1>
</div><br>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
else{
  $cart_count=0;
}
?>
<div>
   <table cellspacing="30px" align="center">
    <tr >
     <td><img src="images/all.png"></td>
     <td><img src="images/fruit.png"></td>
     <td><img src="images/vegetables.png"></td>
     <td><img src="images/juice.png"></td>
     <td><img src="images/bread.png"></td>
     <td><img src="cart-icon.png"/><?php echo $cart_count;?></td>
    </tr>
    <tr id="img">
      <td><a href="#all">All Product</a></td>
      <td>&nbsp;<a href="#fruit">Fruit</a></td>
      <td><a href="#vege">Vegetables</a></td>
      <td>&nbsp;&nbsp;<a href="#juice">Juice</a></td>
      <td>&nbsp;<a href="#bread">Bread</a></td>
      <td>&nbsp;<div class="cart_div"><a href="cart.php">Cart</a></div></td>
    </tr>
   </table>

   <table cellspacing="10px" align="center" cellpadding="10px" id="all">
     <div class="app"  align="center">
     <?php

     $result = mysqli_query($con,"SELECT * FROM `products`");
     while($row = mysqli_fetch_assoc($result)){
       ?>

            <div class="item">
            <form method='post' action=''>
     			  <input type='hidden' name='code' value=<?php echo $row['code']?> />
     			  <div class='image' ><img src=<?php echo $row['p_image']?> /></div>
     			  <div class='name'><?php echo $row['pname'] ?></div>
     		   	<div class='price'>Rs.<?php echo $row['price']?></div>
     			  <button type='submit' class='buy'>Buy Now</button>
     			  </form>
          </div>

          <?php
            }
     mysqli_close($con);
     ?>
     </div>
     <div style="clear:both;"></div>

     <div class="message_box" style="margin:10px 0px;">
     <?php echo $status; ?>
     </div>
 </table>
 <br />
 <br />
 <br />
     <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p><br>
      <div align="center">
       <h3>Why Choose Us....</h3>
       <img src="images/Healthy.PNG">
       <img src="images/Fresh.PNG">
       <img src="images/Natural.PNG">
       <img src="images/Premium.PNG">
      </div>
    </body>
   </html>

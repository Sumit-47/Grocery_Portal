<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location:connection/login.php');
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
     <a href="hp.html"><?php echo $_SESSION['username']; ?></a>
     <a href="aboutus.html">About</a>
     <a href="Contact.html">Contact</a>
     <a href="connection/logout.php">Logout</a>
   </div>
  <h1 id="heading">Our Products</h1>
</div><br>
<div>


   <table cellspacing="30px" align="center">
    <tr >
     <td><img src="images/all.png"></td>
     <td><img src="images/fruit.png"></td>
     <td><img src="images/vegetables.png"></td>
     <td><img src="images/juice.png"></td>
     <td><img src="images/bread.png"></td>
    </tr>
    <tr id="img">
      <td><a href="#all">All Product</a></td>
      <td>&nbsp;<a href="#fruit">Fruit</a></td>
      <td><a href="#vege">Vegetables</a></td>
      <td>&nbsp;&nbsp;<a href="#juice">Juice</a></td>
      <td>&nbsp;<a href="#bread">Bread</a></td>
    </tr>
   </table>

   <table cellspacing="10px" align="center" cellpadding="10px" id="all">
     <tr id="fruit" align="center">
       <td><img id="items" src="https://img1.exportersindia.com/product_images/bc-full/2019/9/6421183/fresh-orange-1567759904-5069464.jpeg" height="300px" width="300px" alt="Orange">
       </b><p align="center"><b>Orange</p><p align="center">Rs 60</b></p><button type="submit" id="btn" onclick="location.href='https://paystack.com/pay/freshmart'">Buy</button></td>
        <td id="fruit"><img id="items" src="https://img1.exportersindia.com/product_images/bc-full/2019/6/5962382/fresh-apple-1561091704-4963146.jpeg" height="300px" width="300px">
           <p align="center"><b>Apple</p><p align="center">Rs 50</b></p><button type="submit" name="add_to_cart" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="images/category-2.jpg" height="300px" width="300px">
           <p align="center"><b>Strawberry</p><p align="center">Rs 40</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://img2.exportersindia.com/product_images/bc-full/2019/7/6505016/fresh-lemon-1564397466-5020848.jpeg"height="300px" width="300px">
            <p align="center"><b>Lemon</p><p align="center">Rs 55</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
     </tr>

     <tr id="vege" align="center">
       <td><img id="items" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7CktGoaSDiffovGENDvwYpqmqwJHGNcLz8A&usqp=CAU" height="300px" width="300px">
           <p align="center"><b>Bell Pepper</p><p align="center">Rs0.14</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://www.duluthnewstribune.com/incoming/article1690686.ece/alternates/BASE_LANDSCAPE/Dry%20onions%20can%20be%20yellow%2C%20white%20or%20red%2C%20and%20they%20usually%20have%20a%20stronger%20flavor%20than%20fresh%20or%20sweet%20onions.%20thinkstock.com" height="300px" width="300px">
            <p align="center"><b> Onion</p><p align="center">Rs0.15</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2Farchive%2Fd852987f86aeae8b65926f9e7a260c28285ea744" height="300px" width="300px">
            <p align="center"> <b>Brocoli</p><p align="center">Rs20.0</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJzHx-UayiQUNVeYhkaTYtwjY7Dh2YFqLNdQ&usqp=CAU" height="300px" width="300px">
           <p align="center"><b> Cabbage</p><p align="center">Rs1.0</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>

     </tr>
     <tr id="juice" align="center">
       <td><img id="items" src="https://www.earthfoodandfire.com/wp-content/uploads/2018/04/Homemade-Orange-Juice.jpg" height="300px" width="300px">
           <p align="center"> <b>Orange Juice</p><p align="center">Rs9.0</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://previews.123rf.com/images/insjoy/insjoy1908/insjoy190800150/128206598-fresh-mango-juice-with-beautiful-chopped-pulp-flesh-on-bright-wooden-table-background-tropical-fruit.jpg" height="300px" width="300px">
           <p align="center"><b> Mango Juice</p><p align="center">Rs11.0</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="images/sjuice.jpg" height="300px" width="300px">
           <p align="center"><b> Strawberry Juice</p><p align="center">Rs8.0</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="images/wjuice.jpg" height="300px" width="300px">
          <p align="center"> <b>Watermelon Juice</p><p align="center">Rs0.9</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
     </tr>
     <tr id="bread" align="center">
       <td><img id="items" src="https://i.pinimg.com/originals/4c/15/4e/4c154e80b1908d6d3773962e800ab210.jpg" height="300px" width="300px">
           <p align="center"><b> Fish</p><p align="center">Rs19.0</p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="images/slicebread.jpg" height="300px" width="300px">
           <p align="center"><b>Slice of  Bread with Natural Cereals</p><p align="center">Rs21.0</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSk9sx6P9EHjnll6t0ZTY8TusGovUHJvbz7nQ&usqp=CAU" height="300px" width="300px">
           <p align="center"><b>White Sandwich Bread</p><p align="center">Rs16.5</b></p><button type="submit" id="btn" onclick="myFunction()">Buy</button></td>
       <td><img id="items" src="https://republicofchicken.in/wp-content/uploads/2020/03/raw-chicken-min-1.jpg" height="300px" width="300px">
          <p align="center"><b>Chicken</p><p align="center">Rs180</b></p><button type="submit" id="btn" class="btn1" onclick="myFunction()">Buy</button></td>
     </tr>
     <tr>
        <td colspan="5"><button type="button">Load More</button></td>
        </tr>
   </table>
  <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p><br>
   <div align="center">
    <h3>Why Choose Us....</h3>
    <img src="images/Healthy.PNG">
    <img src="images/Fresh.PNG">
    <img src="images/Natural.PNG">
    <img src="images/Premium.PNG">
   </div>
   <script>
   function myFunction()
   {
       document.getElementById("btn")
           location.href = "www.flipkart.com";
       };
   </script>
 </body>
</html>

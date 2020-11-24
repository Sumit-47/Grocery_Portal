<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aboutus.css">
  </head>
  <body>
    <div class="nav">
      <div class="left">
        <ul>
          <li><a href="test.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="right">
          <ul>
            <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="connection/logout.php">LogOut</a></li>
            </ul>
          </div>
      </div>
      <div class="team">
        <h1>Our Team</h1>
        <span class="border"></span>
      <div class="ps">
        <a href="#p1"><img src="images/pic1.jpg" alt=" " /></a>
        <a href="#p2"><img src="images/pic2.jpg" alt=" " /></a>
        <a href="#p3"><img src="images/pic3.jpg" alt=" " /></a>
        <a href="#p4"><img src="images/pic4.jpg" alt=" " /></a>
      </div>
      <div class="section" id="p1">
        <span class="name">Rohit Singh</span>
        <span class="border"></span>
        <p>
          The Application is a web based shopping system for an existing shop where every cutomers can enjoy the benefit of shopping online while being physically present in the shop. This App is an attempt to provide the advantages of online shopping to customers in real time. It helps buying the products in the shop anywhere through internet by using a QR code scanner via a web portal. This system can be used in any shop in the locality or in multinational branded shops having retail outlet chains . Since the application is available on the web it is easily accessible and easy to use
        </p>
      </div>
      <div class="section" id="p2">
        <span class="name">Sumit Singh</span>
        <span class="border"></span>
        <p>
          The Application is a web based shopping system for an existing shop where every cutomers can enjoy the benefit of shopping online while being physically present in the shop. This App is an attempt to provide the advantages of online shopping to customers in real time. It helps buying the products in the shop anywhere through internet by using a QR code scanner via a web portal. This system can be used in any shop in the locality or in multinational branded shops having retail outlet chains . Since the application is available on the web it is easily accessible and easy to use
        </p>
      </div>
      <div class="section" id="p3">
        <span class="name">Varun Singh</span>
        <span class="border"></span>
        <p>
          The Application is a web based shopping system for an existing shop where every cutomers can enjoy the benefit of shopping online while being physically present in the shop. This App is an attempt to provide the advantages of online shopping to customers in real time. It helps buying the products in the shop anywhere through internet by using a QR code scanner via a web portal. This system can be used in any shop in the locality or in multinational branded shops having retail outlet chains . Since the application is available on the web it is easily accessible and easy to use
        </p>
      </div>
      <div class="section" id="p4">
        <span class="name">Yusuf</span>
        <span class="border"></span>
        <p>
          The Application is a web based shopping system for an existing shop where every cutomers can enjoy the benefit of shopping online while being physically present in the shop. This App is an attempt to provide the advantages of online shopping to customers in real time. It helps buying the products in the shop anywhere through internet by using a QR code scanner via a web portal. This system can be used in any shop in the locality or in multinational branded shops having retail outlet chains . Since the application is available on the web it is easily accessible and easy to use
        </p>
      </div>
      </div>
  </body>
</html>

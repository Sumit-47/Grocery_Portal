<?php
session_start();
$username=$_SESSION['username'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$address=$_SESSION['Address'];
$contact=$_SESSION['contact'];
$password=$_SESSION['password'];


    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="avi";

// Create connection
$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);

    $sql= "SELECT * FROM signup WHERE username=".$_SESSION['username'];
    $res = mysqli_query($conn,$sql);

  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
        <link rel="stylesheet" href="profile.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width , initial-scale=1">
      <title></title>
    </head>
    <style>
        body{
            background-image: url('bg.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  }

  .icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
  }
        </style>
    <body>
      <div class="wrapper">
        <div class="nav">
          <div class="left">
            <ul>
              <li><a href="test.php">Home</a></li>
              <li><a href="aboutus.php">About</a></li>
              <li><a href="Contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="right">
              <ul>
                <li><a href="connection/logout.php">LogOut</a></li>
                </ul>
              </div>
          </div>
          <div>


      <span>
        <div class="sign-up">
            <img src="card.jpeg">
            <h2>User Details</h2>
            <form method="POST" action="connection/update.php">
              <b>USERNAME:</b><input type="text" class="input-box" placeholder=<?php echo $username; ?> name="user">
              <b>NAME:</b><input type="text" class="input-box" placeholder="<?php echo $name; ?>" name="nameup">
              <b>EMAIL ID:</b>  <input type="text" class="input-box" placeholder="<?php echo $email; ?>" name="emailup">
              <b>ADDRESS:</b>  <input type="text" class="input-box" placeholder="<?php echo $address; ?>" name="addressup">
              <b>CONTACT:</b>  <input type="text" class="input-box" placeholder="<?php echo $contact; ?>" name="contactup">
              <b>PASSWORD:</b>  <input type="text" class="input-box" placeholder="<?php echo $password; ?>" name="passwordup">
              <hr />
                <input type="submit" class="button1" name="update" value="Update Details">
                <hr />
            </form>
              <input type="button" class="button1" onclick="location.href='connection/delete_user.php'" value="Delete Account">
      </span>
    </div>
      </div>
    </body>
  </html>

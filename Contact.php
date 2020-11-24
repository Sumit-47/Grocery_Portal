<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact US</title>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="Contact.css">
<script>
/*$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});*/
$(document).ready(function(){
  $("#btn").click(function(){
    alert("Text: " + $("p").text());
  });
  });
</script>
  </head>
  <body>

    <div class="wrapper">
      <div class="nav">
        <div class="left">
          <ul>
            <li><a href="test.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="right">
            <ul>
              <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
              <li><a href="connection/logout.php">LogOut</a></li>
              </ul>
            </div>
        </div>
        <div class="header">
          <h1>Contact Us</h1>
          <p>
            Whatever you’ve got in mind, we’ve got inside.<br/>
                A few clicks is all it takes.
            </p>
          </div>
          <div class="form">
            <form name="myform" method="post" >
              <input type="text" placeholder="Name" name="Name"/>
              <input type="text" placeholder="E-Mail" name="Email"/>
              <input type="text" id="msg" placeholder="Message"/>
              </form>
          <button id="btn" type="button" onclick="validateform()">Get in Touch</button>
          </div>
      </div>
      <script>
      function validateform(){
        document.getElementById("btn")
      var name=document.myform.Name.value;
      var email=document.myform.Email.value;

      if (name==null || name==""){
        alert("Name can't be blank");

      }else if(email==null || email==""){
        alert("E-mail can't be blank");
      }else{
        window.location.href = "http://www.javatpoint.com/javascriptpages/valid.jsp";
      }
      }
      </script>
  </body>
</html>

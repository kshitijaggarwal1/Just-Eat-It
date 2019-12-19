<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <style>
        body
        {
            background-image:url("images/thankyou.jpg");
            background-attachment:fixed;
            background-size:100% 100%;
            font-family:"Anton",sans-serif;
        }
        .content
        {
            width:60%;
            color:white;
            background:rgba(0,0,0,0.7);
            font-family:sans-serif;
            margin-top:20%;
            padding:20px;

        }
    </style>
</head>
<body>
<div class="header">
<div class ="title">
JUST EAT IT!!
</div>
<ul>
<li><a href="#home">Home</a></li>
<li><a href="hoursandlocation.html">Hours and Location</a></li>
<li><a href="index.html">Menu</a></li>
<li><a href="login2.html">Order Online</a></li>
<li><a href="#Gift_cards">Gift Cards</a></li>
<li><a href="about_us.html">About Us</a></li>
<li><a href="reservation.html">Reservation</a></li>
<li><a href="yourOrder.html">Your Orders</a></li>
</ul>
</div>
<div class ="content">
    <h1>Thank You For trusting In Us<br>
    We are very fortunate to serve you.</h1>
    <p>
    <br>
<?php
$conn = new mysqli("localhost", "root", "", "cart");
$date = $_POST["date"];
$persons=$_POST["persons"];
$location = $_POST["location"];
$sql = "SELECT table_left from reservation where locationor=\"$location\"
order by table_left desc limit 1";
 $run = mysqli_query($conn,$sql);
 if($run)
 {
     $result = mysqli_fetch_assoc($run);
     if($result)
     {
         $x = $result["table_left"];
         $y = $x - $persons;
         if($y>=0) 
         {
             echo "Reservation is available
              for the Mentioned date.<br>
              You will be automatically redirected to reservation 
              portal in just few seconds";
             header("refresh:3;url=reserve1.html");
             exit;
         }
         else 
         {
             echo "We are Sorry.<br>we are full on the mentioned date";
         }

     }
 }
?>
</body>
</html>
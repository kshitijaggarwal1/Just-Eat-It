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
<li><a href="home.php">Home</a></li>
<li><a href="hoursandlocation.php">Hours and Location</a></li>
<li><a href="index.html">Menu</a></li>
<li><a href="login2.html">Order Online</a></li>
<li><a href="about_us.php">About Us</a></li>
<li><a href="reservation.html">Reservation</a></li>
<li><a href="IndividualOrder.php">Your Orders</a></li>
</ul>
</div>
<div class ="content">
    <h1>Thank You For trusting In Us<br>
    We are very fortunate to serve you.</h1>
    <p>
        Your booking has been done with<br>
        <?php
            $conn = new mysqli("localhost","root","","cart");
            $sql="Select nameop,dateor,timeor,locationor from reservation order by table_left limit 1";
            $run = mysqli_query($conn,$sql);
            if($run)
            {
                $result = mysqli_fetch_assoc($run);
                if($result)
                {
                    echo " Name: ";
                    echo $result["nameop"];
                    echo " on ".$result["dateor"]." at ".$result["timeor"];
                }
            }
        ?>
    </p>
    <p style='color:red'>Please Note that we will only be able to hold your table till 15 mins from the time of reservation.
        Please come accordingly.
</div>/
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>About Us
</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="about_us.css">
</head>
<body>
<div class="header">
<div class ="title">
<h2>
JUST EAT IT!!
</h2>
</div>
<ul>
		<?php
		$conn = new mysqli("localhost", "root", "", "cart");
		$sql = "select name from customer where status=1 ;";
		$run = mysqli_query($conn, $sql);
		if ($run) {

			$result = mysqli_fetch_assoc($run);

			if ($result) {
				echo '<li><a style="background-color:rgba(0,0,0.7);color:white"> Hii ' . $result['name'] . '</a></li>';
			}
		}

		?>

		<li><a href="home.php">Home</a></li>
		<li><a href="hoursandlocation.php">Hours and Location</a></li>
		<li><a href="index.html">Menu</a></li>
		<li><a href="login2.html">Order Online</a></li>
		<li><a href="about_us.php">About Us</a></li>
		<li><a href="reservation.html">Reservation</a></li>
		<li><a href="IndividualOrder.php">Your Orders</a></li>
		<?php
		$conn = new mysqli("localhost", "root", "", "cart");
		$sql = "select status from customer where status=1 ;";
		$run = mysqli_query($conn, $sql);
		if ($run) {

			$result = mysqli_fetch_assoc($run);



			if ($result['status'] == 1) {
				echo '<li><a href="logout.php">Logout </a></li>';
			} else {
				echo '<li><a href="login2.html">Login </a></li>';
			}
		}

		?>

	</ul></div>
<div class="content">
<div id="display">
ESTABLISHED SINCE 1990
<br>
It All Started With A Small Stall 
</div>
</div>
<div id ="tell_me">
<div id="head1">"TELL ME"<br></div>
<hr color="red" width="50%">
Welcome to Just Eat It, our home located in Noida 
Sector 62, where we invite guests to 
celebrate life and share sundry blends of modern<br> 
and traditional Indian cuisine. 
Our goal at JET!! is to unify our guest’s 
cultures and spirits with our own, 
expressing passion and<br> generosity in the cuisine 
we share. Executive Chef and Owner ABC 
XYZ excellently crafts a melting pot of 
Chinese,Italian <br>and Lebanese 
cuisine mixed with INDIAN attitude.
 Flavorful herbs and spices<br> combine textures 
 to appease broad-based palates.
<br><br>
Our attentive staff ensures that your entire
 dining experience at JET is stellar from 
 beginning to end.<br>Each passing of our 
 shared plates and the breaking of fresh 
 Indian pita opens up a new conversation.
<br>
<br>
Whether part of a party of fifty or a party of 
two, your experience throughout our elegant, 
yet comfortable<br> space is eventful. 
We are sharing our long held 
Indian traditions with a 
modern contemporary twist.<br>
You will feel both close to home and apart 
of something new.
</div>
<div class="sbuttons">
<a href="#" target="_blank" class="sbutton whatsapp" tooltip="Whatsapp"><i class="fab fa-whatsapp"></i></a>
<a href="#" target="_blank" class="sbutton fb" tooltip="Facebook"><i class="fab fa-facebook"></i></a>
<a href="#" target="_blank" class="sbutton gplus" tooltip="Google Plus"><i class="fab fa-google-plus-g"></i></a>
<a href="#" target="_blank" class="sbutton twitt" tooltip="Twitter"><i class="fab fa-twitter"></i></a>
<a href="#" target="_blank" class="sbutton pinterest" tooltip="Pinterest"><i class="fab fa-pinterest"></i></a>
</div>
</body>
</html>
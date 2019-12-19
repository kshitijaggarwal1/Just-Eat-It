<!DOCTYPE html>
<html>

<head>
	<title>Just Eat It!!
	</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="home.css">

	</style>
</head>

<body>
	<div class="header">
		<div class="title">
			JUST EAT IT!!
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

	</ul>
	</div>
	<div class="welcome">
		<h3 id="home_box">Welcome To JST!!</h3>
		<p>Whether part of a party of fifty, want to spend family quality time
			or a romantic dinner.Our Goal at JST is to unify our guest's culture'sand spirits
			with our own ,expressing passion and generosity in the cuisine
			we share.</p>
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
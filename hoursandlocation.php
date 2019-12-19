<?php ?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="hoursandlocation.css">
    <title> HOURS AND LOCATION</title>

</head>

<body>
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
    <div class="heading">HOURS AND LOCATION</div><br>
    <!-- <hr color="brown" width="60%"> --><br><br><br>
    <div class="whole">
        <div class="location_contain">
            <h3><U> Sector 62, Noida<br>
                    Main branch</U></h3><br>
            <div class="noida_62">
                Plot C 25, 1st Floor,<br>
                Stellar IT Park,<br>
                Industrial Area,<br>
                Sector 62, Noida<br>
            </div>
            <h3><U>Connaught Place,<br>New Delhi</u></h3>
            <div class="noida_62">
                2nd Floor,Munshilal Building,<Br>
                Block N,Outer Circle,<Br>
                Connaught Place<br>
                New Delhi<br>
            </div>
            <h3><u>Sector 16,<br>Noida</u></h3>
            <div class="noida_62">
                A-79 A, Ground Floor,<br>
                Hotel Savoy Suites,<br>
                Captian Vilyant Thapar Marg,<br>
                Sector 62, Noida
            </div>
            <h3><u>Gurugram Branch</u></h3>
            <div class="noida_62">
                Grand Mall,<br>
                3rd FLoor, MG Road,<br>
                Gurugram<br>
            </div>
            <h3><u>Ghaziabad</u></h3>
            <div class="noida_62">
                Indirapuram,<br>
                Shipra Suncity Mall,<br>
                Ghaziabad<br>
            </div>
        </div>
    </div>


</body>

</html>
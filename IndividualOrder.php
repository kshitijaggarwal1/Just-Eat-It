<!DOCTYPE html>
<html>

<head>
	<title>Customer | Orders</title>
	<link rel="stylesheet" type="text/css" href="IndividualOrder.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
	<ul>
		<?php
		$conn = new mysqli("localhost", "root", "", "cart");
		$sql = "select name from customer where status=1 ;";
		$run = mysqli_query($conn, $sql);
		if ($run) {

			$result = mysqli_fetch_assoc($run);

			if ($result) {
				echo '<li><a style="background-color:rgba(0,0,0.7);color:white;"> Hii ' . $result['name'] . '</a></li>';
			}
		}

		?>

		<li><a href="home.php">Home</a></li>
		<li><a href="hoursandlocation.php">Hours and Location</a></li>
		<li><a href="index.html">Menu</a></li>
		<li><a href="login2.html">Order Online</a></li>
		<li><a href="about_us.php">About Us</a></li>
		<li><a href="reservation.php">Reservation</a></li>
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
	&nbsp;<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-history"> Order History</i></h1>

	<table name="history">
		<tr>
			<th>Items</th>
			<th>Amount</th>
		</tr>
		<?php
		$conn = new mysqli("localhost", "root", "", "cart");
		$sql = "select dish,value from foodorder,customer where status=1 and Phone_no=PhoneNo;";
		$run = mysqli_query($conn, $sql);
		if ($run) {

			while ($result = mysqli_fetch_assoc($run)) {
				//print_r($result);
				echo "<tr>";

				if ($result) {
					echo "<td>" . $result['dish'] . "</td>";
					echo "<td>" . $result['value'] . "</td>";
				}

				echo "</tr>";
			}
		}
		?>

	</table>


</body>

</html>
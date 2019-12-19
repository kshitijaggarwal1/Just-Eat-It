<?php ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="sabkaOrder.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<title>Total Orders</title>
</head>

<body>
	<h2>Total Orders till now:</h2>

	<a href="Dashboard.php"><i class="fas fa-arrow-left fa-l" > Back to Dashboard</i></a>
	<br><br><br><br>
	<table name="order" class="purpleHorizon">
		<thead>
			<tr>
				<th>Contact Number</th>
				<th>Dishes</th>
				<th>Address</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">
					<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php
		$conn = new mysqli("localhost", "root", "", "cart");
		$sql = "select * from foodorder";
		$run = mysqli_query($conn, $sql);
		if ($run) {

			while ($result = mysqli_fetch_assoc($run)) {
				//print_r($result);
				echo "<tr>";

				if ($result) {
					echo "<td>" . $result['PhoneNo'] . "</td>";
					echo "<td>" . $result['dish'] . "</td>";
					echo "<td>" . $result['address'] . "</td>";
					echo "<td>" . $result['value'] . "</td>";
				}

				echo "</tr>";
			}
		}
		?>
		</tbody>
	</table>


</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<?php
	$conn = new mysqli("localhost","root","","cart");
	$phone_no = $_POST["phone_no"];
	$sql = "Select Name from customer
	where phone_no =$phone_no";
	$result = $conn->query($sql);
	echo "Welcome ". $result "<br>";
	?>
<h1>CART</h1>
<form method = "POST" action = "address.php">
<h3>Indain Main Course</h3>
	<table>
		<th>Iteam</th>
		<th>Quantity</th>
	<tr>
			<td>Mix Veg Masala</td>
			<td>
				<SELECT name ="IMC1">
					<option value = "0">0</option>
					<option value = "1 Mix Veg Masala">1</option>
					<option value = "2 Mix Veg Masala">2</option>
				</SELECT>
			</td>
	</tr>
	<tr>
			<td>Vegetable Korma</td>
			<td>
				<select name = "IMC2">
					<option value = "0">0</option>
					<option value = "1 Vegetable Kofta">1</option>
					<option value = "2 Vegetable Kofta">2</option>
				</select>
			</td>
	</tr>
	<tr>
			<td>Veg Do Pyaaz</td>
			<td>
				<select name = "IMC3">
					<option value = "0">0</option>
					<option value = "1 Veg Do Pyaaz">1</option>
					<option value = "2 Veg Do Pyaaz">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		<td>Paneer Kofta</td>
			<td>
				<select name = "IMC4">
					<option value = "0">0</option>
					<option value = "1 Paneer Kofta">1</option>
					<option value = "2 Paneer Kofta">2</option>
				</select>
			</td>
	</tr>
	<tr>
		<td>Matar Paneer</td>
					<td>
				<select name = "IMC5">
					<option value = "0">0</option>
					<option value = "1 Matar Paneer">1</option>
					<option value = "2 Matar Panner">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		<td>Paneer Butter Masala</td>
			<td>
				<select name = "IMC6">
					<option value = "0">0</option>
					<option value = "1 Paneer Butter Masala">1</option>
					<option value = "2 Paneer Butter Masala">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Paneer Makhni</td>
			<td>
				<select name = "IMC7">
					<option value = "0">0</option>
					<option value = "1 Paneer Makhni">1</option>
					<option value = "2 Paneer Makhni">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Baby Corn Masala</td>
			<td>
				<select name = "IMC8">
					<option value = "0">0</option>
					<option value = "1 Baby Corn Masala">1</option>
					<option value = "2 Baby Corn Masala">2</option>
				</select>
			</td>
		
	</tr>
</table>
<table>
<h3>Lentil</h3>
	<tr>
			<td>Dal Makhni</td>
			<td>
				<select name = "L1">
					<option value = "0">0</option>
					<option value = "1 Dal Makhni">1</option>
					<option value = "2 dal Makhni">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		<td>Yellow Dal Tadka</td>
			<td>
				<select name = "L2">
					<option value = "0">0</option>
					<option value = "1 Yellow Dal Tadka">1</option>
					<option value = "2 Yellow dal Tadka">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Chana Masala</td>
			<td>
				<select name = "L3">
					<option value = "0">0</option>
					<option value = "1 Chana Masala">1</option>
					<option value = "2 Chana Masala">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
			<td>Kadhi Pakoda</td>
			<td>
				<select name = "L4">
					<option value = "0">0</option>
					<option value = "1 Kadhi Pakoda">1</option>
					<option value = "2 KAdhi Pakoda">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		<td>Navratan Dal</td>
			<td>
				<select name = "L5">
					<option value = "0">0</option>
					<option value = "1 Navrantan Dal">1</option>
					<option value = "2 Navrantan Dal">2</option>
				</select>
			</td>
		</tr>
	<tr>

		<td>Rajma</td>
			<td>
				<select name = "L6">
					<option value = "0">0</option>
					<option value = "1 Rajma">1</option>
					<option value = "2 Rajma">2</option>
				</select>
			</td>
		
	</tr>
</table>
<table>
<h3>Rice/Pulao</h3>
	<tr>

			<td>Hyderbadi Biryani</td>
			<td>
				<select name = "R1">
					<option value = "0">0</option>
					<option value = "1 Hyderabadi Biryani">1</option>
					<option value = "2 Hyderabadi Biryani">2</option>
				</select>
			</td>
	</tr>
	<tr>
					<td>Kashmiri Pulao</td>
			<td>
				<select name = "R2">
					<option value = "0">0</option>
					<option value = "1 Kashmiri Pulao">1</option>
					<option value = "2 Kashmiri Pulao">2</option>
				</select>
			</td>
				</tr>
	<tr>
	
			<td>Vegetable Biryani</td>
			<td>
				<select name = "R3">
					<option value = "0">0</option>
					<option value = "1 Vegetable Biryani">1</option>
					<option value = "2 Vegetable Biryani">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Soya Sabz Biryani</td>
			<td>
				<select name = "R4">
					<option value = "0">0</option>
					<option value = "1 Soya Sabz Biryani">1</option>
					<option value = "2 Soya Sabz Biryani">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
					<td>Dehradun Pulao</td>
			<td>
				<select name = "R5">
					<option value = "0">0</option>
					<option value = "1 Dehradun Pulao">1</option>
					<option value = "2 Dehradun Pulao">2</option>
				</select>
			</td>
		

	</tr>
	<tr>
		
			<td>Peas Pulao</td>
			<td>
				<select name = "R6">
					<option value = "0">0</option>
					<option value = "1 Peas Pulao">1</option>
					<option value = "2 Peas Pulao">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Vegetable Pulao</td>
			<td>
				<select name = "R7">
					<option value = "0">0</option>
					<option value = "1 Vegetable Pulao">1</option>
					<option value = "2 Vegetable Pulao">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Jeera Rice</td>
			<td>
				<select name = "R8">
					<option value = "0">0</option>
					<option value = "1 Jeera Rice">1</option>
					<option value = "2 Jeera Rice">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Plain Rice</td>
			<td>
				<select name = "R9">
					<option value = "0">0</option>
					<option value = "1 Plain Rice">1</option>
					<option value = "2 Plain Rice">2</option>
				</select>
			</td>
		
	</tr>
</table>
<table>
<h3>Breads</h3>

	<tr>
			<td>Roti</td>
			<td>
				<select name = "B1">
					<option value = "0">0</option>
					<option value = "1 Roti">1</option>
					<option value = "2 Roti">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
			<td>Naan</td>
			<td>
				<select name = "B2">
					<option value = "0">0</option>
					<option value = "1 Naan">1</option>
					<option value = "2 Naan">2</option>
				</select>
			</td>
			</tr>
	<tr>
		<td>Butter Roti</td>
			<td>
				<select name = "B3">
					<option value = "0">0</option>
					<option value = "1 Butter Roti">1</option>
					<option value = "2 Butter Roti">2</option>
				</select>
			</td>
		</tr>
	<tr>

			<td>Butter Naan</td>
			<td>
				<select name = "B4">
					<option value = "0">0</option>
					<option value = "1 Butter Naan">1</option>
					<option value = "2 Butter Naan">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Masala Naan</td>
			<td>
				<select name = "B5">
					<option value = "0">0</option>
					<option value = "1 Masala Naan">1</option>
					<option value = "2 Masal Naan">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Garlic Naan</td>
			<td>
				<select name = "B6">
					<option value = "0">0</option>
					<option value = "1 Garlic Naan">1</option>
					<option value = "2 Garlic Naan">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Kulcha</td>
			<td>
				<select name = "B7">
					<option value = "0">0</option>
					<option value = "1 Kulcha">1</option>
					<option value = "2 kulcha">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Masala Kulcah</td>
			<td>
				<select name = "B8">
					<option value = "0">0</option>
					<option value = "1 Masala Kulcha">1</option>
					<option value = "2 Masala Kulcha">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Cheese Lacha Paratha</td>
			<td>
				<select name ="B9">
					<option value = "0">0</option>
					<option value = "1 Cheese Lacha Paratha">1</option>
					<option value = "2 Cheese LAcha Paratha">2</option>
				</select>
			</td>
	</tr>

<!-- <h3>Chinese</h3>
	<li>Baby Corn Chilli</li>
	<li>Chowemin</li>
	<li>Veg Manchurian</li>
	<li>Veg Chilli</li>
	<li>Chinese Combo</li>
	<li>Mushroom Chilli</li>
 -->
</table>
<table>
<h3>Deserts</h3>
	<tr>
		
			<td>Tuty Fruity</td>
			<td>
				<select name = "D1">
					<option value = "0">0</option>
					<option value = "1 Tuty Fruity">1</option>
					<option value = "2 Tuty Fruity">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Hot Choclate Fudge</td>
			<td>
				<select name = "D2">
					<option value = "0">0</option>
					<option value = "1 Hot Choclate Fudge">1</option>
					<option value = "2 Hot Choclate Fudge">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
		
			<td>Strawberry</td>
			<td>
				<select name= "D3">
					<option value = "0">0</option>
					<option value = "1 Strawberry">1</option>
					<option value = "2 Strawberry">2</option>
				</select>
			</td>
		
	</tr>
	<tr>
			<td>Vanila</td>
			<td>
				<select name = "D4">
					<option value = "0">0</option>
					<option value = "1 Vanila">1</option>
					<option value = "2 Vanila">2</option>
				</select>
			</td>
			</tr>
	<tr>
		<td>Choclate</td>
			<td>
				<select name = "D5">
					<option value = "0">0</option>
					<option value = "1 Choclate">1</option>
					<option value = "2 Choclate">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Kulfi</td>
			<td>
				<select name = "D6">
					<option value = "0">0</option>
					<option value = "1 kulfi">1</option>
					<option value = "2 Kulfi">2</option>
				</select>
			</td>
		</tr>
	<tr>
		<td>Gulab Jamun</td>
			<td>
				<select name = "D7">
					<option value = "0">0</option>
					<option value = "1 Gulab Jamun">1</option>
					<option value = "2 Gulab Jamun">2</option>
				</select>
			</td>
		</tr>
	</table>
	<br>
	<input type="submit" name= "submit" value  ="Add to Cart">
</body>
</html>
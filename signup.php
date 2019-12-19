<?php
$conn=new mysqli("localhost","root","","cart");
$name = $_POST["name"];
$email = $_POST["email"];
$phone_no = $_POST["phone"];
$password = $_POST["password"];
$sql = "INSERT INTO customer Values('$name','$email',$phone_no,'$password',0)";
if ($conn->query($sql)===TRUE)
{
	echo "New Record created Successfully";
	header("Location:login2.html");
}
else 
{
	echo "Problem".$sql."<br>".$conn->error;
}
$conn->close();
?>
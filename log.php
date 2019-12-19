<?php
$conn=new mysqli("localhost","root","","cart");
$phono = $_POST["phone_no"];
$password = $_POST["password"];
$sql = "Select Name from customer
	where Phone_no = $phono";
$result = $conn->query($sql);	
if($result->num_rows > 0)
	{
		$sql = "Select password from customer 
		where Phone_no = $phono AND password = $password";
		$pass = $conn->query($sql);
		if( $pass ->num_rows > 0)
		{
			
			$sql2="update customer set Status=1 where Phone_no=$phono";
			$result2 = $conn->query($sql2);	
			header("Location: home.php");
			exit;
		}
		else 
		{
			echo  "Your password is Wrong";
			header("refresh:2;url=login2.html");
			exit;
		}
	}
	else 
		{
			echo "Sorry You Don't have an account";
			header("refresh:2;url = signup.html");
			exit;
		} 
?>
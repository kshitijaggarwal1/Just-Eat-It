
<?php
$conn=new mysqli("localhost","root","","cart");
$sql2="update customer set Status=0 ;";
$conn->query($sql2);
if ($conn->query($sql2)===TRUE)
{
	header("Location:home.php");
}
else 
{
	echo "Problem".$sql2."<br>".$conn->error;
}
$conn->close();
?>
<?php
$conn = new mysqli("localhost", "root", "", "cart");

$name = $_POST["name"];
$phone = $_POST["phone"];
$persons=$_POST["persons"];
$date = $_POST["date"];
$time=$_POST["time"];
$location = $_POST["location"];
$sql = "Select sum(persons) from reservation";
$run = $conn->query($sql);
$result=mysqli_fetch_assoc($run);
$table= 500 - $result['sum(persons)']-$persons;
$sql="INSERT INTO RESERVATION (nameop,phone,persons,dateor,timeor,locationor,table_left)
         values(\"$name\", \"$phone\",\"$persons\", \"$date\",\"$time\",\"$location\",\"$table\")";
if ($conn->query($sql) === TRUE) 
{
    header("Location:thankyou.php");
    exit;
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php
$conn = new mysqli("localhost", "root", "", "assignment");

$name = $_POST["name"];
$email = $_POST["email"];
$comm=$_POST["comment"];
$gender = $_POST["gender"];

$query = "INSERT INTO abc (name, email, comment, gender) VALUES (\"$name\", \"$email\",\"$comm\", \"$gender\";)";
if ($conn->query($query) === TRUE) 
{
    echo "New record created successfully";
}
 else 
{
    echo "Error: " . $query . "<br>" . $conn->error;
}
?>
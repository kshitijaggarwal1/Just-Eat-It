<?php
$conn=new mysqli("localhost","root","","my_database");
$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];
$gender=$_POST["gender"];
$sql = "INSERT INTO fill values(\"$name\",\"$email\",\"$comment\",\"$gender\");";
if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br>Value Inserted into database";
echo "<br>Your name is ".$name;
echo "<br>Your email Id is ".$email;
echo "<br>Your gender is ".$gender;
echo "Thank You for Your Reviews.";
?>
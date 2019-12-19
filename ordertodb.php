<?php
$conn=new mysqli("localhost","root","","cart");

$phone_no = $_POST["mobileNumber"];
$orderAddress = $_POST["orderAddress"];
$totalval=0;
$str="";
//print_r($_POST); 
if(isset($_POST['added'])) {
 $name = $_POST['added'];

    foreach ($name as $color){
        $str.=$color.",";
        if($color==1)
            $totalval+=300;

        if($color==2)
            $totalval+=250;

        if($color==3)
            $totalval+=250;
            
        if($color==4)
            $totalval+=500;
        
        if($color==5)
            $totalval+=420;
            
        if($color==6)
            $totalval+=120;
        
        if($color==7)
            $totalval+=180;

        if($color==8)
            $totalval+=240;
            
        if($color==9)
            $totalval+=310;
        
        if($color==10)
            $totalval+=250;
            
        if($color==11)
            $totalval+=300;

        if($color==12)
            $totalval+=350;
            
        if($color==13)
            $totalval+=400;
        
        if($color==14)
            $totalval+=300;
            
        if($color==15)
            $totalval+=280;
        
        if($color==16)
            $totalval+=400;
    }}

$sql = "INSERT INTO foodorder Values('$phone_no','$str' ,'$orderAddress', '$totalval' )";
if ($conn->query($sql)===TRUE)
{
    echo "Order Placed Successfully";
	header("Location:home.php");
}
else 
{
	echo "Problem".$sql."<br>".$conn->error;
}
$conn->close();
?>
   
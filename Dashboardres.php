<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
<body>
	<h1 class="heading">Dashboard</h1><br>
	<table border="0" cellspacing="20" name="whole">

		<tr>
			<td class="leftSide" rowspan="12"> 
				<button name ="home"><i class="fas fa-home"> Home</i></button><br><br>
				<a href="sabkaOrder.php"><button name ="orders" ><i class="fas fa-utensils">  Orders</i></button></a><br><br>
			</td>
			<td class="bigger">
				<p class="headingCol"> Total Booked Seats
					<i class="fas fa-rupee-sign fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="totalSales">
                    <label>
                    <?php 
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select COUNT(nameop) from reservation";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        $result=mysqli_fetch_assoc($run);
                        if($result)
                        {
                            echo $result['COUNT(nameop)'];
                        }

                    }
                    

                    ?>
                    </label>
				</p>

			</td>
			<td class="bigger">
				<p class="headingCol"> Most Valuable Customer 
					<i class="fas fa-chart-line fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="totalOrders">
                <label> 
                <?php 
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select count(nameop) from foodorder";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        $result=mysqli_fetch_assoc($run);
                        if($result)
                        {
                            echo $result['count(value)'];
                        }

                    }
                    ?>
                </label>
				</p>

			</td>
			<td class="bigger">
				<p class="headingCol"> Total Expenditure 
					<i class="fas fa-rupee-sign fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="totalExpenditure">
                <label>  
                <?php 
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select SUM(value) from foodorder";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        $result=mysqli_fetch_assoc($run);
                        if($result)
                        {
                            echo $result['SUM(value)']*0.6;
                        }

                    }
                    

                    ?>
                </label>
				</p>
			</td>
			
		</tr>

		<tr>
			<td class="bigger">
				<p class="headingCol"> Total Profit 
					<i class="fas fa-rupee-sign fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="totalProfit">
                <label>
                <?php 
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select SUM(value) from foodorder";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        $result=mysqli_fetch_assoc($run);
                        if($result)
                        {
                            echo $result['SUM(value)']*0.4;
                        }

                    }
                    

                    ?>
                </label>
				</p>

			</td>
			<td class="bigger">
				<p class="headingCol"> Average Order Values
					<i class="fas fa-people-carry fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
					<label>
                    <?php 
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select avg(value) from foodorder";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        $result=mysqli_fetch_assoc($run);
                        if($result)
                        {
                            echo $result['avg(value)'];
                        }

                    }
                    

                    ?>
					</label>
			</td>
			<td class="bigger">
				<p class="headingCol"> Highest Paying Customers 
					<i class="far fa-window-restore fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<label>
                <?php 
                    
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select PhoneNO from foodorder order by value desc limit 5 ";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        
                        while($result=mysqli_fetch_assoc($run))
                        {
                            
                            echo $result['PhoneNO'];
                            echo ",";
                        }

                    }
                    
                    ?>
				</label>
			</td>
		</tr>

		<tr>
			<td class="bigger">
				<p class="headingCol"> Total Customers 
					<i class="fas fa-user-friends fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="totalCustomers">
                    <label>
                    <?php 
                    $conn=new mysqli("localhost","root","","cart");
                    $sql = "select count(name) from customer";
                    $run=mysqli_query($conn,$sql);
                    if($run)
                    {
                        $result=mysqli_fetch_assoc($run);
                        if($result)
                        {
                            echo $result['count(name)'];
                        }

                    }
                    ?>
                    </label>
				</p>

			</td>
			<td class="bigger">
				<p class="headingCol"> Timings
					<i class="fas fa-business-time fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="timings"><label> 10:00AM - 11:PM </label>
				</p>

			</td>
			<td class="bigger">
				<p class="headingCol"> Offers
					<i class="fas fa-gift fa-xs"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<br>
				<p class="offers"><label> Currently Unavailable </label>
				</p>
			</td>
		
		</tr>
		
	</table>

	<p class="bottomFooter">All Rights Reserved <i class="far fa-copyright fa-sm"></i></p>

</body>
</html>


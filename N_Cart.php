<?php 
include('connection.php');
session_start();
if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];
}

else
{
	$id = "";
}
 ?>
<!DOCTYPE HTML>
<html lang="zxx">
<head>
<title>Earn Casho</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href="css/bootstrap_1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style_1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all_1.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>

<!-- cart -->
  
</head>
<body>
	<!--header-->
		<?php include("header_log.php"); ?>
				
				
				
				<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['username']))
	{ 
	$userid = $_SESSION['user_id']; 
	$User = $_SESSION['username']; 
	}
else 
{ 
	$userid = "";
	$User = ""; 
}

//echo $userid; 
//echo $User; 


?>
<?php
		$totalquantity = 0;
				$subtotal = 0;
				$totalamount = 0;
				
		$sql="select * from tbl_cart where user_id=$id  and checkout=''"; 
		//echo $sql;
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			?>
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>art Details
			</h3>
			<div class="checkout-right">
				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SR No.</th>
								<th>Product Id</th>
								<th>Product</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th colspan="2">Update Qty</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
<?php
			while($row = $result->fetch_assoc()) 
			{					
				$i=1;
				$price=$row['price'];
				$qty=$row['quantity'];
				$img=$row['img'];
				$product_id=$row['product_id'];
				$amount = ($qty * $price);
				
				$totalquantity = $totalquantity + $qty;
				
				$subtotal = $subtotal + $amount;
				
				$delivery=300;
				
				$totalamount = ($subtotal + $delivery);
									
		?>
	
	
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $product_id;?></td>
								<td>
										<img src="admin/uploads/<?php echo $row['img'];?>"  width="50px"height="60px" class="img-responsive">
								</td>
								
								<td><?php echo $row['product_name'];?></td>
								<td><?php echo $price;?></td>
								<td><?php echo $qty;?></td>
								<td><?php echo $amount;?></td>
								<td>
									<form method="post" action="updateqty.php">
										<input type="hidden" size="4" name="txt" value="<?php echo $product_id; ?>">
										<input type="submit" value="+1">
									</form>
								</td>
								<td>
									<form method="post" action="removeqty.php">
										<input type="hidden" size="4" name="txt" value="<?php echo $product_id; ?>">
										<input type="submit" value="-1" name="submit" />
									</form>
								</td>
								<td>
									<div class="rem">
										<a href="remove_cart.php?id=<?php echo $product_id; ?>"><div class="close1"> </div></a>
									</div>
								</td>
							</tr>
							
						
						<?php  
	$i++;
	
	}
	?></tbody>
					</table>
					<br><br>
					<table border="1" align="center" width="300px">
						<tr align="center">
							<td width="150px"><b>Total Quantity</b>
							</td><td width="150px"><?php echo $totalquantity;?></td>
						</tr>
						
						<tr align="center">
							<td><b>Sub Total</b></td><td><?php echo $subtotal;?></td>
						</tr>
						
						<tr align="center">
							<td><b>Delivery Cost</b></td><td><?php echo $delivery;?></td>
						</tr>
						<tr align="center">
							<td><b>Total Amount</b></td><td><?php echo $totalamount;?></td>
						</tr>
					</table><br><br>
					<center>
					<a href="product_show.php">
							<Button class="submit check_out btn" name="continue">Continue Shopping</Button>
						</a>
				<a href="checkout.php">
							<Button class="submit check_out btn"  name="proced">Proceed to checkout</Button>
						</a>
				</center>
<?php	} 
		
		
		
		else
		{ ?><br>
	<center><h3>Sorry Your Cart is Empty!!!!</h3>
		<img src="images/empty.png" height="400" width="600" ></center><br>
	<?php	
		}
		?>

						
				</div>
			</div>
	</div>
				
				
				
				
				
				
				
				
				
				
				
				
							
						<?php include ("footer.php"); ?>
				<!--copy-->
				<?php include ("footer2.php"); ?>
				<!------>
				<!--copy-->
				

</body>
</html>
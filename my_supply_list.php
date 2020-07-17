<?php 

session_start();
include_once('connection.php');
    require 'check_if_added.php';

// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['supplier_id']))
{
	$id = $_SESSION['supplier_id'];
	
	
			$sql="SELECT * FROM tbl_supplier where supplier_id = '$id' ";
			
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					//$id = $row['id'];
					$name=$row['supplier_fname'];
					$lname=$row['supplier_lname'];
					$email =$row['email'];
					$contact =$row['mobile'];
					//$bdate =$row['bdate'];
					//$city = $row['city'];
					$address = $row['address'];
					//$pincode=$row['pincode'];
				}
			}
			$sqlt="select user_id,username,product_id,product_name,price,qty,total,mobile_no,status,payment_status,shipping,date from tbl_order";		
							
//$sql="select tbl_order.date,tbl_order.pid,tblorder.status,tblorder.pname,tblorder.price,product.type,product.flavour,product.weight from tblorder inner join product on tblorder.pid=product.id  where tblorder.status='Confirm' order by tblorder.order_id";		
								$resultv=$con->query($sqlt);
								
								if ($resultv->num_rows > 0) 
								{
									while($row = $resultv->fetch_assoc()) 
									{
										
									}
									
								}
			else
			{
				echo" Error:".$con->error;
			}
	
	
	
}

else
{
	$user_id = "";
}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fashion World</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
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
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
</head>
<body>
	<!--header-->
		<?php
// include('header.php');

if (isset($_SESSION['supplier_id']) && isset($_SESSION['supplier_fname']))
	{ 
	$userid = $_SESSION['supplier_id']; 
	$User = $_SESSION['supplier_fname']; 
	}
else 
{ 
	$userid = "";
	$User = ""; 
}

//echo $userid; 
//echo $User; 

if($userid!= "")
{
	include("header_supplier.php");
}
else
{
	include("header.php");
	
}

?>

	<!--header-->
	
			<?php include("header1.php"); ?>
			
		<!--header-->
		<!--banner-->
		
		<!--header-->
		<!--banner-->
		
		
		
		
		
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Supply product List</span></h3>
				
			</div>
		</div>
		<!----------Body----->
		 <br>
<div class="container">
				<h4><a href="index.php">Home</a>
				
			/ <a href="bank_detail_suppplier.php">My Bank Detail</a> 
				
				
			</div>
		
	<br>
	<div class="address py-5">
		<div class="container py-xl-5 py-lg-3">
		<br><br>
			
	<div class="row address-row">
	<br><br>	
				<div class="col-lg-3 address-right main-agileits"> 
				
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4 class="font-weight-bold mb-3">Hello,</h4>
						<h6><b><?php echo $name; ?></b></h6>
						<p><?php echo $email; ?></p>
					</div>
					 
			   
				<br>
					<div class="address-info wow fadeInRight animated " data-wow-delay=".7s">
						<h6>
							<b>
								

							</b>
						</h6><br>
						<h6><b><i class="fa fa-user-circle" style="font-size:20px;color:red"></i><a href="supplier_acc.php?id=<?php echo $id ;?> "> My Profile</a></b></h6><br>
<h6><b><i class="fa fa-check-square" style="font-size:20px;color:red"></i><a href="my_supply_list.php?id=<?php echo $id ;?>">My Supply List</a></b></h6><br>
												<h6><b><i class="fa fa-check-square" style="font-size:20px;color:red"></i><a href="addproduct_supplier.php?id=<?php echo $id ;?>">Add Product</a></b></h6><br>
						<h6><b><i class="fa fa-check-square" style="font-size:20px;color:red"></i><a href="supplier_Changepassword.php?id=<?php echo $id ;?>"> Change Password</a></b></h6><br>
						<h6><b><i class="fa fa-share-square" style="font-size:20px;color:red"></i><a href="logout.php"> Logout</a></b></h6>
					</div>
						
				</div>
			
				
				<div class="col-sm-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
<?php
   
    require 'connection.php';
    $id = $_SESSION['supplier_id'];
	//$id = $_GET['supplier_id'];
		if(isset($id))
{	
			//echo $id; 
		
			?>
		<h3 align="center">SUPPLY DETAILS</h3><hr>
		<table border="2" align="center">
			<tr align="center">
				<th>#</th>
				<th>&nbsp;Supplier ID&nbsp;</th>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th>Product Name</th>
				<th>Category Name</th>
				<th>Subcategory Name</th>					
				<th>&nbsp;&nbsp;Quantity&nbsp;&nbsp;</th>
				<th>Price</th>
				<th>&nbsp;&nbsp;Total&nbsp;&nbsp;</th>
				<th>Email Id&nbsp;&nbsp;</th>
				
			</tr>
			<?php 
$sql="select * from tbl_supplier_product where supplier_id=$id";		
								$result=$con->query($sql);
								$i=00; 
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc()) 
									{ $i++; 
								
							
					?>		
			<tr align="center"> 
				<td><?php echo $i; ?></td>	
				<td><?php echo $row['supplier_id']; ?></td>
				<td><?php echo $row['Supplier_Name']; ?></td>
				<td><?php echo $row['pname']; ?></td>
				<td><?php echo $row['category_name']; ?></td>
				<td><?php echo $row['sub_cat']; ?></td>
				<td><?php echo $row['Quantity']; ?></td>
				<td><?php echo $row['Price']; ?></td>
				<td><?php echo $row["Total"];?></td>
				<td><?php echo $row['Email_ID'];?>&nbsp;&nbsp;</td>
				
			</tr>
			<?php	}}else{ echo "<img src='images/empty.png' width='100%'>"; 	
				//echo"Error".$con->error;
									}?>
		</table><br><br><br><br>
		<?php
}
?>
</div>
				</div>
	</div><br>
	
	</div>
</div>
	</div><br>
	
	</div>
</div>

		
		
				<!---footer--->
					<?php include ("footer.php"); ?>
				<!--copy-->
				<?php include ("footer2.php"); ?>
				<!--copy-->
</body>
</html>
<!--
-->
<?php session_start();
include_once('connection.php');
    require 'check_if_added.php';


 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fashion World</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
				<?php include("header1.php"); ?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>Products</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<div class="products-agileinfo">
						<h2 class="tittle">Women's Wear</h2>
					<div class="container">
						<div class="product-agileinfo-grids w3l">
							<div class="col-md-3 product-agileinfo-grid">
								<div class="categories">
									<h3>Categories</h3>
									<ul class="tree-list-pad">
												<li><input type="checkbox"  id="item-0-2" /><h1><a href="Colthing.php">Colths</a></h1>
												
													<!---<ul>
														<li><a href="products.html">Shirts</a></li>
														<li><a href="products.html">Caps</a></li>
														<li><a href="products.html">Shoes</a></li>
														<li><a href="products.html">Pants</a></li>
														<li><a href="products.html">SunGlasses</a></li>
														<li><a href="products.html">Trousers</a></li>
													</ul>----->
												</li>
												<li><input type="checkbox"  id="item-0-2" /><h1><a href="Wallet.php">Wallet</a></h1>
												<li><input type="checkbox"  id="item-0-2" /><h1><a href="Shoes.php">Shoes</a></h1>
												<li><input type="checkbox"  id="item-0-2" /><h1><a href="Watch.php">Watches</a></h1>
												
									</ul>
								</div>
								
								<div class="top-rates">
									<h3>Top Rates products</h3>


									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Lorem Brand</a></h6>
											<p><del>700.00</del> <em class="item_price">450.00</em></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Suit</a></h6>
											<p><em class="item_price">4000.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
								</div>

								<div class="cat-img">
									<img class="img-responsive " src="images/45.jpg" alt="">
								</div>
							</div>
							<div class="col-md-9 product-agileinfon-grid1 w3l">
								
								 <br>
								<!---------------------->
								<div class="clearfix"></div>	
								<div class="container">    
  <div class="row">
	<?php 
	$sql="select * from tbl_product where category='Womens Colthing'"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$id=$row["id"];
					?>
					<div class="col-sm-4"> 
					  <div class="panel panel-danger">
						<div class="panel-heading"><br>
						<img src="admin/uploads/<?php echo $row['photo']; ?>"class="img" height="400" width="300" alt="Image">
							
						</div>
						<div class="panel-body">
							<?php echo $row["name"]; ?>
						</div>
						<div class="panel-footer">
							<b>Price:  </b> <strike><?php echo $row['selling'];?></strike><br>
							<b>Discount:  </b><font color="red">(<?php echo $row['discount'].'%';?>)</font><br>
							<b>Selling Price:  </b><?php echo $row['after_discount'];?><br>
							<b>Stock:  </b><?php echo $row['stock'];?><br>
							<?php //echo "Details : ".$row['description']?><br>
							

							<?php 
							if(!isset($_SESSION['user_id']))
							{  ?>
                                      <p><a href="index.php?id=<?php echo $id; ?>"role="button" class="btn btn-primary btn-block">Buy Now<br><small>You Must Login First </small></a></p>
                                        <?php
										
                              }
                                        else{
												if(check_if_added_to_cart($row["id"]))
												{
													echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
												}
												else
												{
													?>
													<p><a href="product_info.php?pid=<?php Echo $row["id"];?>" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
													<?php
												}
                                        }
                                        ?>
							<br>
						</div>
					  </div>
					</div>
					<?php 
			}
		}
		else
			{
				echo "0 results";
			} ?><br>

</div>
</div><br><br>

								
								
								
								
								
								
								
								
								
								
								<!------------->
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		<!--content-->
		<!---footer--->
					
						<?php include ("footer.php"); ?>
				<!--copy-->
				<?php include ("footer2.php"); ?>
				<!------>
				<!--copy-->
				

</body>
</html>
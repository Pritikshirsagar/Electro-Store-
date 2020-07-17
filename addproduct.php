<!DOCTYPE HTML>
<html>
<head>
<title>Earn Casho</title>
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

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
					</div>
					<div class="top-right">
					<ul>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="registered.php"> Create Account </a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php include("header1.php")?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Add Product</span></h3>
			</div>
		</div>
		<!----------Body----->
		 
		<div class="container">
				<h4><a href="index.php">Home</a>
				/ <a href="addproduct.php">Add Product </a>
				/ <a href="change_password1.php">Change Password</a> 
				/ <a href="logout.php">Logout</a> 
				
			</div>
			</br></br>
	
<!-----------body---------->
<div class="container">
			
		
			<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
			<div class="panel panel-info" >
			<div class="panel-heading"><b>Add New Product</b></div>
			<div class="panel-body">
			
			<table>
			
			<form class="form-horizontal" action="product_db.php" method="post" enctype="multipart/form-data">
			
					  <h3 align="center"><b>Add Product</b></h3>
					
					 

					<div class="row">
					  <label class="col-md-4 control-label" for="product_name">Product Name</label>  
					  <div class="col-md-6">
					  <input id="product_name" name="product_name" placeholder="Product Name" class="form-control input-md" type="text" required>
						
					  </div>
					</div><br>

					<!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_type">Category</label>
					  <div class="col-md-6">
						<select id="product_type" name="product_type" class="form-control">
							<option value="select">----Select----</option>
							
						</select>
					  </div>
					 
					</div><br>
					 
					 <!-- Select Basic -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_subcategorie">Sub-Category</label>
					  <div class="col-md-6">
						<select id="product_subcategorie" name="product_subcategorie" class="form-control">
							
							
										
										
									</select>
									</td>
									</tr>

						</select>
					  </div>
					 
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="price">Product Selling Price</label>  
					  <div class="col-md-6">
					  <input id="price" name="price" placeholder="Product Price" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount">Discount % </label>  
					  <div class="col-md-6">
					  <input id="discount" name="discount" placeholder="Discount" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount_price">After Discount Price</label>  
					  <div class="col-md-6">
					  <input id="discount_price" name="discount_price" placeholder="After Discount price" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="discount_price">Stock</label>  
					  <div class="col-md-6">
					  <input id="stock" name="stock" placeholder="Enter Stock" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Textarea -->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_description">Product Description</label>
					  <div class="col-md-6">                     
						<textarea class="form-control" id="product_description" name="product_description" required></textarea>
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="shipping">Shipping Charges</label>  
					  <div class="col-md-6">
					  <input id="shipping" name="shipping" placeholder="Shipping Charges" class="form-control input-md" required type="number">
						
					  </div>
					</div><br>

					<!-- Text input-->
					<div class="row">
					  <label class="col-md-4 control-label" for="product_availability">Product Availability</label>  
					  <div class="col-md-6">
					  
						<select id="product_availability" name="product_availability" class="form-control input-md"required type="text">
							<option value="select">----Select----</option>
							<option value="yes">Yes</option>
							<option value="no">No</option>
						
						</select>
					  </div>
					</div><br>

					 <!-- File Button --> 
					<div class="row">
					  <label class="col-md-4 control-label" for="filebutton">Photo</label>
					  <div class="col-md-6">
						<input id="filebutton" name="userfile" class="input-file" type="file" required>
					  </div>
					</div><br>




					<!-- Button -->
					<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-6">
						<button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
					  </div>
					</div><br>
			</form>
			</table>
            </div>
			</div>
			</div><br><br>
			</div>
	</div>	
	
		
		
				<!---footer--->
					<?php include("footer.php")?>
					<!---footer--->
					<!--copy-->
					<?php include("footer2.php")?>
				<!--copy-->
</body>
</html>
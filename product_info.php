<!--
-->

<?php 
   
	include_once('connection.php');
	 require 'check_if_added.php';


session_start();
// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['user_id']))
{
	$U_id = $_SESSION['user_id'];
}

else
{
	$U_id = "";
}
//echo "User id=".$U_id;

 
$pid=$_GET['pid'];
//echo "Product id=".$pid;
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Earn Casho</title>
<!--css-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
<script>
  $(document).ready(function() {
     $('.whatsapp').on("click", function(e) {
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            var article = $(this).attr("data-text");
            var weburl = $(this).attr("data-link");
            var whats_app_message = encodeURIComponent(document.URL);
            var whatsapp_url = "whatsapp://send?text="+whats_app_message;
            window.location.href= whatsapp_url;
        }else{
             alert('You Are Not On A Mobile Device. Please Use This Button To Share On Mobile');
        }
     });
  });
</script>
 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  
		 <style>
			.monospaced { font-family: 'Ubuntu Mono', monospaced ; }
			.add-to-cart .btn-qty { width: 52px; height: 46px;	}
			.add-to-cart .btn { border-radius: 0; }
			
			.floatt{
			position:fixed;
				width:60px;
				height:60px;
				bottom:90px;
				right:0px;
				background-color:#25d366;
				color:#FFF;
				border-radius:50px;
				text-align;center;
				font-size:30px;
				box-shadow;2px 2px 3px #999;
				z-index:100;
				
				.img-box{
        display: inline-block;
        text-align: center;
        margin: 0 15px;
		</style>
</head>
<body>

	<!--header-->
		<?php include("header_log.php"); ?>
				<?php include("header1.php"); ?>
		<!--header-->
		
		
		<!--banner-->
		
		<a href="https://wa.me/917262955643?text=hi,Cheout this Fashion Worldld?id=<?php 
		$sql="select * from tbl_product where id=$pid"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				
		echo $row['id'];
		echo $row['description'];
		echo  $row['photo'];}}?>"> 
		
	<img src="images/whatsapp.png" class="floatt"width=10% height=10%>
		
		<i class="fa fa-whatsapp my-float"></i>
	<?php
	$sql="select * from tbl_product where id=$pid"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				
			
	?>
	<div class="container" id="product-section">
	<br><br><br>
		  <div class="row">
			   <div class="col-md-6">	
					<img src="admin/uploads/<?php echo $row['photo']; ?>"class="image-responsive" height="400" width="500" alt="Kodak Brownie Flash B Camera" >				
			   </div>
			   <div class="col-md-6">
					   <div class="row">
						  <div class="col-md-12">
						   <h1><?php echo $row["name"]; ?></h1>
						 </div>
						 <div class="col-md-12">
						  <span class="label label-primary"><?php echo $row["category"]; ?></span>
						    
						  <span class="monospaced"><?php echo $row["subcategory"]; ?></span>
						 </div>
					   </div>
						<!---<div class="row">
							 <div class="col-md-12">
							  <p class="description">
							   Classic film camera. Uses 620 roll film.
							   Has a 2&frac14; x 3&frac14; inch image size.
							  </p>
							 </div>
						</div>-->
						<br>
						<div class="row">
							 <div class="col-md-3">
								  <span class="sr-only">Four out of Five Stars</span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								  <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
								  <span class="label label-success">4</span>
							 </div>
						</div>
					<!--	<div class="row">
							 <div class="col-md-3">
								  <span class="monospaced">Write a Review</span>
							 </div>
						</div>-->
						<div class="row">
							 <div class="col-md-12 bottom-rule">
								<h2 class="product-price">Price. Rs.<?php echo $row["after_discount"]; ?>/-</h2>
							 </div>
					
							 <div class="col-md-12 bottom-rule">
								<h4 class="product-price">
										<strike><?php echo $row["selling"]; ?></strike>/-
										<font color="red">(<?php echo $row["discount"]; ?>)% Off</font>
								</h4>
							 </div>
						</div>
						<!-- end row -->

				<!--	<div class="row add-to-cart">
						 <div class="col-md-5 product-qty">
							  <span class="btn btn-default btn-lg btn-qty">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							  </span>
							  
							   <input class="btn btn-default btn-lg btn-qty" value="1" />
							   <span class="btn btn-default btn-lg btn-qty">
									<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
							  </span>
						 </div>
					</div><br>--->
					
					<div class="row add-to-cart">
						  <div class="col-md-3 product-qty">
						  <form action="cart_add.php?pid=<?php echo $pid; ?>" method="post">
							Quantity : <input type="text" class="product-quantity" name="qty" value="1" size="2" />
						 
						 </div>
					</div><br>
					
					<div class="row">
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
						<div class="col-md-12 bottom-rule top-10"></div>
					</div><!-- end row -->
					<div class="row">
						<div class="col-md-5 product-qty">
							  <button class="btn btn-lg btn-brand btn-full-width">
							  Add to Cart 
							  </button>
						</div><!-- end row -->
						 </form>
					</div>
					

					 
			</div>
	</div>
	<div><a href="https://wa.me/917262955643?source">
	
	
		
	<?php
					$sql="select * from tbl_product where id=$pid"; 
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$images=$row['photo'];
				 echo '<p><a href="download.php?file=' . urlencode($images) . '">Download</a></p>';
			}
		}			
						
		
    ?>
</div><br>
<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#description" aria-controls="description" role="tab" data-toggle="tab" >Description</a>
				<?php echo $row["description"]; ?>
			</li>
			
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			 <div role="tabpanel" class="tab-pane active" id="description">
				<div role="tabpanel" class="tab-pane active" id="description">
					 <p class="top-10">
						<?php echo $row["description"]; ?>
					 </p>
					 <p>
					 
					 </p>
				</div>
			 </div>
			
			 <div role="tabpanel" class="tab-pane" id="reviews">
			 
			 <?php $sql="select * from tbl_review where pid=$pid"; 
		
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{ ?>
				
				<br><i class="fa fa-user-circle" style="font-size:30px;color:red"></i>
			<?php	echo $row['username']."<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?>
				
				<table border="2" bgcolor="pink">
				<?php echo $row['description'];
				?></table>
				<?php
			}
		}
		?>		 
			 <form method="Post" action="review_db.php?pid=<?php echo  $pid;?>">
			 <h2>Review</h2>
			  <div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Comment</label>
						<textarea name="message" class="form-control" placeholder="Enter Message" required> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" name="submit" value="Submit">
					</div>

			 </div></form>
		</div>
	</div>
	<?php 
			}
		}
		else
			{
				echo "0 results";
			} ?><br>

		<!--content-->
		<!---footer--->
	
						<?php include ("footer.php"); ?>
				<!--copy-->
				<?php include ("footer2.php"); ?>
				<!------>
				<!--copy-->
			
			
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e86c62d5e5efbad"></script>
			
</body>
</html>
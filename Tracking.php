<?php session_start(); ?>
		
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
	<?php include("header_log.php"); ?> 
		
		<?php include ("header1.php")?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span> Tracking</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
				<div class="modal-header">
					<h2 class="modal-title text-center">Tracking</h2 >
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					
				<form action="track_db.php" method="post">
						<div class="form-group">
							<label class="col-form-label">Enter Order ID</label>
							<input type="text" class="form-control" placeholder="Enter Order-Id " name="track" required>
						</div>
						
						<div class="right-w3l">
							<input type="submit" class="form-control" name="btn_track" value="Track Order">
						</div>
						
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
		<!---footer--->
					<!---footer--->
					<?php include ("footer.php"); ?>
				<!--copy-->
				<?php include ("footer2.php"); ?>
				<!--copy-->
				

</body>
</html>
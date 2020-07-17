
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
		<?php include ("header1.php")?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>Registered</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
	<div class="modal-dialog" role="document">
	<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
						
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="reg_db.php" method="post">
						<div class="form-group">
							<label class="col-form-label">First Name</label>
							<input type="text" class="form-control" placeholder="Enter First Letter Capital eg.Ram " name="fname" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Last Name</label>
							<input type="text" class="form-control" placeholder="Enter  First Letter Capital eg.Joshi" name="lname" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" Enter Email-Id" name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mobile No.</label>
							<input type="text" class="form-control" placeholder="Enter Mobile No" name="mobile"  maxlength="10" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" Enter Address" name="address" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" Enter Password" name="password" id="password1" maxlength="9" required>
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" Enter Confirm Password" name="confirm_password" maxlength="9" id="password2" required>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2" name="check" required>
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="submit" value="Register">
						</div>
						
					</form>
				</div>
			</div>
			</div>
	
	<!--content-->
		<!---footer--->
					<?php include("footer.php")?>
					<?php include("footer2.php")?>
				

</body>
</html>
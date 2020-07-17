<!DOCTYPE HTML>
<html>
<head>
<title>Ern Casho</title>
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
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="registered.html"> Create Account </a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
				<?php include ("header1.php")?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>FAQ</span></h3>
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

		

  
  
    <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
	<center>
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0" height="200"  width="500" align="center" class="tblSaveForm">
               
			   <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
			 
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password" placeholder="Enter current password" name="currentPassword" class="txtField" /><span  id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password"placeholder="Enter New  password" name="newPassword" class="txtField" /><span id="newPassword"class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" placeholder="Enter confirm password"name="confirmPassword" class="txtField" /><span id="confirmPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"  value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>	
		</center>
    </form>
	</div>
	
				<!---footer--->
				
					<!---footer--->
					<?php include ("footer.php")?>
					<!--copy-->
					<?php include ("footer2.php")?>
				<!--copy-->
</body>
</html>
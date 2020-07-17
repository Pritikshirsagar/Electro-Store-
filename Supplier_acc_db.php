<?php 
session_start();
include_once('connection.php');
    require 'check_if_added.php';

// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['supplier_id']))
{
	$user_id = $_SESSION['supplier_id'];
	
	//echo $priti;
			$sql="SELECT * FROM tbl_supplier where supplier_id = '$user_id' ";
			
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
<body>

<?php

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
	<?php include("header1.php"); ?>
			
			
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>My Profile</span></h3>
			</div>
		</div>
		
		<br>
	
				<div class="container">
				<h4>
				
			</div>
		
		<br>
	<br>
	<div class="address py-5">
		<div class="container py-xl-5 py-lg-3">
			
	<div class="row address-row">
				<div class="col-lg-3 address-right main-agileits">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4 class="font-weight-bold mb-3">Hello,</h4>
						<h6><b><?php echo $name; ?></b></h6>
						<p><?php echo $email; ?></p>
					</div>
			   
				<br>
					<div class="address-info wow fadeInRight animated" data-wow-delay=".7s">
						<h6>
							<b>
								<i class="fa fa-cart-arrow-down" style="font-size:20px;color:red"></i>
								<a href="myorder.php?id=<?php echo $id ;?>">My Order</a>
							</b>
						</h6><br>
						<h6><b><i class="fa fa-user-circle" style="font-size:20px;color:red"></i><a href="myaccount.php?id=<?php echo $id ;?> "> My Profile</a></b></h6><br>
						<h6><b><i class="fa fa-check-square" style="font-size:20px;color:red"></i><a href="settings.php?id=<?php echo $id ;?>"> Change Password</a></b></h6><br>
						<h6><b><i class="fa fa-share-square" style="font-size:20px;color:red"></i><a href="logout.php"> Logout</a></b></h6>
					</div>
				</div>
				
	
				<div class="col-sm-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
					
						<form action="confirm_acc_supplier.php?id=<?php echo $user_id; ?> " method="post">
							<center><h2><b>Personal Information<br></h2></center>
							First Name<input id="name" name="name" class="form-control" value="<?php echo $name;?>">
							Last Name<input id="name" name="lname" class="form-control" value="<?php echo $lname;?>">
						Mobile Number<br>
							<input id="contact" name="mobile" class="form-control" value="<?php echo $contact;?>">
						Email<br>
							<input id="email" name="email" class="form-control" value="<?php echo $email;?>">
					
						Permanent Address<br>
							<input id="address" name="address" class="form-control" value="<?php echo $address;?>">

						</b><br>
						<input name="update" type="submit" value="Update">
						
						</form>

						
						
					</div>
				</div>
	</div><br>
	
	</div>
</div>
<?php
include('footer.php');
?>
<script src="js/jquery-1.10.2.js"></script>   
		<script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>


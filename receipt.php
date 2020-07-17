<?php
include('connection.php');
session_start();
$oid=$_GET['oid'];
// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];
}

else
{
	$id = "";
}
//echo $id;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Fashion World</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
		<script Language="Javascript" >function printit()
		{
			if (window.print)
			{
				window.print() ;
			}
			
			else 
			{
				var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
				document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
				WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
			}
		}
		</script>

	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>

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

if($userid!= "")
{
	include("header_log.php");
}
else
{
	include("header.php");
	
}
?>	

				<?php include("header1.php"); ?>
<style type="text/css">
        body {      
            font-family: Verdana;
			
        }
         
        div.invoice {
        border:1px solid #ccc;
        padding:10px;
        height:550pt;
        width:750pt;
		background-color:#e6ffff;
			 
        }
 
        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }
         
        div.invoice-details {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }
         
        div.customer-address {
            border:1px solid #ccc;
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
        }
         
        div.clear-fix {
            clear:both;
            float:none;
			border:1px solid #ccc;
        }
		div.Custo-Add{
			
			
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
			border:1px solid #ccc;
		}
         
        table {
                width:65%;
			    border:1px solid #ccc;
			    padding:10px;
			    text-align:center;
        }
         
        th {
			 border:1px solid #ccc;
            text-align: left;
        }
         
        td {
        }
         
        .text-left {
            text-align:left;
			 border:1px solid #ccc;
        }
         
        .text-center {
            text-align:center;
			
        }
         
        .text-right {
            text-align:right;
        }
         
        </style>
		<br><br>
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Order Confirm Receipt</span>
			</h3>
<div class="container" align="center">

    <div class="invoice">
	<h3 align="center">Fashion World</h3><br>
        <div class="company-address"> 
<center><img src="images/fw1.jpg" height="100" width="100"></center><br>
				<center>Fashion World</center>
            <br>199 gangapuri wai,Satara<br>
				<center> Phone no:-7262956473 	</center>
            
        </div>
     
        <div class="invoice-details">
            Invoice N°: 564     
        </div>
         
        <div class="Custo-Add">
 To:<?php

							$sql="select * from tbl_order where user_id=$userid and order_id=$oid"; 
									
										$result=mysqli_query($con,$sql);
										if(mysqli_num_rows($result)){
										while($row=mysqli_fetch_array($result))
													{		$Sname=$row['ship_name'];
															$lMarks=$row['landmark'];
															$mobile_no=$row['mobile_no'];
															$city=$row['city'];
															$date=$row['date'];
															
										 echo $Sname."&nbsp;"."<br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;".$mobile_no."<br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;".$city.",";
										echo "&nbsp".$lMarks."<br>";	
										echo "&nbsp".$date."<br>";										
										}}

										?>
            <br>
            
        </div>

<?php
$cnt=0;



			$sql="select * from tbl_order where user_id=$userid and order_id=$oid"; 
		//echo $sql;
		$result=$con->query($sql);
		if ($result->num_rows > 0) 
		{
			?>
	<div class="privacy py-sm-3 py-2">
		<div class="container py-sm-3 py-lg-1">
			
			<div class="checkout-right">
				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>#</th>
								<th>Order id</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>quantity</th>
								
								<th>Total+shipping</th>
								<th>Date</th>
							</tr>
						</thead>
					
<?php
	
			while($row = $result->fetch_assoc()) 
			{
				$pname=$row['product_name'];
				
				$cnt++;
				
				?>
				
			<tr align="center"> 
				<td><?php echo $cnt; ?></td>	
				<td><?php echo $row['order_id']; ?></td>
				<td><?php echo $row['product_name']; ?></td>
				<td>Rs.<?php echo $row['price']; ?>.00/-</td>
				<td><?php echo $row['qty']; ?></td>
				
				<td>Rs.<?php echo $row['total']; ?>.00/-</td>
				<td><?php echo $row['date']; ?></td>	
				
			</tr>
		
		</table>
		
		
			</div>
			</div>
		</div><br>
				<h3 align="right">Total Amount : Rs.<?php echo $row['total']; ?> .00/-</h3>
		</div>
<?php
			}
		}
		?>
			<table>
					<tr><b><h2><p  align="center">This is served as your official receipt</p></tr>
					<tr><p  align="center">THANK YOU FOR CHOSING THE Electro_Store</p></b></h2></tr><br><br>		
					<tr>
						<form align="center"> 
							<input type=button value="Print this Page" name="Print" onClick="printit()">
							</form>
					</tr>
			</table>
	</div> 
	</div>   
	<br>
			
	

<?php include("footer.php");  ?>
</body>

</html>
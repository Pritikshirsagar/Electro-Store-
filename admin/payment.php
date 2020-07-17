<?php
    session_start();
    require '../connection.php';
   $order_id=$_GET['id'];
   	 $user_id=$_SESSION['user_id'];
	//echo $order_id;
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Fashion World</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
 
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>

     
<?php include('include/header.php');?>
  <br>
  
  
  
  
  <h3 align="center"> Payment Details</h3><hr>
		<table border="2" align="center">
			<tr align="center">
			
				
				<th>&nbsp;&nbsp;Order id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Reseller Id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Reseller Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Product id&nbsp;&nbsp;</th>					
				<th>&nbsp;&nbsp;Product Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Price(Rs)&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Quantity&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Total&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Mobile No.&nbsp;&nbsp;</th>
			    <th>&nbsp;&nbsp;Ordered on(d/m/y)&nbsp;&nbsp;</th>

				<th>&nbsp;&nbsp;&nbsp;&nbsp;Payment Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;</th>
				
			</tr>
					
			</tr>
			<?php 
			
			//$sql="select a.order_id,a.user_id,a.username,a.payment_status
			$sql="select user_id,username,product_id,product_name,price,qty,total,mobile_no,status,date from tbl_order where order_id=$order_id ";		
							
//$sql="select tbl_order.date,tbl_order.pid,tblorder.status,tblorder.pname,tblorder.price,product.type,product.flavour,product.weight from tblorder inner join product on tblorder.pid=product.id  where tblorder.status='Confirm' order by tblorder.order_id";		
								$result=$con->query($sql);
								$i=0; 
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc()) 
									{ $i++; 
					?>	

       <form action="confirmpamentStatus.php?id=<?php echo $order_id; ?> "method="POST">					
			<tr align="center"> 
				<td><?php echo $i; ?></td>	
				
				<td>u<?php echo $row['user_id']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td>p<?php echo $row['product_id']; ?></td>
				<td><?php echo $row['product_name']; ?></td>
				<td>Rs.<?php echo $row['price']; ?>.00/-</td>
				<td><?php echo $row['qty']; ?></td>
				<td>Rs.<?php echo $row['total']; ?>.00/-</td>
				<td><?php echo $row['mobile_no']; ?></td>
				<td><?php echo $row["date"];?></td>
			    <td>
					 <select id="status" name="payment_status" class="form-control">
							<option value="select">----Select----</option>
							<option value="Payment Done">Payment Done</option>
							<option value="Payment Pending">Payment Pending</option>
							
			
					</select>
				</td>
				<td><input type="submit" name="submit" value="Submit"></td>
				
			</tr>
			</form>
			<?php	}
			}
			else{
				echo "<script>alert('order not status confirmed')</script>";
				
				}?>
				
		</table><br>
   <h4 align="center"> Bank Details</h4 ><hr>
  
  		<table border="2" align="center">
			<tr align="center">
			
				
				<th>&nbsp;&nbsp;id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Reseller Id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Reseller Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;IFSC Code&nbsp;&nbsp;</th>					
				<th>&nbsp;&nbsp;Account Number&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Confirm Account Number&nbsp;&nbsp;</th>
				
				
			</tr>
					
			</tr>
			<?php 
			
			//$sql="select a.order_id,a.user_id,a.username,a.payment_status
			$sql1="select user_id,name,ifsccode,accountno,confirmaccountno from tbl_bankdetail where order_id=$order_id ";				
							
//$sql="select tbl_order.date,tbl_order.pid,tblorder.status,tblorder.pname,tblorder.price,product.type,product.flavour,product.weight from tblorder inner join product on tblorder.pid=product.id  where tblorder.status='Confirm' order by tblorder.order_id";		
								$result1=$con->query($sql1);
								$i=0; 
								if ($result1->num_rows > 0) 
								{
									while($row = $result1->fetch_assoc()) 
									{ $i++; 
					?>	

       <form action="?id=<?php echo $order_id; ?> "method="POST">					
			<tr align="center"> 
				<td><?php echo $i; ?></td>	
				
				<td><?php echo $row['user_id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['ifsccode']; ?></td>
				<td><?php echo $row['accountno']; ?></td>
				<td><?php echo $row['confirmaccountno']; ?>
				</td>
				
				
			</tr>
			</form>
			<?php	}
			}
			else{
				echo "<script>alert('order not status confirmed')</script>";
				
				}?>
				
		</table><br>
 
  <!-- copyright -->
  <?php include('include/footer.php');?>
      
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>
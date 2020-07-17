<?php
    session_start();
    require '../connection.php';
   
	
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
  
  
  
  <form action="confirmsupplierpayment.php?id=<?php echo $order_id; ?> "method="POST">	
  <h3 align="center"> Product Details</h3><hr>
		<table border="2" align="center">
			<tr align="center">
			
				
				<th>&nbsp;&nbsp;id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Supplier Id&nbsp;&nbsp;</th>
				
				<th>&nbsp;&nbsp;Supplier Name&nbsp;&nbsp;</th>					
				<th>&nbsp;&nbsp;Product Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Category Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Sub-Category Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Description&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Quantity&nbsp;&nbsp;</th>
			    <th>&nbsp;&nbsp;Prise&nbsp;&nbsp;</th>

				<th>&nbsp;&nbsp;&nbsp;Total&nbsp;&nbsp;</th>
				<th colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;Email ID&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th colspan="1">&nbsp;Mobile Number&nbsp;</th>
					
				<th>&nbsp;&nbsp;&nbsp;&nbsp;Payment Status&nbsp;&nbsp;&nbsp;</th>
				<th colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;</th>
				
			</tr>
					
			</tr>
			<?php 
			$sql="select id,supplier_id,Supplier_Name,pname,category_name,sub_cat,description,Quantity,Price,Total,Email_ID,Mobile_No  from tbl_supplier_product ";		
							
//$sql="select tbl_order.date,tbl_order.pid,tblorder.status,tblorder.pname,tblorder.price,product.type,product.flavour,product.weight from tblorder inner join product on tblorder.pid=product.id  where tblorder.status='Confirm' order by tblorder.order_id";		
								$result=$con->query($sql);
								$i=0; 
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc()) 
									{ $i++; 
					?>		
			<tr align="center"> 
				<td><?php echo $i; ?></td>	
				
				<td>S<?php echo $row['supplier_id']; ?></td>
				<td><?php echo $row['Supplier_Name']; ?></td>
				<td><?php echo $row['pname']; ?></td>
				
				<td><?php echo $row['category_name']; ?></td>
				<td><?php echo $row['sub_cat']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['Quantity']; ?></td>
				<td><?php echo $row['Price'];?></td>
				<td><?php echo $row['Total'];?></td>
			    <td><?php echo $row['Email_ID'] ?>&nbsp;&nbsp;</td>
				
	
			<td><?php echo $row['Mobile_No'] ?>&nbsp;&nbsp;</td>

				
				
				
							    <td>
					 <select id="status" name="payment_status" class="form-control">
							<option value="select">----Select----</option>
							<option value="Payment Done">Payment Done</option>
							<option value="Payment Pending">Payment Pending</option>
							
			
					</select>
				</td>
				<td><input type="submit" name="submit" value="Submit"></td>
				
			</tr>
			
			
			
			
		
			<?php	}
			}
			 else{
				echo "<script>alert('No any Order are Edited..!')</script>";
				echo "<script>window.location.href='index.php'</script>";
				
				}?>
				</table><br><br>
  
  
  	</form>
 
  <!-- copyright -->
  <?php include('include/footer.php');?>
      
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>

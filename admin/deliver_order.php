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
    <title>Electro Store</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
 
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>

     
<?php include('include/header.php');?>
  <br>
  
  
  
  
  <h3 align="center">Deliverd Order Report</h3><hr>
		<table border="2" align="center">
			<tr align="center">
			
				
				<th>&nbsp;&nbsp;Orde id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;User Id&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;User Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Product id&nbsp;&nbsp;</th>					
				<th>&nbsp;&nbsp;Product Name&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Price(Rs)&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Quantity&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Total&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Mobile No.&nbsp;&nbsp;</th>
				
				
				<th>&nbsp;&nbsp;&nbsp;&nbsp;Order Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th>&nbsp;&nbsp;Ordered on(d/m/y)&nbsp;&nbsp;</th>
					
			</tr>
			<?php 
			$sql="select user_id,username,product_id,product_name,price,qty,total,mobile_no,status,date from tbl_order where status='deliver'";		
							
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
				
				<td>u<?php echo $row['user_id']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td>p<?php echo $row['product_id']; ?></td>
				<td><?php echo $row['product_name']; ?></td>
				<td>Rs.<?php echo $row['price']; ?>.00/-</td>
				<td><?php echo $row['qty']; ?></td>
				<td>Rs.<?php echo $row['total']; ?>.00/-</td>
				<td><?php echo $row['mobile_no']; ?></td>
			    <td><?php echo $row['status'] ?>&nbsp;&nbsp;</td>
				<td><?php echo $row["date"];?></td>
				
				
			</tr>
			
			<?php	}
			}
			 else{
				echo "<script>alert('No any Order are Delivered..!')</script>";
				echo "<script>window.location.href='manage_order.php'</script>";
				
				}?>
				</table><br><br>
  
  
  
 
  <!-- copyright -->
  <?php include('include/footer.php');?>
      
		<script src="assets/js/jquery-1.10.2.js"></script>   
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>
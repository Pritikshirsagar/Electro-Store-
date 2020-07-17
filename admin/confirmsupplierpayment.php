<?php
session_start();
include '../connection.php';	
$order_id = $_GET['supplier_id '];
//echo $id;
$paymentstatus = mysqli_real_escape_string($con,htmlspecialchars($_POST['payment_status']));				
					
						$sql="SELECT * FROM tbl_supplier_product where supplier_id = '$order_id' ";
			
			$result = mysqli_query($con,$sql); 
			
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array($result)) 
				{
					
					$pid=$row['supplier_id '];
				//	$user_id =$row['user_id'];
					
				}
			}
			else
			{
				echo" Error:".$con->error;
			}
			
			
	$updateorder = "UPDATE tbl_supplier_product SET payment_status='$paymentstatus' WHERE  supplier_id='$order_id'";
	
	
	$result = mysqli_query($con,$updateorder);

	
	if($result)
	{
		echo "<script>alert('Successfully Updated!')</script>";
	echo "<script>window.location.href='product_details_supplier.php';</script>";
	}
	
	else
	{
		echo "<script> alert('Could not update data')</script>";
		
	}
?>
			
			
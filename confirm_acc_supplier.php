<?php
session_start();
include 'connection.php';
if(isset($_SESSION['supplier_id']))
{
	$id = $_GET['supplier_id'];
	//$id = mysqli_real_escape_string($con,htmlspecialchars($_POST['id']));
	$name = mysqli_real_escape_string($con,htmlspecialchars($_POST['supplier_fname']));
	$lname = mysqli_real_escape_string($con,htmlspecialchars($_POST['supplier_lname']));
	$email = mysqli_real_escape_string($con,htmlspecialchars($_POST['email']));
	$contact = mysqli_real_escape_string($con,htmlspecialchars($_POST['mobile']));
	$address = mysqli_real_escape_string($con,htmlspecialchars($_POST['address']));
	//echo $name;
	//echo $lname;
	//echo $email;
	//echo $contact;
	//echo $address;
	
	
}

else
{
	echo "ERROR!!!";
}
	
	$updateuser = "UPDATE tbl_supplier SET supplier_fname='$name',supplier_lname='$lname',email='$email',mobile='$contact',address='$address' WHERE supplier_ids='$id'";
	
	
	$result = mysqli_query($con,$updateuser);

	
	if($result)
	{
		
		echo "<script>alert('Successfully Updated!')</script>";
		// $_SESSION['id']=$row['id'];  //user id
   ?>   <script>window.location.href='myacccount_supplier.php?id=<?php echo $id;?>'</script>
	<?php
	}	
	else
	{
		echo "<script> alert('Could not update data')</script>";
		echo "<script>window.location.href='myacccount_supplier.php';</script>";
	}
?>
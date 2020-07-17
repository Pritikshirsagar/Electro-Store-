
<?php 
	session_start();
	include 'connection.php';
	 $user_id=$_SESSION['supplier_id'];
	if(isset($_POST['submit']))
	{
		$name=$_POST['Sname'];
		$ifsccode=$_POST['ifsccode'];
		$accountno=$_POST['accountno'];
		$Confirmaccountno=$_POST['confirmaccountno'];
		//echo $name;
		$sql="insert into tbl_supplier_bank_details(S_B_id,Sname,ifsccode,accountno,confirmaccountno) values('$user_id','$name','$ifsccode','$accountno','$Confirmaccountno')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Successfully   Added!')</script>";
						
						echo "<script>window.location.href='bank_detail_suppplier.php'</script>";
					}
					else
					{
						echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}
?>
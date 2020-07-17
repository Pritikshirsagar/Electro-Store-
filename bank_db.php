
<?php 
	session_start();
	include 'connection.php';
	 $user_id=$_SESSION['user_id'];
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$ifsccode=$_POST['ifsccode'];
		$accountno=$_POST['accountno'];
		$Confirmaccountno=$_POST['confirmaccountno'];
		//echo $name;
		$sql="insert into tbl_bankdetail(user_id,name,ifsccode,accountno,confirmaccountno) values('$user_id','$name','$ifsccode','$accountno','$Confirmaccountno')";
		//echo $sql."<br>";
		if(mysqli_query($con, $sql))
					{
						echo "<script>alert('Successfully   Added!')</script>";
						
						echo "<script>window.location.href='BankDetails.php'</script>";
					}
					else
					{
						echo "<script>alert('An error occured while uploading the entry to database. Please try again later.')</script>";
							echo" Error:".$con->error;
					}

		
	}
?>
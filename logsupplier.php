<?php
session_start();
include ("connection.php");
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

		if(empty($email)||empty($password))
		{
			echo '<script>alert("Please Fill up all fields!");</script>';
			echo "<script>window.location.href='index.php';</script>";	
			
		}
		$sql = "SELECT  supplier_id,supplier_fname FROM tbl_supplier WHERE email = '$email' AND password = '$password'";
		$result = mysqli_query($con,$sql); 
        $numrows=mysqli_num_rows($result);
		if($numrows>0)
		{
			while ($row = mysqli_fetch_array( $result ))
			{
				$user_id = $row['supplier_id'];
				$username = $row['supplier_fname'];
				//echo  $username; 
				$_SESSION['supplier_fname'] = $username;
				$_SESSION['supplier_id'] = $user_id;
				//echo  $_SESSION['user_id']; 
				echo "<script>alert('Welcome Supplier')</script>";
				echo "<script>window.location.href='index_s.php';</script>";	
			
				
			}
		}
		else
		{
			//echo '<script>alert("username and/or password not found! \n\n Signup or Login again");</script>';
			session_unset();
			session_destroy();
			echo "<script>window.location.href='index_s.php';</script>";
		//exit;
		}



?>


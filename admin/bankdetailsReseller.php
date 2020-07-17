<?php include'../connection.php'; ?>
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
 
   <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">Reseller</h4>
				</div>
			</div>
			<div class="panel panel-info">
					<div class="panel-heading">List of Reseller Details</div>
			
						<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead  align="center">
                                        <tr>
                                            <th>#</th>
											<th>Reseller ID</th>
											<th>Reseller Name</th>
                                            <th>Reseller IFSC Code</th>
											
											<th>Account Number</th>
											<th>Confirm Account Number</th>
										
											
                                        </tr>
                                    </thead>
                                    <tbody>
									
									
									
									
									<?php
     
   $sql = "SELECT * FROM tbl_bankdetail";
$result = $con->query($sql);

if ($result->num_rows> 0) {

             $cnt=1;
	while($row = $result->fetch_assoc()) {?>

  		
			<tr class="odd gradeX">
                           <td class="center" align="center"><?php echo "0".htmlentities($cnt);?></td>
                           <td class="center" align="center"><?php echo $row['user_id'];?></td>
						   <td Class="center"><?php echo $row['name'];?></td>
                           <td class="center"><?php echo $row['ifsccode']."&nbsp;"?></td>               
							
                           <td class="center"><?php echo $row['accountno'];?></td>
						   <td class="center"><?php echo $row['confirmaccountno'];?></td> 
						  
            </tr>
										<?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

		

</div>
    
    

<br>
<br>
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('include/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>       			
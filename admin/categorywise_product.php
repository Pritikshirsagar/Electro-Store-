<?Php include '../connection.php';  ?>
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
   <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">Product\<a href="categorywise_product.php">Category - Wise Product</a></h4>
				</div>
			</div>
			 <div class="row">
			 <div class="col-md-4"></div>
			 <div class="col-md-5">
				<form method="post" enctype="multipart/form-data">
				<table>
				<div class="form-group">
				<tr>
				<td><label>Select Category</label></td>
				<td><select name=cat>
						<option value=''>Select One</option>
						<?php
									$sql="SELECT * FROM tbl_category";
								$result=mysqli_query($con,$sql);
							if(mysqli_num_rows($result)){
						while($row=mysqli_fetch_array($result))
						{		
						$catid=$row['id'];
						$catname=$row['name'];
						$des=$row['description'];
						?>
						<option value="<?php echo $catname;?>"><?php echo $catname;?></option>
						<?php
						}	
					}
					else
					{
						echo "0 result";
					}
?>
				</select>
				
				</td>
				<td><td colspan="2" align="center"><button type="submit" name="Search" class="btn btn-info">Search </button></td>
				</tr>
							</div>
				
				</table>
			 </form>
			 
			 </div>
			
			 </div> <br>
				<div class="panel panel-info">
					<div class="panel-heading" align="center">Report of Product Category Wise</div>

						<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead  align="center">
                                        <tr>
                                            <th>#</th>
											<th>Product Id</th>
										    <th>Product Name</th>
                                            <th>Category Name</th>
											 <th>Subcategory Name</th>
											 <th>Image</th>
											   									
                                        </tr>
                                    </thead>
                                    <tbody>

	
     <?Php 
	 if(isset($_POST['cat']))
	 {
	 $cat=$_POST['cat'];
        
	//	echo $cat;
			$sql="SELECT * FROM tbl_product where category='$cat' ";
			
			$result = mysqli_query($con,$sql); 
			
             $cnt=1;

			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_array( $result )) 
				{
					?>
			<tr class="odd gradeX">
                         <td class="center" align="center"><?php echo htmlentities($cnt);?></td>
                          <td class="center">p<?php echo $row['id'];?></td>
                                           <td class="center"><?php echo $row['name'];?></td>
											 <td class="center"><?php echo $row['category'];?></td>
											 <td class="center"><?php echo $row['subcategory'];?></td>
                                            <td class="center"><img width="30px"height="30px"src="uploads/<?php echo $row['photo'];?>"></td>
											   
						
                                        </tr>
			<?php 
				$cnt=$cnt+1;
			}
	 } 
	else
	 {}}
	?>										
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
					<script Language="Javascript">
		function printit()
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
		<h3 align="center"><input type="button" value="Print" name="Print" onClick="printit()"> </h1><br>

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
		
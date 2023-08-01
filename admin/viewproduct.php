<?php
include('sidebar.php');

if(isset($_POST['submit']))
{

   $product_category=$_POST['product_category'];

}

if (isset($_GET['del'])) {
    $del_id=$_GET['del'];

    $del_query = "DELETE FROM product WHERE id ='$del_id' ";
    $del_run = mysqli_query($con,$del_query);
    if ($del_run) {

        echo "<script>window.open('viewproduct.php', '_self')</script>";
        # code...
    }
}



?>

 

    <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">View Uploaded Products</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					
					
					<div>
					    <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post" enctype="multipart/form-data">

                      
                      
                        <label   for="exampleInputPassword1">
                         Product Category:
                        </label>
                        
                         
                         <select  name="product_category" required>
                          <option value="">Select Product Category</option>
                          <?php
                         include 'connect.php';
                        $utmss=mysqli_query($con,"SELECT DISTINCT product_category from product");			
					while($utz = mysqli_fetch_array($utmss)){
						//$pcod=$row['payCode1'].$row['payCode2'];
						$id=$utz['id'];
						$product_category=$utz['product_category'];
                                                ?>
                          <option value="<?php echo $id; ?>"><?php echo $product_category; ?></option>
                                                <?php
						} 
                         ?>
                      </select>
                       <input type="submit" name="submit" value="View Product">
                       </div>
                       </form>

					</div>
					
					
					
					
					
					
				<?php if(isset($_POST['submit'])) {?>	
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th>S/N</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                       <th>Product Code</th>
                                       <th>Product Image</th>
                                       <th>Action</th>
								</tr>
							</thead>
							<tbody>
				<?php 
                    $sn=1;
                    $sql = "select * from `product` where product_category='$product_category' ";
                    $result= mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        $id =$row['id'];
                        $image=$row['photo'];
                        $productname = $row['productName'];
                       
                        $productprice=$row['productPrice'];
                        $productcode=$row['productCode'];
                        ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $productname; ?></td>
                            <td> <?php echo $productprice; ?></td>
                            <td> <?php echo $productcode; ?> </td> 
                            <td> <img src='<?php echo $image; ?>' height="100px";  width="150px"  /></td>
                            <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet">
                            <td>
        <a class="btn btn-info" href="editproduct.php?id=<?php echo $id; ?>"> Edit</a>
                            <a class="btn btn-danger" href="viewproduct.php?del=<?php echo $id; ?>"  title="Delete">Delete</a>
                            </td>
                        </tr>
                      <?php
                        $sn++;
                         }
                     ?>	
							</tbody>
							
						</table>
						
					</div>

						
					</div>
					
					  <?php } ?>

					
				</div>
				
	
			</div>
		


						
				</div>
				
<?php include('end_sidebar.php'); ?>
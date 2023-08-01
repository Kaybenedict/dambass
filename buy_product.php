<?php include('dashboard.php'); 

if(isset($_POST['submit']))
{

   $product_code=$_POST['product_code'];

}

?>


 

    <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">Buy Products</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					
					
					<div>
					    <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post" enctype="multipart/form-data">

                      
                      
                        <label   for="exampleInputPassword1">
                         Product Code:
                        </label>
                        
                        <input type="text" name="product_code" placeholder="COPY AND PASTE THE PRODUCT CODE HERE">
                       <input type="submit" name="submit" value="View Product">
                       </div>
                       </form>

					</div>
					
					
					
					
					
					
				<?php if(isset($_POST['submit']))
				{?>	
				<form method="POST" action="confirm_payment.php">
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                       
                                       <th>Product Code</th>
                                       <th>Product Image</th>
                                       <th>Pay From Wallet</th>
								</tr>
							</thead>
							<tbody>
				<?php 
                    $sql = "select * from `product` where productCode='$product_code' ";
                    $result= mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        $id =$row['id'];
                        $image=$row['photo'];
                        $product_name = $row['product_name'];
                        $product_price=$row['product_price']-500;
                        $product_code=$row['product_code'];
                        ?>
                        <tr>
                            <td><?php echo $product_name; ?></td>
                            <td> <?php echo $product_price; ?></td>
                            <td> <?php echo $product_code; ?> </td> 
                            <td> <img src='<?php echo $image; ?>' height="100px";  width="150px"  /></td>
                            <td>
                              <a href="confirm_payment.php?id=<?php echo $id; ?>">Pay Now</a>
                            </td>
                        </tr>
                      <?php
                       
                         }
                     ?>	
							</tbody>
							
						</table>
						
					</div>
					

						
					</div>
					</form>
					
					  <?php } ?>

					
				</div>
				
	
			</div>
		


						
				</div>
				


<?php include('end_dashboard.php'); ?>
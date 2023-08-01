<?php
include('sidebar.php');

if (isset($_GET['del'])) {
    $del_id=$_GET['del'];

    $del_query = "DELETE FROM payment WHERE id ='$del_id' ";
    $del_run = mysqli_query($con,$del_query);
    if ($del_run) {

        echo "<script>window.open('viewpayment.php', '_self')</script>";
        # code...
    }
}



?>

 

    <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">View Payments Status</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					
				
					
					
					
					
					
					
				
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								  <th>S/N</th>
                                       <th>Customer ID</th>
                                       <th>Product Code</th>
                                       <th>Referrer Code</th>
                                       <th>Payment Method</th>
                                       <th>Amount Paid</th>
                                       <th>Payment Date</th>
                                       <th>Approve Date</th>
                                       <th>Status</th>
                                       <th>Edit</th>
								</tr>
							</thead>
							<tbody>
			
                                        <?php 
                                        $sn=1;
                                            $sql = "select * from `payment` ";
                                            $result= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_assoc($result)){
                                                $id =$row['id'];
                                                $unique_code =$row['unique_code'];
                                                $referrer_code =$row['referrer_code'];
                                                $product_code = $row['product_code'];
                                                $payment_method=$row['payment_method'];
                                                $product_price = $row['product_price'];
                                                $status = $row['status'];
                                                //$date = $row['paymenttime'];
                                                //$approvetime = $row['approvetime'];
                                                
                                            $getses33=mysqli_query($con,"SELECT * FROM product WHERE product_code='$product_code'");
                                        
                                        	 if($gtsere = mysqli_fetch_array($getses33)){
                                        	
                                        	 $product_code=$gtsere['product_code'];
                                        	 }
                                                ?>
                                              <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $product_code; ?></td>
                                                    <td><?php echo $unique_code; ?></td>
                                                    <td><?php echo $referrer_code; ?></td>
                                                    <td><?php echo $payment_method; ?></td>
                                                    <td> <?php echo $product_price; ?></td>
                                                    <td> <?php// echo $date; ?></td>
                                                    <td> <?php// echo $approvetime; ?></td>
                                                    <td> <?php echo $status; ?> </td> 
                                                    <td>
                                                    <a  href="confirm_payment.php?id=<?php echo $id; ?>" class="button">  edit</a> </td>
                                       <td>
                                               </tr>
                                                  <?php
                                                  $sn++;
                                            }
                                          ?>
                                          </tbody>
							
						</table>
						
					</div>

						
					</div>
					
			

					
				</div>
				
	
			</div>
		


						
				</div>
				
<?php include('end_sidebar.php'); ?>
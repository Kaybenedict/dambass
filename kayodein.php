<?php
include('dashboard.php');


?>

    <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">View Commissions</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <form action='' method="post" enctype="multipart/form-data">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th>S/N</th>
								 <th>Unique Id</th> 
								 <th>Amount</th>
								 <th>Description</th> 
                                <th>Reward Date</th> 
								</tr>
							</thead>
							<tbody>
							  <?php 
                                        $sn=1;
                                            $sql = "SELECT * FROM `income` WHERE `reward_to`='$unique_code' ";
                                            $result= mysqli_query($con,$sql);
											$total=0;
                                            while($row=mysqli_fetch_assoc($result)){
                                                $id =$row['id'];
                                                $unique_code1= $row['unique_code'];
                                                $reward_to= $row['reward_to'];
												$amount = $row['amount'];
												$description = $row['description'];
												$date = $row['date'];
                                                ?>
                                              <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $unique_code1; ?></td>
                                                    <td><?php echo $amount; ?></td>
                                                    <td><?php echo $description; ?></td>
                                                    <td><?php echo $date; ?></td>
													
                                                    
                                               </tr>
                                                  <?php
                                                  $sn++;
                                            }
                                          ?>
                                          
                                           <tr>
					          
                						       <td >Total Commisions</td>
                						       <td >&nbsp;</td>
                						        <td >&nbsp; </td>
                						   	   <td ><?php echo (($amount1)); ?> </td>
                						       <td >&nbsp; </td>
                						       <td >&nbsp; </td>
                						       
                							   </tr> 
								
							</tbody>
							
						</table>
						
					</div>
					</form>

						
					</div>

					
				</div>
				
	
			</div>
		


						
				</div>
				
<?php 





include('end_dashboard.php'); ?>
<?php include('sidebar.php'); ?>

<div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">Income History</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th>Sr No</th>
                                <th>Amount</th>
                                <th>Description</th> 
                                <th>Date</th>
								</tr>
							</thead>
							<tbody>
							  <?php 
                            
                                $staff = "SELECT * FROM `income_history` ";
                                $runresult = mysqli_query($con,$staff);
                                $i=0;

                                while ($row = mysqli_fetch_array($runresult)): {
                                    $id = $row['id'];
                                    $name = $row['agent_name'];
                                    $agent_id = $row['agent_id'];
                                    $agent_name = $row['agent_name'];
                                    $desp=$row['desp'];
                                    
                                    $i++;

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo (($row['cr_dr']==0)?"+":"-")."". $row['amt']  ?></td>
                                    <td><?php echo $desp; ?></td>
                                    
                                   
                                   
                                   
                                </tr>
                            <?php }; ?>
                            
                            <?php endwhile ?>
								
							</tbody>
							
						</table>
						
					</div>

						
					</div>

					
				</div>
				
	
			</div>
		


						
				</div>
	

<?php include('end_sidebar.php'); ?>
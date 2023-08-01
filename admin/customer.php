<?php include('sidebar.php');

if (isset($_GET['del'])) {
    $del_id=$_GET['del'];

    $del_query = "DELETE FROM agent WHERE id ='$del_id' ";
    $del_run = mysqli_query($con,$del_query);
    if ($del_run) {

        echo "<script>window.open('customer.php', '_self')</script>";
        # code...
    }
}


?>

<div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">List Of Customers</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								<th>N/O</th>
								 <th>Customer ID</th>
                                <th>Name</th>
                                <th>Email</th> 
                                <th>Mobile</th>
                                <th>Sponsor ID</th>
                                <th>Action</th>
								</tr>
							</thead>
							<tbody>
							  <?php 
                            
                                $staff = "SELECT * FROM `agent` ";
                                $runresult = mysqli_query($con,$staff);
                                $i=0;

                                while ($row = mysqli_fetch_array($runresult)): {
                                    $id = $row['id'];
                                    $agent_id = $row['agent_id'];
                                    $agent_name = $row['agent_name'];
                                    $email = $row['email'];
                                    $mobile = $row['mobile'];
                                    $sponsor_id = $row['sponsor_id'];
                                    
                                    
                                    $i++;

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $agent_id;  ?></td>
                                    <td><?php echo $agent_name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $mobile; ?></td>
                                    <td><?php echo $sponsor_id; ?></td>
                                    
                          <td>  <a class="btn btn-danger" href="customer.php?del=<?php echo $id; ?>"  title="Delete">Delete</a>
                            </td>
                        </tr>
                                    
                                   
                                   
                                   
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
<?php include "dashboard.php"; 
?>

        <!-- main area -->
          
                 <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">Your Upline</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
                
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th> S/N</th>
                                <th>Your Upline Name</th>
                                <th>Your Stage</th> 
                                <th>Total Received</th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        $sn=1;

                                            $sql ="SELECT * FROM user WHERE unique_code='$unique_code'";
                                            $result= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_assoc($result)){
                                              $totalcomm = 0;
                                                $id =$row['id'];
                                                $unique_code=$row['unique_code'];
                                                $name=$row['name'];
                                                $balance=$row['balance'];
                                                
                                               
                                                ?>
                                               
                                              <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td> <?php echo 'Level 1'; ?></td>
                                                    <td> <?php echo $balance; ?> </td> 
                                                 
                                                    
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
                   
                
                   
  <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
                        <div class="table-responsive">
                                <h1>First Referral</h1>
							
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$unique_code' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                $unique_code=$row['unique_code'];
                                                $stage1=$row['stage1'];                             
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>

                                              <?php if (empty($row['stage1'])){
                                                      echo 'Not Completed';
                                                    }else{ ?>
                                                    <form action="view_member.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                            
                                                    <table class="table-bordered" width="100%">
							<thead>
								<tr>
								<th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$stage1' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage1=$row['stage1'];
                                                $stage2=$row['stage2'];
                                                $stage3=$row['stage3'];
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>
                                                 <td><?php if (empty($row['stage1'])){
                                                      echo 'Not Completed';
                                                    }else{ ?>
                                                    <form action="view_member.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                                      </td>
                                            
                                                   <td><?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                    <form action="view_member.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                      </td>
                                                    <td><?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage3; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage3; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                     
                                                      </td>
                                                    
                                                   
                                               </tr>
                                                  <?php
                                                  $sn++;
                                                 $user1='';
                                                 $commission=0;
                                            }
                                          ?>
                                           
                                      </tbody>                       
						</table>	
               



                                              <?php  }
                                          ?>
						
						
                                        </div>
                                        </div>
                                        </div>
                                    </div>	
                                        </div>  


                
            
  <div class="recent-grid py-3">
			<div class="projects py-3">
				<div class="card py-3">
					<div class="card-header py-3">
                        <div class="table-responsive">
                                <h1>Second Referral</h1>
							
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$unique_code' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                $unique_code=$row['unique_code'];
                                                $stage2=$row['stage2'];                             
                                               
	                                            
                                                ?>
                                              <tr>

                                              <?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{ ?>
                                                    <form action="view_member.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>
                                            
                                                    <table class="table-bordered" width="100%">
							<thead>
								<tr>
								<th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$stage2' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage1=$row['stage1'];
                                                $stage2=$row['stage2'];
                                                $stage3=$row['stage3'];
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>
                                                 <td><?php if (empty($row['stage1'])){
                                                      echo 'Not Completed';
                                                    }else{ ?>
                                                    <form action="view_member.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                                      </td>
                                            
                                                   <td><?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                    <form action="view_member.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                      </td>
                                                    <td><?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage3; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage3; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                     
                                                      </td>
                                                    
                                                   
                                               </tr>
                                                  <?php
                                                  $sn++;
                                                 $user1='';
                                                 $commission=0;
                                            }
                                          ?>
                                           
                                      </tbody>                       
						</table>	
               



                                              <?php  }
                                          ?>
						
						
                                        </div>
                                        </div>
                                        </div>
                                    </div>	
                                        </div>  




                
  <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
                        <div class="table-responsive">
                                <h1>Third Referral</h1>
							
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$unique_code' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage3=$row['stage3'];                             
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>

                                              <?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{ ?>
                                                    <form action="view_member.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage3; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage3; ?>"  name="view"> <?php } ?>
                                                    </form>
                                            
                                                    <table class="table-bordered" width="100%">
							<thead>
								<tr>
								<th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$stage3' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage1=$row['stage1'];
                                                $stage2=$row['stage2'];
                                                $stage3=$row['stage3'];
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>
                                                 <td><?php if (empty($row['stage1'])){
                                                      echo 'Not Completed';
                                                    }else{ ?>
                                                    <form action="view_member.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                                      </td>
                                            
                                                   <td><?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                    <form action="view_member.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                      </td>
                                                    <td><?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage3; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage3; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                     
                                                      </td>
                                                    
                                                   
                                               </tr>
                                                  <?php
                                                  $sn++;
                                                 $user1='';
                                                 $commission=0;
                                            }
                                          ?>
                                           
                                      </tbody>                       
						</table>	
               



                                              <?php  }
                                          ?>
						
						
                                        </div>
                                        </div>
                                        </div>
                                    </div>	
                                        </div>  
                   
                   
                   
                   
                   
                   
                    </div>
                  </div>
          </div>
          </div>
          </div>
          </div>
          <!-- bottom footer -->
          
           
     <?php include "end_dashboard.php"; ?> 
         <!-- page scripts -->
   <!-- <script src="vendor/datatables/media/js/jquery.dataTables.js"></script>
    <script src="vendor/datatables/media/js/dataTables.bootstrap4.js"></script>
     end page scripts -->

    <!-- initialize page scripts 
    <script type="text/javascript">
      $('.datatable').DataTable({
       // 'ajax': 'data/datatables-arrays.json'
      });
    </script>
     end initialize page scripts -->
          
       
<?php
include('dashboard.php');
if(isset($_POST['view'])){
    $member=$_POST['member'];
}
?>


<div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
                        <div class="table-responsive">
                                <h1>First Referral of <?php echo $member; ?></h1>
							
                                        <?php                                        
                                            $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage1=$row['stage1'];                             
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>

                                              <?php if (empty($row['stage1'])){
                                                      echo 'Not yet on this stage';
                                                    }else{ ?>
                                                    <form action="view_member10.php" method="post"> 
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
                                                    <form action="view_member10.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                                      </td>
                                            
                                                   <td><?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                    <form action="view_member10.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                      </td>
                                                    <td><?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member10.php" method="post">
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
                                <h1>Second Referral of <?php echo $member; ?></h1>
							
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage2=$row['stage2'];                             
                                               
	                                            
                                                ?>
                                              <tr>

                                              <?php if (empty($row['stage2'])){
                                                      echo 'Not yet on this stage' ;
                                                    }else{ ?>
                                                    <form action="view_member10.php" method="post"> 
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
                                                    <form action="view_member10.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                                      </td>
                                            
                                                   <td><?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                    <form action="view_member10.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                      </td>
                                                    <td><?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member10.php" method="post">
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
                                <h1>Third Referral of <?php echo $member ;?></h1>
							
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                //$unique_code=$row['unique_code'];
                                                $stage3=$row['stage3'];                             
                                               $total1 = 1500;
	                                            
                                                ?>
                                              <tr>

                                              <?php if (empty($row['stage3'])){
                                                      echo 'Not yet in this stage';
                                                    }else{ ?>
                                                    <form action="view_member10.php" method="post"> 
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
                                                    <form action="view_member10.php" method="post"> 
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>
                                                      </td>
                                            
                                                   <td><?php if (empty($row['stage2'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                    <form action="view_member10.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                      </td>
                                                    <td><?php if (empty($row['stage3'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member10.php" method="post">
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


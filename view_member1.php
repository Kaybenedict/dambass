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
						<h2 class="py-5"> Referral Information of <?php echo $member; ?></h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th> S/N</th>
                                <th>Stage 1</th>
                                <th>Stage 2</th>
                                <th>Stage 3</th>
                                <th>Stage Commission Expected</th> 
								</tr>
							</thead>
							 <tbody>
                                    
               <?php 
                                        
                                        $sn=1;
                                        
                                       $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                       $result1= mysqli_query($con,$sql);
                                       while($row=mysqli_fetch_array($result1)){
                                           $id =$row['id'];
                                           $unique_code=$row['unique_code'];
                                           $stage1=$row['stage1'];
                                           $stage2=$row['stage2'];
                                           $stage3=$row['stage3'];
                                          $total1 = 1500;
                                         
                                           ?>
                                         <tr>
                                            
                                               <td><?php echo $sn; ?></td>
                                               <td><?php if (empty($row['stage1'])){
                                                 echo 'Not Completed';
                                               }else{ ?>
                                                 <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage1; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage1; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                 </td>
                                              
                                              
                                              
                                              
                                              
                                              <td><?php if (empty($row['stage2'])){
                                                 echo 'Not Completed';
                                               }else{?>
                                                  <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage2; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage2; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                 </td>
                                               <td><?php if (empty($row['stage3'])){
                                                 echo 'Not Completed';
                                               }else{?>
                                                  <form action="view_member1.php" method="post">
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
					</div>
				</div>
				</div>
			</div>	
				</div>         
      
        <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5"> Referral Information Step 2 <?php echo $member; ?></h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th> S/N</th>
                                <th>Stage 4</th>
                                <th>Stage 5</th>
                                <th>Stage 6</th>
                                <th>Stage Commission Expected</th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                $unique_code=$row['unique_code'];
                                                $stage4=$row['stage4'];
                                                $stage5=$row['stage5'];
                                                $stage6=$row['stage6'];
	                                            
	                                            
                                                ?>
                                              <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php if (empty($row['stage4'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                       <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage4; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage4; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                     
                                                      </td>
                                                    <td><?php if (empty($row['stage5'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                     <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage5; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage5; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php if (empty($row['stage6'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                       <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage6; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage6; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php  echo '&#8358 600'; ?></td>
                                                    
                                                   
                                               </tr>
                                                  <?php
                                                  $sn++;
                                                 $user1='';
                                                 $commission=0;
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
						<h2 class="py-5"> Referral Information Step 3 <?php echo $member; ?></h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th> S/N</th>
                                <th>Stage 7</th>
                                <th>Stage 8</th>
                                <th>Stage 9</th>
                                <th>Stage Commission Expected</th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                $unique_code=$row['unique_code'];
                                                $stage7=$row['stage7'];
                                                $stage8=$row['stage8'];
                                                $stage9=$row['stage9'];
	                                            
	                                            
                                                ?>
                                              <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php if (empty($row['stage7'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                       <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage7; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage7; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php if (empty($row['stage8'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                       <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage8; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage8; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php if (empty($row['stage9'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                       <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage9; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage9; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php  echo '&#8358 600'; ?></td>
                                                    
                                                   
                                               </tr>
                                                  <?php
                                                  $sn++;
                                                 $user1='';
                                                 $commission=0;
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
						<h2 class="py-5"> Referral Information Step 3 <?php echo $member; ?></h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th> S/N</th>
                                <th>Stage 10</th>
                                <th>Stage 11</th>
                                <th>Stage 12</th>
                                <th>Stage Commission Expected</th> 
								</tr>
							</thead>
							 <tbody>
                                    
                                        <?php 
                                        
                                             $sn=1;
                                             
                                            $sql ="SELECT * FROM commission WHERE unique_code='$member' ";
                                            $result1= mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result1)){
                                                $id =$row['id'];
                                                $unique_code=$row['unique_code'];
                                                $stage10=$row['stage10'];
                                                $stage11=$row['stage11'];
                                                $stage12=$row['stage12'];
	                                            
	                                            
                                                ?>
                                              <tr>
                                                    <td ><?php echo $sn; ?></td>
                                                    <td><?php if (empty($row['stage10'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage10; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage10; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php if (empty($row['stage11'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                       <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage11; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage11; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php if (empty($row['stage12'])){
                                                      echo 'Not Completed';
                                                    }else{?>
                                                      <form action="view_member1.php" method="post">
                                                      <input type="hidden" value="<?php echo $stage12; ?>"  name="member">
                                                      <input type="submit" value="<?php echo $stage12; ?>"  name="view"> <?php } ?>
                                                    </form>  
                                                    
                                                      </td>
                                                    <td><?php  echo '&#8358 600'; ?></td>
                                                    
                                                   
                                               </tr>
                                                  <?php
                                                  $sn++;
                                                 $user1='';
                                                 $commission=0;
                                            }
                                          ?>
                                           
                                      </tbody>                       
						</table>	
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

 
<?php include('end_dashboard.php'); ?>
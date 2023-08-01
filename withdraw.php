<?php include('dashboard.php');

$getses33=mysqli_query($con,"SELECT * FROM user WHERE id='$id'");
                                        
        if($gtsere = mysqli_fetch_array($getses33)){
            $name=$gtsere['name'];
            $id=$gtsere['id'];
            $phone=$gtsere['phone'];
            $email=$gtsere['email'];
            $bankname=$gtsere['bankname'];
            $accnumber=$gtsere['accnumber'];
            $accname=$gtsere['accname'];
            $pin=$gtsere['pin'];
            $unique_code=$gtsere['unique_code'];
        }


if(isset($_POST['submit'])){
    if($_POST['pin']==$pin){
    $unique_code=$_POST['unique_code'];
    $amount=$_POST['amount'];
    $balance=$_POST['balance'];
    $bankname=$gtsere['bankname'];
    $accnumber=$gtsere['accnumber'];
    $accname=$gtsere['accname'];
    $d = new DateTime();
    $date=$d->format('Y-m-d H:i:s');
   // date_default_timezone_set('African/Lagos');
    //$Date_time = date('m/d/Y h:i:s a', time());
    if($balance >= $amount){
        $sql = "insert into `withdraw` (unique_code,amount,bankname,accnumber,accname,date) values ('$unique_code','$amount','$bankname','$accnumber','$accname','$Date_time') ";
    $result = mysqli_query($con,$sql);
    if($result){
        $balance=$balance-$amount;
        $update = "UPDATE user SET 
        balance = '$balance'
        WHERE unique_code='$unique_code';
        ";
        $insert_pro=mysqli_query($con,$update);
        if ($insert_pro) {
             
            
            echo "<script>window.open('withdraw_successfull.php', '_self')</script>";
            
        }else{
            die(mysqli_error($con));
        }
    }
       
    }else{
         echo "<script>alert('Failed, Insufficient balance kindly deposit to your dashboard')</script>";
         echo "<script>window.open('deposit.php', '_self')</script>";
    }
    }else{
         echo "<script>alert('Failed, Invalid Withdrawal Pin')</script>";
         echo "<script>window.open('withdraw.php', '_self')</script>";
    }    
}


?>

	<div class="card-header py-5">
						<h2 class="py-5">Make A withdrawal Here</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>

<div>
 <form method="post" action="">
    <label for="name">Current Balance</label>
    <input type="text" name="balance" value="<?php echo $balance; ?>" required readonly>
    
     <label for="lname">Customer ID</label>
    <input type="text"  name="unique_code"  value="<?php echo $unique_code; ?>" required readonly>
    <label for="lname">Bank Name</label>
    <input type="text"  name="bankname"  value="<?php echo $bankname; ?>" required readonly>
    <label for="lname">Account Name</label>
    <input type="text"  name="accname"  value="<?php echo $accname; ?>" required readonly>
    
     <label for="lname">Account Number</label>
    <input type="text"  name="accnumber"  value="<?php echo $accnumber; ?>" required readonly>
    
    
      <label for="lname">Enter Amount To Withdraw</label>
    <input type="number"  name="amount" placeholder="ENTER AMOUNT TO BE Withdraw"   required>
    
     <label for="lname">Enter Your Withdrawal Pin</label>
    <input type="password"  name="pin" placeholder="ENTER YOUR WITHDRAWAL PIN"   required>
  
  
   <input type="submit" name="submit" value="Click To Withdraw"> 
  </form>
  
</div>

  <div class="recent-grid py-5">
			<div class="projects py-5">
				<div class="card py-5">
					<div class="card-header py-5">
						<h2 class="py-5">Withdrawal History</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
					<div class="card-body" id="contact">
					    <div class="table-responsive">
						<table class="table-bordered" width="100%">
							<thead>
								<tr>
								 <th>Sr No</th>
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Bank Name</th>
                                <th>Description</th> 
                                <th>Date</th> 
								</tr>
							</thead>
							<tbody>
							  <?php 
                            
                                $staff = "SELECT * FROM `withdraw` WHERE `id` = '$id' ";
                                $runresult = mysqli_query($con,$staff);
                                $i=0;

                                while ($row = mysqli_fetch_array($runresult)): {
                                    $id = $row['id'];
                                    $accname = $row['accname'];
                                    $accnumber = $row['accnumber'];
                                    $bankname = $row['bankname'];
                                    $date=$row['date'];
                                    $desp=$row['description'];
                                    
                                    $i++;

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $accname;  ?></td>
                                    <td><?php echo $accnumber;  ?></td>
                                    <td><?php echo $bankname;  ?></td>
                                    <td><?php echo $desp; ?></td>
                                    <td><?php echo $date;  ?></td>
                                
                                    
                                   
                                   
                                   
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



<?php include('end_dashboard.php'); ?>
			
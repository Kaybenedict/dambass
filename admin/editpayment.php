<?php
include('sidebar.php');
 $d = new DateTime();
   $datt=   $d->format('Y-m-d H:i:s');

if ($_GET['id']) {
    $edit_id = $_GET['id'];

    $editpayment = "SELECT * FROM payment WHERE id = '$edit_id' ";
    $runpayment=mysqli_query($con,$editpayment);
    $row = mysqli_fetch_array($runpayment);

    $id = $row['id'];
    $payment_method = $row['payment_method'];  
    $amount = $row['amount'];
   echo $status = $row['status'];
    $usern1 = $row['username'];
    $product = $row['product'];
} 
    
    if (isset($_POST['update'])) {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $payment_method =$_POST['payment_method'];  
        $amount =$_POST['amount'];
        $status =$_POST['status'];
        
        if($status=='Approved'){
    $sqll="SELECT * FROM useraccount WHERE username='$usern1'";
    $getsesq3=mysqli_query($con,$sqll);

	if($gtsqe = mysqli_fetch_array($getsesq3)){

	 $uniquecode=$gtsqe['uniquecode'];
	 $refer1=$gtsqe['referercode'];
	 
	     $sql ="SELECT * FROM useraccount WHERE uniquecode='$refer1' ";
         $result1= mysqli_query($con,$sql);
        if($rowd=mysqli_fetch_array($result1)){
         $user1=$rowd['username'];
         $refer2=$rowd['referercode'];
         $salemount=$amount;
         
         $commission=6.67*$salemount;
         $reawardname="Commision from the sale of".' '.$product;
         mysqli_query($con,"INSERT INTO `comissions`(`rewardname`, `amount`,commission, `rewardfrom`, `rewardto`) VALUES('$reawardname','$salemount','$commission','$usern1','$user1')");
        }
        
        
        $sql ="SELECT * FROM useraccount WHERE uniquecode='$refe2' ";
         $result1= mysqli_query($con,$sql);
        if($rowd=mysqli_fetch_array($result1)){
         $user2=$rowd['username'];
         $refer3=$rowd['referercode'];
         $salemount=$amount;
         
         $commission=6.67*$salemount;
         $reawardname="Commision from the sale of".' '.$product;
         $result1= mysqli_query($con,"INSERT INTO `comissions`(`rewardname`, `amount`,commission, `rewardfrom`, `rewardto`) VALUES('$reawardname','$salemount','$commission','$usern1','$user2')");
        }
        
        
         $sql ="SELECT * FROM useraccount WHERE uniquecode='$refe3' ";
         $result1= mysqli_query($con,$sql);
        if($rowd=mysqli_fetch_array($result1)){
         $user3=$rowd['username'];
         $refer4=$rowd['referercode'];
         $salemount=$amount;
         
         $commission=6.67*$salemount;
         $reawardname="Commision from the sale of".' '.$product;
         $result1= mysqli_query($con,"INSERT INTO `comissions`(`rewardname`, `amount`,commission, `rewardfrom`, `rewardto`) VALUES('$reawardname','$salemount','$commission','$usern1','$user3')");
        }
        
         $sql ="SELECT * FROM useraccount WHERE uniquecode='$refe4' ";
         $result1= mysqli_query($con,$sql);
        if($rowd=mysqli_fetch_array($result1)){
         $user4=$rowd['username'];
         $refer5=$rowd['referercode'];
         $salemount=$amount;
         
         $commission=6.67*$salemount;
         $reawardname="Commision from the sale of".' '.$product;
         $result1= mysqli_query($con,"INSERT INTO `comissions`(`rewardname`, `amount`,commission, `rewardfrom`, `rewardto`) VALUES('$reawardname','$salemount','$commission','$usern1','$user4')");
        }
        
        $sql ="SELECT * FROM useraccount WHERE uniquecode='$refe4' ";
         $result1= mysqli_query($con,$sql);
        if($rowd=mysqli_fetch_array($result1)){
         $user5=$rowd['username'];
         $refer6=$rowd['referercode'];
         $salemount=$amount;
         
         $commission=6.67*$salemount;
         $reawardname="Commision from the sale of".' '.$product;
         $result1= mysqli_query($con,"INSERT INTO `comissions`(`rewardname`, `amount`,commission, `rewardfrom`, `rewardto`) VALUES('$reawardname','$salemount','$commission','$usern1','$user5')");
        }
        
        

	}
}

        $update = "UPDATE payment SET 
        payment_method = '$payment_method',
        amount = '$amount',
        status ='$status',approvetime='$datt'
        WHERE id='$id';

        ";
        $insert_pro=mysqli_query($con,$update);
        if ($insert_pro) {
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data Updated Successfully
            </div>' ;
            echo "<script>window.open('viewpayment.php', '_self')</script>";
        }
    }

 ?>
 
 
 	<div class="card-header py-5">
						<h2 class="py-5 btn btn-info"> VERIFY PAYMENTS</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>

<div>
  <form action="" method="POST">
    <label for="name">Payment Method:</label>
    <input type="text"  value="<?php echo $payment_method ?>" name="payment_method" readonly
>
 
  <label for="name"> Payment Amount:</label>
    <input type="text"  value="<?php echo $amount ?>" name="amount"
 required readonly>
 
  <label for="name">Payment Status:</label>
    <select class="form-control"  id="exampleSelect1" name="status" required>
                         <option value="Pending">Pending</option>
                         <option value="Approved">Approved</option>
    </select>
   
    <input type="submit" name="update" value="UPDATE PAYMENT ">
  </form>
</div>

          

























<?php include('end_sidebar.php'); ?>
<?php 
include('sidebar.php');
   if ($_GET['id']) {
    $edit_id = $_GET['id'];
    $editpayment = "SELECT * FROM payment WHERE id = '$edit_id' ";
    $runpayment=mysqli_query($con,$editpayment);
    $row = mysqli_fetch_array($runpayment);
    $id = $row['id'];
    $payment_method = $row['payment_method'];  
    $product_price = $row['product_price'];
    $status = $row['status'];
    $unique_code = $row['unique_code'];
    $product_code = $row['product_code'];
    $referrer_code = $row['referrer_code'];
    $product_size = $row['product_size'];  
}


?>


<?php 
    if (isset($_POST['update'])) {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }


        $payment_method =$_POST['payment_method'];  
        $product_price =$_POST['product_price'];
        $status =$_POST['status'];
        $referrer_code =$_POST['referrer_code'];
        $unique_code =$_POST['unique_code'];
       

        $update = "UPDATE payment SET 
        payment_method = '$payment_method',
        product_price = '$product_price',
        status ='$status'

        WHERE id='$id' ";

        $insert_pro=mysqli_query($con,$update);
        if ($insert_pro) {
          $d = new DateTime();
          $date=$d->format('Y-m-d H:i:s');
          $unique_code =$_POST['unique_code'];
          $getpayment = mysqli_query($con,"SELECT * FROM `payment` WHERE `unique_code` = '$unique_code' ");  
          $data1 = mysqli_fetch_array($getpayment, MYSQLI_ASSOC);
          $status = $data1['status'];
          $referrer_code = $data1['referrer_code'];
          $unique_code = $data1['unique_code'];
          $query = mysqli_query($con,"SELECT * FROM `commission` WHERE `unique_code`= '$referrer_code' ");
          $data = mysqli_fetch_array( $query, MYSQLI_ASSOC);
          $unique_code1 = $data['unique_code']; 
          $date = $data['date']; 
          $stage1 = $data['stage1'];
          $stage2 = $data['stage2'];
          $stage3 = $data['stage3'];
          $amount = $data['amount'];
          $status = $data1['status'];
          if( empty($data['stage1']) AND $data1['status'] != 0){   
              $d = new DateTime();
              $date=$d->format('Y-m-d H:i:s');
                        
              $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage1` = '$unique_code', `description` = 'Commission for referrering $unique_code ', 
              `amount`= '$amount' + 500, `date`='$date' WHERE `unique_code`= '$referrer_code' ") ;

              $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 500 WHERE `unique_code`= '$referrer_code' ");

              $description1 = 'Commission for  completing stage 1' ;  
              $sql1 = "INSERT INTO `income` (`unique_code`, `reward_to`,`description`, `amount`, `date`) VALUES ('$referrer_code','$unique_code', '$description1', 500, '$date' ) ";
              $result = mysqli_query($con,$sql1);
              if($result){
                include('parent.php');
                /*echo "<script>alert('Data,Updated Successfully')</script>";    */      
              }
               
        
            } 
            elseif (empty($data['stage2']) AND $data1['status'] != 0) {
              $d = new DateTime();
              $date=$d->format('Y-m-d H:i:s');

              $com_on_stage2 = mysqli_query($con, "UPDATE  `commission` SET `stage2` = '$unique_code', `description` = 'Commission for referrering $unique_code ', 
              `amount`= '$amount' + 500  WHERE `unique_code`= '$referrer_code' ") ;
              $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 500 WHERE `unique_code`= '$referrer_code' ");
              $description2 = 'Commission for  completing Level 1' ; 
              $sql2 = "INSERT INTO `income` (`unique_code`,`reward_to`, `description`, `amount`, `date`) VALUES ('$referrer_code', '$unique_code' ,'$description2', 500, '$date') ";
              $result1 = mysqli_query($con,$sql2);
              if($result1){
                include('parent.php');
                /*echo "<script>alert('Data,Updated Successfully')</script>";    */ 
               
              }

            }
            elseif (empty($data['stage3']) AND $data1['status'] != 0) {
              $d = new DateTime();
              $date=$d->format('Y-m-d H:i:s');

              $com_on_stage2 = mysqli_query($con, "UPDATE  `commission` SET `stage3` = '$unique_code', `description` = 'Commission for referrering $unique_code ', 
              `amount`= '$amount' + 500  WHERE `unique_code`= '$referrer_code' ") ;
              $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 500 WHERE `unique_code`= '$referrer_code' ");

              $description2 = 'Commission for  completing Level 1' ; 
              $sql2 = "INSERT INTO `income` (`unique_code`, `reward_to`,`description`, `amount`, `date`) VALUES ('$referrer_code', '$unique_code' ,'$description2', 500, '$date') ";
              $result1 = mysqli_query($con,$sql2);
              if($result1){
                include('parent.php');
                /*echo "<script>alert('Data,Updated Successfully')</script>";    */ 
               
              }

            }
          }}
        
            
        
        
    

 ?>











<div class="card-header py-5">
	<h2 class="py-5 btn btn-info"> VERIFY PAYMENTS</h2>
	<button> <span class="las la-arrow-right"></span></button>
						
</div>

<div>
  <form action="" method="POST">
    <label for="name">Payment Method:</label>
    <input type="text"  value="<?php echo $payment_method; ?>" name="payment_method" readonly
>

<input type="hidden"  value="<?php echo $referrer_code; ?>" name="referrer_code" >
<input type="hidden"  value="<?php echo $unique_code; ?>" name="unique_code" >
 
  <label for="name"> Payment Amount:</label>
    <input type="text"  value="<?php echo $product_price; ?>" name="product_price"
 required readonly>
 
  <label for="name">Payment Status:</label>
    <select class="form-control"  id="exampleSelect1" name="status" required>
                         <option value="0">Pending</option>
                         <option value="1">Approved</option>
    </select>
   
    <input type="submit" name="update" value="UPDATE PAYMENT ">
  </form>
</div>

<?php 



include('end_sidebar.php'); ?>




<?php
include('connect.php');
if(isset($_POST['submit'])){
  $product_code=$_POST['product_code'];
  $product_price=$_POST['product_price'];
  $photo=$_POST["photo"];
  $product_name = $_POST["product_name"];
  }








?>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content"> 
      <div class="modal-body p-0">
        <div class="container-fluid">
           <div class="row">
           <?php
          //$product_code= (isset($_GET['product_code']) ? $_GET['product_code'] : '');
          //$id= (isset($_GET['id']) ? $_GET['id'] : '');
          //$id = ''; 
           /* if( isset( $_GET['product_code'])) {
                $id = $_GET['id']; 
                
            } */
          //$product_code = $_GET['product_code'];
         $product_code=$_GET['product_code'];
          $getses33=mysqli_query($con, "SELECT * FROM product  WHERE product_code='$product_code' ");
          while( $gtsere= mysqli_fetch_array($getses33)){
           $id=$gtsere['id'];
           $product_price=$gtsere['product_price'];
           $product_code=$gtsere['product_code'];
           $product_name=$gtsere['product_name'];
           $photo=$gtsere['photo'];
           $product_category=$gtsere['product_category'];
             
        ?>

           <div class="col-lg-4 bg-cover" style="background-image: url(<?php echo $photo;?>); min-height: 300px; "> 
           <!--<img src="admin/<?php //echo $photo;?>" /> -->
        </div>
           <?php } ?>
            <div class="col-lg-8">
                <form action="" class="row p-lg-5 gy-3">
                  <div class="col-lg-12">
                  <h1><?php echo $product_code; ?>Get in tounch</h1>  
                  <p>We are available at No 23, 
                    Beside Car Wash at Falegun,
                    Ado Ekiti,
                    Ekiti State or <br> call +234 806 911 7567</p>
                  </div>
                  <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Product Code</label>
                        <input type="text" class="form-control"  value="<?php echo $product_code; ?>">
                    </div>
                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" value="<?php echo $product_name; ?>">
                    </div>
                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">First name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John">
                    </div>
                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ben">
                    </div>

                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $product_price; ?>" readonly>
                    </div>

                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Size</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="45">
                    </div>

                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Referrer Code</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="45">
                    </div>

                    <div class="col-lg-6">    
                        <label for="exampleFormControlInput1" class="form-label">Placement Id</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="45">
                    </div>

                    <div class="col-lg-12">    
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="dambass@gmail.com">
                    </div>
                    <div class="col-12">
                       <label for="message" class="form-label">Address</label> 
                       <textarea name="" id="" cols="10" rows="2" class="form-control" placeholder="No 25, Falegun, Ado Ekiti, Ekiti State"></textarea>
                    </div>

                    <div class="col-12">
                    <button type="button" class="btn btn-brand">Proceed to Payment</button>
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
  
                    </div>
                </form>
            </div>
            
           </div>
            </div>
        </div>
      </div>

     
    </div>
  </div>
</div>


<?php if(isset($_POST['proceed'])){
    $refcode=$_POST['referrer'];
    $amount=$_POST['amount'];
    $pcode=$_POST["pcode"];
    $uniquecode= rand(1111111111, 9999999999);
    $uniquecode='D'.$uniquecode . 'S';
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $product= $_POST['product'];
    $payment_method=$_POST['payment_method'];
    $status="Pending";
     $insert= "INSERT INTO payment (uniquecode,first_name,last_name,email,address,referercode,payment_method,amount,status,username,productcode,product) VALUES ('$uniquecode','$first_name','$last_name','$email','$address','$refcode','$payment_method','$amount','$status','$username','$pcode','$product')";
        $insert_pro=mysqli_query($con,$insert);
        if ($insert_pro) {
          $insert1= "INSERT INTO useraccount (uniquecode,first_name,last_name,email,address,referercode) VALUES ('$uniquecode','$first_name','$last_name','$email','$address','$refcode','$payment_method','$amount','$status','$username','$pcode','$product')";
          $insert_pro1=mysqli_query($con,$insert1);
            echo "<script>window.open('msg.php', '_self')</script>";
        }
} ?>
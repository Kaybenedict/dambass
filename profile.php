<?php 
//session_start();
include('dashboard.php');
if(isset($_POST['submit'])){
    if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
    $name=$_POST['name'];
	
	  $unique_code=$_POST['unique_code'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $bankname=$_POST['bankname'];
    $accname=$_POST['accname'];
    $accnumber=$_POST['accnumber'];
    $image=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];

    
      $update = "UPDATE user SET 
        name = '$name',
        email = '$email',
        phone = '$phone',
        unique_code='$unique_code',
        address = '$address',
        location= '$location',
        bankname = '$bankname',
        accname = '$accname',
        accnumber = '$accnumber'
        WHERE id='$id';

        ";
        $insert_pro=mysqli_query($con,$update);
        if ($insert_pro) {
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data Updated Successfully
            </div>' ;
          //  echo "<script>window.open('.php', '_self')</script>";
        }else{
           echo '<div class="alert alert-danger" role="alert">
            <strong>Error</strong> Data Not Updated Successfully
            </div>' ; 
        }
}

























 ?>

	<div class="card-header py-5">
						<h2 class="py-5 btn btn-info">UPDATE YOUR PROFILE</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>

<div>
  <form action="" method="POST">

<label for="name">Fullname</label>
    <input type="text"  name="name" placeholder="ENTER YOUR FULLNAME" value="<?php echo $name; ?>" autocomplete="off"
>
 
  <label for="name">Referer Code</label>
    <input type="text"  name="unique_code"  value="<?php echo $unique_code; ?>" autocomplete="off"
 required readonly>
 
  <label for="name">Email</label>
    <input type="email"  name="email" placeholder="ENTER YOUR EMAIL" value="<?php echo $email; ?>" autocomplete="off"
 >
 
  <label for="name">Mobile Number</label>
    <input type="text"  name="phone" placeholder="ENTER YOUR MOBILE NUMBER" value="<?php echo $phone; ?>" autocomplete="off"
 >
 
 
 
  <label for="name">Location</label>
<input type="text"  name="location" 
placeholder="ENTER YOUR LOCATION" value="<?php echo $location; ?>" autocomplete="off">
 
  <label for="name">Address</label>
    <input type="text" id="address" name="address" placeholder="ENTER YOUR ADDRESS" value="<?php echo $address; ?>" autocomplete="off"
 >
 
 <?php if($bankname=='') {?>
  <label for="name">Bank Name</label>
    <input type="text" name="bankname" placeholder="ENTER YOUR YOUR BANK"  autocomplete="off"
>
<?php } ?>
 <?php if($accname=='') {?>
  <label for="name">Account Holder's Name:</label>
    <input type="text"  name="accname" placeholder="Enter Account Holder's Name"  autocomplete="off"
 >
 <?php } ?>
 <?php if($accnumber=='') {?>
  <label for="name">Bank Account Number:</label>
    <input type="number"  name="accnumber" placeholder="Enter Bank Account Number"  autocomplete="off"
 >
 <?php } ?>
 <!--<label for="name">Upload Your Image:</label>
    <input type="file"  name="photo" autocomplete="off"> -->
 
 
 

   
  
    <input type="submit" name="submit" value="UPDATE PROFILE ">
  </form>
</div>




<?php include('end_dashboard.php'); ?>
<?php 
include('sidebar.php');

if ($_GET['id']) {
    $edit_id = $_GET['id'];

    $term = "SELECT * FROM product WHERE id = '$edit_id' ";
    $runterm=mysqli_query($con,$term);
    $row = mysqli_fetch_array($runterm);

    $id = $row['id'];
    $productName = $row['productName'];  
    $product_category = $row['product_category'];
    $productPrice = $row['productPrice'];

    
}

 ?>

	<div class="card-header py-5">
						<h2 class="py-5 btn btn-info">UPDATE YOUR PROFILE</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>

<div>
  <form action="" method="POST">
    <label for="name">Product Name</label>
    <input type="text"  name="productName" placeholder="ENTER NEW PRODUCT NAME" value="<?php echo $productName; ?>" 
>
 
  <label for="name">Product Category</label>
    <input type="text"  name="product_category" placeholder="ENTER NEW PRODUCT CATEGORY" value="<?php echo $product_category; ?>"
 required readonly>
 
  <label for="name">Product Price</label>
    <input type="text"  name="productPrice" placeholder="ENTER NEW PRODUCT PRICE " value="<?php echo $productPrice; ?>" 
 >
   
    <input type="submit" name="update" value="UPDATE PROFILE ">
  </form>
</div>




<?php include('end_sidebar.php'); ?>

 <?php 
    if (isset($_POST['update'])) {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }


        $productName = $_POST['productName'];
        $product_category = $_POST['product_category'];
        $productPrice = $_POST['productPrice'];

        $update = "UPDATE product SET 
         productName = '$productName',
        product_category = '$product_category',
        productPrice = '$productPrice'
        WHERE id='$id';

        ";
       $insert_pro=mysqli_query($con,$update);
       if ($insert_pro) {
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data Updated Successfully
            </div>' ;
            echo '<script>window.open("viewproduct.php", "_self")</script>';
        }else{
           echo '<div class="alert alert-danger" role="alert">
            <strong>Error</strong> Data Not Updated Successfully
            </div>' ; 
        }
    }

 ?>
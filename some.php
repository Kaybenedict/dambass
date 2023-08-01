<?php include('connect.php'); ?>
<link rel="stylesheet" href="./css/style3.css"> 

<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
    
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
  
  <?php
          $getses33=mysqli_query($con, "SELECT * FROM product ");
          while( $gtsere= mysqli_fetch_array($getses33)){
           $id=$gtsere['id'];
           $product_price=$gtsere['product_price'];
           $product_code=$gtsere['product_code'];
           $product_name=$gtsere['product_name'];
           $photo=$gtsere['photo'];
           $product_category=$gtsere['product_category'];
             
        ?>
      

    <div class="col hp">
    <form action="modal1.php" action="POST">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="admin/<?php echo $photo;?>" class="card-img-top" alt="" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Code:<?php echo $product_code; ?></a>
        </div>
        <input type="hidden" name="product_code" value="<?php echo $product_code; ?>" >
        
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success"><?php echo '&#8358;' .$product_price;?>.00</span>

            <span class="float-end"><a href="admin/<?php echo $photo;?>" data-gallery="portfolioGallery" class="small text-muted text-uppercase aff-link portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
            MSI GL66 Gaming Laptop: 15.6" 
              144Hz FHD 1080p Display, Intel Core i7-11800H, NVIDIA GeForce RTX 3070, 16GB, 512GB SSD, Win10, Black (11UGK-001)</a>
          </h5>

          <div class="d-grid gap-2 my-4">
          
            <a  type="button" href="product_details.php?product_code=<?php echo $product_code; ?>" name="submit" class="btn btn-danger bold-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">View and Buy</a>

          </div>
          
          <div class="clearfix mb-1">

            <span class="float-start"><p class="text-red"><!--Code:  <?php// echo $product_code; ?></p>--></span> 

            <span class="float-end">
              
              
      SIZE: 42

            </span>
          </div>
    
        </div>
      </div>
      </form>
    </div>

  
    <?php
      }
	?>
  
  </div>
  
</div>


<?php //include('modal1.php'); ?>













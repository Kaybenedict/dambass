<?php
session_start();
include "sidebar.php"; 
include 'connect.php';

if(isset($_POST['submit'])){
    $productname = $_POST['productName'];
    $productprice=$_POST['productPrice'];
    $productcode=$_POST['productCode'];
    $product_category=$_POST['product_category'];
    $size=$_POST['size'];
    $image=$_FILES['photo'];

    //print_r($image);
    $imagefilename = $image['name'];
    //print_r($imagefilename);

    $imagefiletemp = $image['tmp_name'];

    $filename_separate = explode('.',$imagefilename);
    //print_r($filename_separate);

    //$file_extension = strtolower($filename_separate[1]);
    //print_r($file_extension);

    $file_extension = strtolower(end($filename_separate));
    //print_r($file_extension);
    
    $imageCount = count($_FILES['image']['name']);
    for($i=0;$i<$imageCount;$i++){
        $imageName = $_FILES['image']['name'][$i];
        $imageTempName = $_FILES['image']['tmp_name'][$i] ;
        $targetPath = "./products/".$imageName;
        
        
    }//for close

    $extension = array('png','jpeg','jpg');
    if(in_array($file_extension,$extension)){
        $upload_image = 'products/'.$imagefilename;
        move_uploaded_file($imageTempName,$targetPath);
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql= "INSERT INTO product (product_name,product_category,product_price,product_code,photo, image) VALUES 
        ('$productname','$product_category','$productprice','$productcode','$upload_image', '$imageName')";

        $result = mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong> Data Inserted Successfully
          </div>' ;
          //echo "<script>window.open('viewproduct.php', '_self')</script>";
          
        }else{
            die(mysqli_error($con));
            alert('error');
        }
    }
}
?>

        <div class="card-header py-5">
						<h2 class="py-5">ADD PRODUCT HERE</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>
            <div>         
            <form action='' method="post" enctype="multipart/form-data">
         
                
                    
        <label for="exampleInputPassword1">Product Name:</label>
        <input type="text" placeholder="Enter Product Name"
                        required id="productName" name="productName">
                                         
                      
        <label for="exampleInputPassword1">Product Category:</label>
        <select  name="product_category" required>
            <option value="">Select Product Type</option>
            <option >SHIRTS</option>
            <option >SANDERS </option>
        </select>
        
         <label for="exampleInputPassword1">Product Price in Naira:</label> <input type="text"  placeholder="Enter Product Price in Naira" 
               required id="productPrice" name="productPrice">
               
        <label for="exampleInputPassword1">Product Size:</label> 
        <input type="number"  placeholder="Enter Product Size" 
               required id="" name="size">
                      
                      
        <label for="exampleInputPassword1">Product Code:</label>
        <input type="text"  placeholder="Enter Product Code" required id="productCode" name="productCode"> 
                     
        <label for="exampleInputPassword1">Product Image:</label>
        <input type="file"  name="photo" id="photo"  required>  
        
        <label for="exampleInputPassword1">Please select sub product images:</label>
        <input type="file"  name="image[]" multiple required>  
      
                      
                      
                      
       <input type="submit" name="submit" value="Submit ">
                </form>
                </div> 
                      
                  </div>
          </div>
          </div>
          </div>
          </div>
          <!-- bottom footer -->
     <?php include "end_sidebar.php"; ?>     
          
       
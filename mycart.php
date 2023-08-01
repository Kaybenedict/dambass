<?php include('sidebar.php'); 
include('connect.php');

?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART </h1>
    </div>
    <div class="col-lg-9">
        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">Serial No.</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Price</th>
            <th scope="col">Quantity</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="text-center">
          <?php
          $total = 0;
          if(isset($_SESSION['cart'])){
          foreach($_SESSION['cart'] as $key => $value)
          {
              $sr = $key+1;
              $total = $total+$value['product_price'];
              echo "
                  <td>$sr</td>
                  <td>$value[product_code]</td>
                  <td>$value[product_price]</td>
                  <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                  <td>
                  <form action='manage_cart.php' method='POST'>
                    <button name='Remove_Item' class='btn btn-small btn-outline-danger'>REMOVE</button>
                    <input type='hidden' name='product_code' value='$value[product_code]'>
                  </form> 
                  </td>
              ";
          }
        }
           
          ?>    
        </tbody>
        </table>
    </div>

    <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-right"><?php echo $total; ?></h5>
        <br> 
        <form action="">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault">
                    Cash On Delivery
                </label>
            </div>
            <br>
            <button class="btn btn-primary btn-block">Make Purchase</button>
        </form>
        </div>
    </div>


  </div>  
</div>



<?php include('end_sidebar.php'); ?>
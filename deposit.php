<?php include('dashboard.php');

$getses33=mysqli_query($con,"SELECT * FROM user WHERE id='$id'");
                                        
        if($gtsere = mysqli_fetch_array($getses33)){
            $name=$gtsere['name'];
            $unique_code=$gtsere['unique_code'];
            $phone=$gtsere['phone'];
            $email=$gtsere['email'];
            
        }





?>

	<div class="card-header py-5">
						<h2 class="py-5">Make Deposit</h2>
						<button> <span class="las la-arrow-right"></span></button>
						
					</div>

<div>
 <form id="paymentForm">
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required readonly>
    

    <label for="lname">Email</label>
    <input type="text" id="email-address" name="email"  value="<?php echo $email; ?>" required >
    
     <label for="lname">Mobile Number</label>
    <input type="text" id="phone" name="phone"  value="<?php echo $phone; ?>" required readonly>
    
      <label for="lname">Amount To Deposit</label>
    <input type="number" id="amount" name="amount" placeholder="ENTER AMOUNT TO BE DEPOSITED"   >
  
   <input type="submit" onclick="payWithPaystack()" value="PROCEED"> 
  </form>
  
</div>
<script src="https://js.paystack.co/v1/inline.js"></script>


 <script>
 const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_4de19482ce3891670a40fc18b8e1ff32f83f4885', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: 'DAMBASS'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        //window.location='http://www.dambass.com/makepayment.php';
      alert('TRANSACTION CANCELLED.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://www.dambass.com/verify_deposit.php?reference=" + response.reference;
    }
  });

  handler.openIframe();
}
</script>




<?php include('end_dashboard.php'); ?>
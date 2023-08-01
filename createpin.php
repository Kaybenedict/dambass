<?php
session_start();
include('connect.php');
if( isset($_SESSION['id'])){
 $id= $_SESSION['id'];
	$getses33=mysqli_query($con,"SELECT * FROM user WHERE id='$id'");

	if($gtsere = mysqli_fetch_array($getses33)){
	 $name=$gtsere['lname'];
	 $phone=$gtsere['phone'];
	 $address=$gtsere['address'];
	 $email=$gtsere['email'];
	 $unique_code=$gtsere['unique_code'];
	 $referer_code=$gtsere['referer_code'];
	 $bankname=$gtsere['bankname'];
    $accnumber=$gtsere['accnumber'];
    $accname=$gtsere['accname'];
    $pin=$gtsere['pin'];
    $id=$gtsere['id'];

	}
}else{
    echo "<script language=" . "'JavaScript'>";

		            	echo "window.location ='login.php'";

								echo "</script>";
}

      	
?>
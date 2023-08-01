<?php 
session_start();
include("connect.php");
if(isset($_POST['Login'])){
    $unique_code= mysqli_real_escape_string($con,$_POST['unique_code']);
    $password= mysqli_real_escape_string($con,$_POST['password']);


    $get_user = "SELECT * FROM `user` WHERE `unique_code`='$unique_code' AND `password`='$password' ";
    $f_msg='<div class="text-danger" role="alert">
            <strong>Failed</strong> Your unique code or Password does not matched
          </div>' ;
    $s_msg='<div class="alert alert-success" role="alert">
            <strong>Success</strong> Logged In Successfully
          </div>' ;
    
    $run_user = mysqli_query($con,$get_user);
    $datarow = mysqli_fetch_array($run_user);

    $check = mysqli_num_rows($run_user);
     if($check){
      $_SESSION['unique_code'] = $unique_code;
      $_SESSION['id'] = $datarow['id'];
      $get_comm = "SELECT * FROM `commission` WHERE `unique_code`='$unique_code' ";
      $run_comm = mysqli_query($con,$get_comm);
      $datarow2 = mysqli_fetch_array($run_comm);
      $_SESSION['amount'] = $amount1;
      header("location: redirect_downline1.php");
    }
    else {
       
      echo "<script>alert('Your unique code or Password is not correct')
        window.location='login.php';
      </script>";
      
    }
    
    
  }

 

?>
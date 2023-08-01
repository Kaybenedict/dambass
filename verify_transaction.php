<?php
$ref = $_GET['reference'];
if($ref=='') {
    header("Location:javascript://history.go(-1)");
}
?>
<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/:r" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_d989f13180f61e8216682962303cfa4ac54bf6de",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result=json_decode($response);
  }
  if($result->data->status=='success'){
      //i.e the user made the payment successfully
      $status=$result->data->status;
      $reference=$result->data->reference;
      $first_name=$result->data->customer->first_name;
      $last_name=$result->data->customer->last_name;
      $fullname= $first_name.''.$last_name;
      $cus_email=$result->data->customer->last_name;
      $phone=$result->data->customer->phone;
      date_default_timezone_set('African/Lagos');
      $Date_time = date('m/d/Y h:i:s a', time());
      
      include('connect.php');
      $sql = "insert into `payment` (mobile,status,reference,agent_name,email,payment_date) values ('$phone','$status','$reference','$fullname','$cus_emai','$Date_time') ";

    $result = mysqli_query($con,$sql);
        if($result){
           header('Location:success.php?status=success');
        }else{
            echo 'something went wrong, record not inserted'.mysqli_error($con);
        }
      
      
      
  }
?>
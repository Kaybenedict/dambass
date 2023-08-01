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
      $stmt=$con->prepare("INSERT INTO agent (mobile,status, reference, agent_name,email,payment_date) VALUES (?,?,?,?,?,?) ");
      $stmt->bind_param("ssssss",$phone,$status,$reference,$fullname,$cus_email,$Date_time);
      $stmt->execute();
      if(!$stmt){
          echo 'something went wrong, record not inserted'.mysqli_error($con);
      }
      else{
          header('Location:success1.php?status=success');
          exit;
      }
      $stmt->close();
      $con->close();
  }
  else{
     // header('Location: error.html');
      exit;
  }
?>
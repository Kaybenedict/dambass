<?php 
$parent_query = mysqli_query($con,"SELECT * FROM `payment` WHERE `unique_code`= '$referrer_code' ");
$parent_data = mysqli_fetch_array( $parent_query, MYSQLI_ASSOC);
$p_unique_code = $parent_data['unique_code']; 
$parent_ref_code = $parent_data['referrer_code']; 
$query11 = mysqli_query($con,"SELECT * FROM `commission` WHERE `unique_code`= '$parent_ref_code' ");
$data11 = mysqli_fetch_array( $query11, MYSQLI_ASSOC);
$parent_ref_code = $data11['unique_code']; 
$stage11 = $data11['stage4'];
$stage12 = $data11['stage5'];
$stage13 = $data11['stage6'];
$stage14 = $data11['stage7'];
$stage15 = $data11['stage8'];
$stage16 = $data11['stage9'];
$stage17 = $data11['stage10'];
$stage18 = $data11['stage11'];
$amount = $data11['amount'];
$d = new DateTime();
$date=$d->format('Y-m-d H:i:s');
if( empty($data11['stage4']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage4` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200  WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description3 = 'Commission for  completing stage 4' ;  
    $sql3 = "INSERT INTO `income` (`unique_code`, `reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' ,'$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql3);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } elseif( empty($data11['stage5']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage5` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description3 = 'Commission for  completing stage 5' ;  
    $sql3 = "INSERT INTO `income` (`unique_code`, `reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' ,'$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql3);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage6']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage6` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 6' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage7']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage7` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200  WHERE `unique_code`= '$parent_ref_code' ") ;
  $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 7' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage8']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage8` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 8' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage9']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage9` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 9' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage10']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage10` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 8' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage11']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage11` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 8' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage12']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage12` = '$p_unique_code ', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ") ;
    $bal = mysqli_query($con, "UPDATE  `user` SET `balance` = '$amount' + 200 WHERE `unique_code`= '$parent_ref_code' ");

    $description4 = 'Commission for  completing stage 8' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`,`reward_to`,`description`, `amount`, `date`) VALUES ('$parent_ref_code','$p_unique_code' , '$description3', 200, '$date') ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 
  

?>
<?php 
$parent_query = mysqli_query($con,"SELECT * FROM `payment` WHERE `unique_code`= '$referrer_code' ");
$parent_data = mysqli_fetch_array( $parent_query, MYSQLI_ASSOC);
$p_unique_code = $parent_data['unique_code']; 
$parent_ref_code = $parent_data['referrer_code']; 
$query11 = mysqli_query($con,"SELECT * FROM `commission` WHERE `unique_code`= '$parent_ref_code' ");
$data11 = mysqli_fetch_array( $query11, MYSQLI_ASSOC);
$$parent_ref_code = $data11['unique_code']; 
$stage11 = $data11['stage1'];
$stage12 = $data11['stage2'];
if( empty($data11['stage2']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage2` = 'completed', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= 700 WHERE `unique_code`= '$parent_ref_code' ") ;

    $description3 = 'Commission for  completing stage 2' ;  
    $sql3 = "INSERT INTO `income` (`unique_code`, `description`, `amount`) VALUES ('$parent_ref_code', '$description3', 200) ";
    $result3 = mysqli_query($con,$sql3);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } elseif( empty($data11['stage3']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage3` = 'completed', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= 1200 WHERE `unique_code`= '$parent_ref_code' ") ;

    $description3 = 'Commission for  completing stage 3' ;  
    $sql3 = "INSERT INTO `income` (`unique_code`, `description`, `amount`) VALUES ('$parent_ref_code', '$description3', 200) ";
    $result3 = mysqli_query($con,$sql3);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage4']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage3` = 'completed', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= 1400 WHERE `unique_code`= '$parent_ref_code' ") ;

    $description4 = 'Commission for  completing stage 4' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`, `description`, `amount`) VALUES ('$parent_ref_code', '$description3', 200) ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage5']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage3` = 'completed', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= 1600 WHERE `unique_code`= '$parent_ref_code' ") ;

    $description4 = 'Commission for  completing stage 5' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`, `description`, `amount`) VALUES ('$parent_ref_code', '$description3', 200) ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 

  elseif( empty($data11['stage6']) AND $data1['status'] != 0){               
    $com_on_stage1 = mysqli_query($con, "UPDATE  `commission` SET `stage3` = 'completed', `description` = 'Commission on referrering $p_unique_code ', 
    `amount`= 1800 WHERE `unique_code`= '$parent_ref_code' ") ;

    $description4 = 'Commission for  completing stage 6' ;  
    $sql4 = "INSERT INTO `income` (`unique_code`, `description`, `amount`) VALUES ('$parent_ref_code', '$description3', 200) ";
    $result3 = mysqli_query($con,$sql4);
    if($result3){
      echo "<script>alert('Data,Updated Successfully')</script>";
    }
     

  } 


?>
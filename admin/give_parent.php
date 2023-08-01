<?php
$query11 = mysqli_query($con,"SELECT * FROM `commission` WHERE `unique_code`= '$parent_ref_code' ");
$data11 = mysqli_fetch_array( $query11, MYSQLI_ASSOC);
$p_unique_code11 = $data['unique_code']; 
$stage11 = $data11['stage1'];
$stage12 = $data11['stage2'];
$status11 = $data1['status'];


?>  
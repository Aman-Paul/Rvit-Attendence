<?php
include 'includes/common.php';
$att= mysqli_real_escape_string($con,$_POST['att']);
$att_val="select * from second_year where roll_no=$roll";
$att_val_query= mysqli_query($con, $att_val);
$new_att=$att + $att_val[$sub_code];
$att_entry="udate second_year set $sub_code=$new_att";
header('location:second_entry.php');

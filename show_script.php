<?php
session_start();
error_reporting(0);
include 'includes/common.php';
$year= mysqli_real_escape_string($con,$_POST['year']);
$fetch="SELECT * FROM subject WHERE code='$code'";
$fetch_query= mysqli_query($con, $fetch) or die(mysqli_error($con));
$total_rows_fetch= mysqli_num_rows($fetch_query);
if($total_rows_fetch==0){
    echo 'Sorry no such user found';
    header('location:attendence_1.php');
}
else{
if($year==2)
    {
    include 'second_entry.php';
}
if($year==3)
    {
    header('location:third_entry.php');
}
if($year==4)
    {
    header('location:fourth_entry.php');
}
}
?>
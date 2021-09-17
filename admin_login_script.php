<?php
require 'includes/common.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sec_pass= md5($password);
$fetch_data="SELECT id,password FROM admin WHERE id='$id' AND password='$password'";
$fetch_data_query= mysqli_query($con, $fetch_data) or die(mysqli_error($con));
$total_rows_fetch= mysqli_num_rows($fetch_data_query);
if($total_rows_fetch==0){
    echo 'Sorry no such user found';
    header('location:admin_login.php');
}
else{
    $data= mysqli_fetch_array($fetch_data_query);
    $_SESSION['id']=$id;
    session_start();
    header('location:add.php');
}
?>
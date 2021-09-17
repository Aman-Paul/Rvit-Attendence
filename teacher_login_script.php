<?php
require  'includes/common.php';
$id= mysqli_real_escape_string($con,$_POST['id']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$sec_pass= md5($password);
$fetch_data="SELECT id,password FROM teacher WHERE id='$id' AND password='$password'";
$fetch_data_query= mysqli_query($con, $fetch_data) or die(mysqli_error($con));
$total_rows_fetch= mysqli_num_rows($fetch_data_query);
if($total_rows_fetch==0){
    $error='Sorry no such user found';
    header('location:teacher_login.php');
}
else{
    $data= mysqli_fetch_array($fetch_data_query);
    $_SESSION['id']="$id";
    $_SESSION['user_id']= mysqli_insert_id($con);
    session_start();
    header('location:attendence_1.php');
    echo 'Welcome';
}
?>


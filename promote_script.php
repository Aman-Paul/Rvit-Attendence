<?php
require 'includes/common.php';
$year= mysqli_escape_string($con, $_POST['year']);
$fetch_data="SELECT * FROM students WHERE year='$year'";
$fetch_data_query= mysqli_query($con, $fetch_data) or die(mysqli_error($con));
$total_rows_fetch= mysqli_num_rows($fetch_data_query);
if($total_rows_fetch==0){
    echo 'Sorry no such user found';
    header('location:add.php');
}
else
{
    $data= mysqli_fetch_array($fetch_data_query);
        header('location:promote.php');
}
?>
<?php
include('includes/common.php');
$sub_name=$_POST['sub_name'];
$t=$_POST['sub_total'];
$attendence=$_POST['add_attendence'];
$year=$_POST['year'];
$roll_no=$_POST['roll_no'];
$total=$t+$attendence;

if($year==2){
$sql=mysqli_query($con,"UPDATE `second_year` SET $sub_name='{$total}' WHERE `roll_no`='$roll_no'");
}else if($year==3){
    $sql=mysqli_query($con,"UPDATE `third_year` SET $sub_name='{$total}' WHERE `roll_no`='$roll_no'");
}else{
        $sql=mysqli_query($con,"UPDATE `fourth_year` SET $sub_name='{$total}' WHERE `roll_no`='$roll_no'");
}
if($sql){
    header('location:enter_attendence.php?year='.$year.'&sub='.$sub_name);
}else{
    echo "Not updated";
}
?>
<?php
include('includes/common.php');
$teacher_name=$_POST['teacher_name'];
 $year=$_POST['year'];
$subject=$_POST['subject'];
$total_lectures=$_POST['total_lectures'];
$query=mysqli_query($con,"SELECT * FROM `subject` WHERE `year`='$year' AND `code`='$subject'");
if($query==true){   
$sql=mysqli_query($con,"INSERT INTO `subject`(`code`, `name`, `total_attendence`, `year`) VALUES ('$subject','$teacher_name','$total_lectures','$year')");
}else {
    $sql=mysqli_query($con,"UPDATE `subject` SET `total_attendence`='{$total_lectures}' WHERE code='$subject'");
}
 if($sql){
     header('location:final_sheet.php?year='.$year.'&subject='.$subject);
 }else{
     echo "<script>alert('Not inserted');</script>";
     echo mysqli_error($con);
 }



?>
<?php
include 'includes/common.php';
$sroll= mysqli_real_escape_string($con,$_POST['Rollno']);
$sname= mysqli_real_escape_string($con,$_POST['Name']);
$syear= mysqli_real_escape_string($con,$_POST['year']);
$spassword= mysqli_real_escape_string($con,$_POST['Password']);
$enter_student="insert into students values('$sroll','$sname','$spassword','$syear')";
$enter_student_query= mysqli_query($con,$enter_student);
if($syear==2){
$enter_sec="insert into second_year values('$sroll',0,0,0,0,0)";
$enter_sec_query= mysqli_query($con,$enter_sec);
}
if($syear==3){
$enter_thir="insert into third_year values('$sroll',0,0,0,0,0)";
$enter_thir_query= mysqli_query($con,$enter_thir);
}
if($syear==4){
$enter_four="insert into fourth_year values('$sroll',0,0,0,0,0)";
$enter_four_query= mysqli_query($con,$enter_four);
}
echo 'enter successfully';
header("location:add.php");
?>
<?php
include 'includes/common.php';
$sroll= mysqli_real_escape_string($con,$_POST['rn']);
$syear= mysqli_real_escape_string($con,$_POST['yr']);
$delete_student="delete from students where roll_no='$sroll',year='$syear'";
$delete_student_query= mysqli_query($con,$delete_student);
if($syear==2){
$delete_sec="delete from second_year where roll_no='$sroll'";
$delete_sec_query= mysqli_query($con,$delete_sec);
}
if($syear==3){
$delete_thir="delete from third_year where roll_no='$sroll'";
$delete_thir_query= mysqli_query($con,$delete_thir);
}
if($syear==4){
$delete_four="delete from fourth_year where roll_no='$sroll'";
$delete_four_query= mysqli_query($con,$delete_four);
}
echo 'delete successfully';
header("location:add.php");
?>
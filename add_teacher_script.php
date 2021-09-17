<?php
include 'includes/common.php';
$tid= mysqli_real_escape_string($con,$_POST['id']);
$tname= mysqli_real_escape_string($con,$_POST['name']);
$tpass= mysqli_real_escape_string($con,$_POST['password']);
$enter_teacher="insert into teacher values('$tid','$tname','$tpass')";
$enter_teacher_query= mysqli_query($con,$enter_teacher);
echo 'enter successfully';
header("location:add.php");
?>
<?php
include 'includes/common.php';
$tid= mysqli_real_escape_string($con,$_POST['t_id']);
$delete_teacher="delete from teacher where id='$tid'";
$delete_teacher_query= mysqli_query($con,$delete_teacher);
echo 'delete successfully';
header("location:add.php");
?>
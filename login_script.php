<?php
error_reporting(0);
include 'includes/common.php';
$roll_no= mysqli_real_escape_string($con,$_POST['roll_no']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$sec_pass= md5($password);
$fetch_data="SELECT name,year FROM students WHERE roll_no=$roll_no AND password=$password";
$fetch_data_query= mysqli_query($con, $fetch_data) or die;
$total_rows_fetch= mysqli_num_rows($fetch_data_query);
if($total_rows_fetch==0){
    echo 'Sorry no such user found';
    header('location:index.php');
}
else{
    $data= mysqli_fetch_array($fetch_data_query);
    session_start();
}
   ?>
<html>
    <body>
        <?php include 'includes/head';?>
        <?php include 'includes/header_student.php';?>
        <div class="container">
            <div class="row">
                <div style="margin-top:8%;" class="col-lg-offset-11">
            <?php include'includes/print.php';?>
        </div>
            </div>
        </div>
        <div class="container" style="margin-top:0.5%; background-color: #ececec">
            <div class="row">
                <div class="col-lg-2">
                    <h4><strong>Name:</strong>  <?php echo $name['name'];?></h4>
                    <h4><strong>Year:</strong>  <?php echo $name['year'];?></h4>
                </div>
                <div class="col-lg-2 col-lg-offset-8">
                    <h4><strong>Roll No:</strong>  <?php echo $name['roll_no'];?></h4>
                </div>
        </div>
        </div>
        <div class="container table-responsive" style="margin-top: 1%">
            <table class="table table-bordered table-striped table-hover">
                    <?php
                    if($name['year']==2){
                        $year="second_year";
                    }
                    elseif($name['year']==3){
                        $year="third_year";
                    }
                    elseif($name['year']==4){
                        $year="fourth_year";
                    }
                    $rn=$name['roll_no'];
                    $header="select * from $year where roll_no = $rn";
                    $header_query= mysqli_query($con,$header);
                    echo "<tr>";
                    while($result= mysqli_fetch_field($header_query)){
                        echo "<th>".$result->name."</th>";
                    }
                    echo '</tr>';
                    
                        while($i<$col){
                        while($row = mysqli_fetch_row($header_query)){
                            echo "<td>".$row[$i]."</td>";
                        }
                        }
                    ?>
                </table>
            </div>
    </body>
</html>
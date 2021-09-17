<html>
   <?php
    include 'includes/head.php';
    ?>
    
    <style>
        th,td{
            border: 1px solid #a4a4a4;
            height: 2%x;
            text-align: center;
            
        }
        th{
            padding: 2%;
            background-color: #ececec;;
        }
        td{
            padding: 2%px;
        }
    </style>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-md-offset-10 col-lg-offset-10 col-xs-2 col-xs-offset-10 col-sm-2  col-xs-offset-10" style=margin-top:8%>
                    <?php
                            include 'includes/print.php';
                    ?>
                    <br><br>
                </div>
        <table style="border: 1px solid; width: 100%" >
            <tr>
                <th>Subject</th><th>Attendance</th><th>Total Attendance</th><th>Percent(%)</th>
            </tr>
<?php
require 'includes/common.php';
error_reporting(0);
$query = "select * from student_login";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr><td>".$result['subject']."</td><td>".$result['attendance']."</td><td>".$result['total_attendance']."</td><td>".$result['percent']."</td></tr>";
    }
}
 else {
    echo "No records found";
}
?>
</table>
            </div>
        </div>
    <div class="navbar-fixed-bottom">
<?php
include 'includes/footer.php';
?>
</div>
    </body>  
</html>
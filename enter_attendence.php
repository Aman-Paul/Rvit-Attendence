<?php
include('includes/common.php');
$year=$_REQUEST['year'];
$sub=$_REQUEST['sub'];
?>
<html>
   <head>
        <meta charset="UTF-8">
        <title>RVIT Attendence</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/right-ajax.js"></script>
<script src="bootstrap/js/right-jquery.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css"/>
    </head>    
    <style>
        th,td{
            padding: 1%;
            border: 1px solid #a4a4a4;
            height: 15%;
        }
        th{
            text-align: center;
            background-color: #ececec;
            font-size: 100%;
        }
        td{
            font-size: 100%;
        }
    </style>
    <body>
        <?php
        include 'includes/header_teacher.php';
        ?>
        <div class="container" style="margin-top:8%; background-color: #ececec">
            <div class="row">
                <h4><b>Year:  <?php echo $year;?></b></h4>
                <h4><b>Subject: <?php echo $sub;?></b></h4>
            </div>
        </div>
        <div id="response" class="alert alert-successs show fade table-responsive"></div>
        <table style="margin-top: 1%; margin-bottom: 4%"  class="table-striped table-bordered table-hover container">
            <tr>
                <th>Roll no</th>
                <th>Name</th>
                <th>Add Attendence</th>
                <th>Total</th>
            </tr>

            <div id="attendence-data"> 
                <?php 
$sy="SELECT * FROM students s INNER JOIN second_year sy ON s.roll_no=sy.roll_no";
$ty="SELECT * FROM students INNER JOIN third_year ON students.roll_no=third_year.roll_no";
$fy="SELECT * FROM students INNER JOIN third_year ON students.roll_no=third_year.roll_no";
$second_year=mysqli_query($con,$sy);
$third_year=mysqli_query($con,$ty);
$fourth_year=mysqli_query($con,$fy);
if($year==2)
    {
    $query=$second_year;
    
    }
elseif($year==3)
    { 
        $query=$third_year;
    }
elseif($year==4)
    { 
        $query=$fourth_year;
    }
while($result=mysqli_fetch_assoc($query)){

?>
                <tr> 
    <td><?php echo $result['roll_no']; ?></td>
    <td><?php echo $result['name']; ?></td>
    <td>
        <form id="attendence-form" method="post" action="add_data.php">
            <input type="hidden" name="sub_total" value="<?php echo $result[$sub]; ?>" >
            <input type="hidden" name="sub_name" value="<?php echo $sub; ?>" >
            <input type="hidden" name="year" value="<?php echo $result['year']; ?>" >
            <input type="hidden" name="roll_no" value="<?php echo $result['roll_no']; ?>" >
        <input type="number" name="add_attendence" value="" >
        <button type="submit" name="add" class="btn btn-primary" id="add"> Add Attendence</button>
        </form>
    </td>
    <td><?php echo $result[$sub]; ?></td>
</tr>              
 <?php } ?>
            </div>
</table>
     <div class="navbar-fixed-bottom">

<footer>
    <div class="container navbar-bottom">
        <center>
            <p>Copyright &copy; RVIT. All Rights Reserved | Contact Us: +91 90000
00000</p>
        </center>
    </div>
</footer></div>
         <script>
                                    $(document).ready(function(){
                                   $("#add").click(function(){
                                    var add_attendence=$('#add_attendence').val();
                                    var total=$('#total').val();
                                    var roll_no=$('#roll_no').val();
                                    var name=$('#name').val();
                                    if(add_attendence==""){
                                       $('#response').fadeIn();
                                       $('#response').removeClass('alert-success').addClass('alert-danger').html('All fields are require!');
                                   }
                                   else{
                                       $.ajax({
                                           url:"add_data.php",
                                           type:"POST",
                                           data:{name:name,total:total,roll_no:roll_no},
                                           beforesend: function(){
                                               $('#response').fadeIn();
                                               $('#response').removeClass('success-msg error-msg').addClass('process-msg').html('Loading response...');
                                             },
                                           success: function(data){ 
                                               $('#attendence-form').trigger("reset");
                                                $('#response').fadeIn();
                                               $('#response').removeClass('alert-danger').addClass('alert-success').html(data);
                                               setTimeout(function(){
                                                   $('#response').fadeOut();
                                               },4000);
                                           }
                                   
                                       });
                                   }
                                   });
                                    });
                                    </script>
    </body>  
</html>
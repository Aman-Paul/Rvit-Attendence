<?php 
include('includes/common.php');
$year=$_GET['year'];
$sub_c=$_GET['subject'];
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
       error_reporting(0);
       
       
       ?>
        <div id="response" class="alert alert-successs show fade"></div>
        <table style="border: 1px solid; width: 80%; margin-top: 3%; margin-bottom:3%" class="container" >
            <tr>
                <th>Roll no</th>
                <th>Name</th>
                <?php if($year=="2"){
                    echo "<th>".$sub_c."</th>";
                 }else if($year=="3"){
                    echo "<th>".$sub_c."</th>";
                }else{
                    echo "<th>".$sub_c."</th>";
                } ?>
                
                 <th>Total</th>
                <th>Percentage</th>
            </tr>

            <div id="attendence-data"> 
  <?php 
  $total=0;
  $scnd=mysqli_query($con,"SELECT students.roll_no,students.name,students.year,second_year.roll_no,second_year.sub21,second_year.sub22,second_year.sub23,second_year.sub24,second_year.sub25,subject.total_attendence,subject.year FROM students,second_year,subject WHERE students.roll_no=second_year.roll_no AND students.year=subject.year AND subject.code='$sub_c'");
    $third=mysqli_query($con,"SELECT students.roll_no,students.name,students.year,third_year.roll_no,third_year.sub31,third_year.sub32,third_year.sub33,third_year.sub34,third_year.sub35,subject.total_attendence,subject.year FROM students,third_year,subject WHERE students.roll_no=third_year.roll_no AND students.year=subject.year AND subject.code='$sub_c'");
  $fourth=mysqli_query($con,"SELECT students.roll_no,students.name,students.year,fourth_year.roll_no,fourth_year.sub41,fourth_year.sub42,fourth_year.sub43,fourth_year.sub44,fourth_year.sub45,subject.total_attendence,subject.year FROM students,fourth_year,subject WHERE students.roll_no=fourth_year.roll_no AND students.year=subject.year AND subject.code='$sub_c'");
   if($year=="2"){
       $final=$scnd;
   }else if($year=="3"){
       $final=$third;
   }else{
       $final=$fourth;
   }
  while($data=mysqli_fetch_assoc($final)){
     
 
  ?>
                <tr> 
                    <td><?php echo $data['roll_no']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php if($year=="2"){ for($i=21;$i<=25;$i++){ 
                        if(("sub".$i)==$sub_c){
                            $total=$data['sub'.$i];
                            echo $data['sub'.$i];
                        } 
                    }
                    }else if($year=="3"){
                        for($i=31;$i<=35;$i++){ 
                        if(("sub".$i)==$sub_c){
                            $total=$data['sub'.$i];
                            echo $data['sub'.$i];
                        } 
                    }
                    }else{
                        for($i=41;$i<=45;$i++){ 
                        if(("sub".$i)==$sub_c){
                            $total=$data['sub'.$i];
                            echo $data['sub'.$i];
                        } 
                    }
                    }
?></td>
                    
                      
                    <td><?php $total_attendence=$data['total_attendence'];
                    echo $data['total_attendence']; ?></td>
                    <td><?php
                     $percentage=(int)(($total/$total_attendence)*100);
                    echo $percentage;
                    ?> %</td>
                    
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
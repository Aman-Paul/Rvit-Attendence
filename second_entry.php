<?php
   include 'includes/common.php';
    include 'includes/head.php';
    include 'includes/header_teacher.php';
    ?>
<html>
    
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
        <div class="container">
            <form method="post">
                <table style="border: 1px solid; width: 100%; margin-top: 11%" >
            <tr>
                <th>Roll No</th><th>Name</th><th>Attendence</th><th>Total Attendence</th>
            </tr>
<?php
$query = "select * from students where year=2";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
if($total!=0)
{
    $enter="select * from students s inner join second_year sy on s.roll_no=sy.roll_no";
    $fetch_enter= mysqli_query($con, $enter);
    $fetch_enter_row=mysqli_num_rows($fetch_enter);
    while($result=mysqli_fetch_assoc($fetch_enter))
    {
        $sub_code=$code;
        $roll=$result['roll_no'];
        echo "<tr><td>".$result['roll_no']."</td>"
                . "<td>".$result['name']."</td>"
                . "<td><form colspan=2>"
                . "<input type='number' name='att' width=20%;>
                <button type='submit' name='attendence' style='width: 20%' class='btn btn-success' value='add';>Add</button>
                </form></td>"
                . "<td>".$result[$code]."</td></tr>";
    }
}
 else {
    echo "No records found";
}
?>
</table>
                <br><button class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    <div class="navbar-fixed-bottom">
<?php
include 'includes/footer.php';
?>
</div>
    </body>  
</html>
<?php
include 'includes/common.php';
$data="SELECT name FROM teacher where id = $_SESSION[id] ";
$data_query= mysqli_query($con, $data) or die(mysqli_error($con));
$name = mysqli_fetch_array($data_query);
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">RVITians</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-user"></span>  <?php echo $name['name'];?></a></li>
               <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
            </ul>
        </div>
    </div>
</div>

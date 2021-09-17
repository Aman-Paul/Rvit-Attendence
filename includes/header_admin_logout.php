<?php
include 'includes/common.php';
$data="SELECT name FROM admin where id = $_SESSION[id] ";
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
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $name['name'];?></a></li>
                <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-lightbox="inline"><span class="glyphicon glyphicon-arrow-up"></span> Promote</a></li>
                <li><a href="updatesub.php"><span class="glyphicon glyphicon-upload"></span> Update</a></li>
               <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
            </ul>
        </div>
    </div>
</div>


<?php
include 'includes/promote_modal.php';
?>


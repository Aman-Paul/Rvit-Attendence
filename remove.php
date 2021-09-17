<?php
require 'includes/common.php';

?>
<!DOCTYPE html>
<html>
    <?php
    include 'includes/head.php';
    ?>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container" id="enter-attendAnce" style="margin-top: 170px">
            <div class="row">
                <div class="jumbotron col-lg-5">
                    <div class="row">
                        <div class="col-lg-10">
                            <h3 class="text-center">REMOVE TEACHER</h3>
                            <form method="post" action="login_script.php">
                                <div class="form-group">
                                    <input type="number" name="id" class="form-control" placeholder="Enter your id">
                                </div>
                                <div class="form-group">
                                  <input type="number" name="DOB" class="form-control" placeholder="DD\MM\YYYY">  
                                </div>
                                <div class="form-group">
                                    <button type="remove" class="btn btn-danger btn-block ">Remove</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="jumbotron col-lg-5" style="margin-left: auto">
                    <div class="row">
                        <div class="col-lg-10">
                            <h3 class="text-center">REMOVE STUDENT</h3>
                            <form method="post" action="login_script.php">
                                <div class="form-group">
                                    <input type="number" name="id" class="form-control" placeholder="Enter your id">
                                </div>
                                <div class="form-group">
                                  <input type="number" name="DOB" class="form-control" placeholder="DD\MM\YYYY">  
                                </div>
                                <div class="form-group">
                                    <button type="remove" class="btn btn-danger btn-block">Remove</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom">
<?php
include 'includes/footer.php';
?>
</div>
    </body>
</html>

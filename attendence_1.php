<?php
require 'includes/common.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <?php
    include 'includes/head.php';
    ?>
    <body id="banner-image-4">
        <div id="banner-col">
        <?php
        include 'includes/header_teacher.php';
        ?>
        <div class="container" style="margin-top:170px">
            <div class="row">
            <div class="jumbotron col-lg-5">
                <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="text-center">ENTER ATTENDANCE</h3>
                                    <form method="post" action="enter_attendence.php">
                                        <div class="form-group">
                                            <select class="form-control" name="year">
                                                <option>Select Year</option>
                                                <option value="2">Second Year</option>
                                                <option value="3">Third Year</option>
                                                <option value="4">Fourth Year</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="sub" class="form-control" placeholder="Enter the subject code in block letters" required="true">
                                            </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block">Submit</button>
                                        </div>
                                    </form>
                               </div>
                </div>
            </div>
                <div class="col-lg-2"></div>
                <div class="jumbotron col-lg-5" style="margin-left:auto">
                <div class="row">
                                <div class="col-lg-10">
                             <h3 class="text-center">SHOW ATTENDANCE</h3>

                             <form method="post" action="sub_attendence.php">
                                        <div class="form-group">
                                            <select class="form-control" name="year" required>
                                                <a href="sub_attendence.php"></a>
                                                <option value="">select year</option>
                                                <option value="2">Second Year</option>
                                                <option value="3">Third Year</option>
                                                <option value="4">Fourth Year</option>
                                                </select>
                                            </div>
                                       
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block">Submit</button>
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
        </div>
    </body>
</html>


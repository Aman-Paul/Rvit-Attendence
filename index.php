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
        <div id="banner-image">
            <div class="container">
                <br>
                <h2>Attendence Portal Of CSE Department</h2>
            </div>
            <div class="container-fluid">
                <center>
                    <div id="banner-content">
                        <h3>LOG IN</h3>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <form method="post" action="login_script.php">
                                        <div class="form-group">
                                            <input type="number" name="roll_no" class="form-control" placeholder="Enter your Roll No." required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required="true">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </center>
            </div>
        </div>
    </body>
</html>
<?php
include 'includes/footer.php';
?>
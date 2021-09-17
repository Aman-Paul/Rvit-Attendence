<?php
require 'includes/header.php';
?>


<!DOCTYPE html>
<html>
    <?php
    include 'includes/head.php';
    ?>
    <body id="banner-image-2">
        <div id="banner-col">
        <div class="container">
            <div class="row row-style">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default" id="admin-panel">
                        <div class="panel-heading">
                            <h3>ADMIN LOG IN</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="admin_login_script.php">
                                <div class="form-group">
                                    <input type="number" name="id" class="form-control" placeholder="Enter your ID" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required="true">
                                </div>
                                <div class="panel-footer">
                                     <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block">Submit</button>
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom">
        <?php
        require 'includes/footer.php';
        ?>
        </div>
        </div>
    </body>
</html>

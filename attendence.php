<!DOCTYPE html>
<html>+
    <?php
    include 'includes/head.php';
    include 'includes/header.php';
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Students Attendence Result</h4>
                </div>
                <div class="row">
                    <div class="col-xs-2">ROll NO</div>
                    <div class="col-xs-10"><?php echo $row['id']; ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">NAME</div>
                    <div class="col-xs-10"><?php echo $row['name']; ?></div>
                </div>
            </div>
        </div>
    </body>
</html>
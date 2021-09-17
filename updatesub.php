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
        include 'includes/header_admin_logout_update.php';
        ?>
       <div class="container" style="margin-top:150px">
            <div class="row">
            <div class="jumbotron col-lg-5">
                <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="text-center" style="margin-left:50px">UPDATE SUBJECT</h3>
                                    <form method="post" action="updatesub_1.php" style="margin-left:50px">
                                        <div class="form-group">
                                             <select class="form-control">
                                                <option>Select Year</option>
                                                <option>First Year</option>
                                                <option>Second Year</option>
                                                <option>Third Year</option>
                                                <option>Fourth Year</option>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="subject" name="subject" class="form-control" placeholder="subject">
                                        </div>
                                        <div class="form-group">
                                            <button type="update" class="btn btn-danger btn-block">update</button>
                                        </div>
                                    </form>
                               </div>
                </div>
            </div>
                <div class="col-lg-2"></div>
                <div class="jumbotron col-lg-5" style="margin-left:auto">
                <div class="row">
                                <div class="col-lg-10">
                             <h3 class="text-center" style="margin-left:50px">REMOVE SUBJECT</h3>

                                    <form method="post" action="login_script.php"style="margin-left:50px">
                                        <div class="form-group">
                                             <select class="form-control">
                                                <option>Select Year</option>
                                                <option>First Year</option>
                                                <option>Second Year</option>
                                                <option>Third Year</option>
                                                <option>Fourth Year</option>
                                                </select>
                                            </div>
                                        <div class="form-group">
                                            <input type="subject" name="subject" class="form-control" placeholder="subject">
                                        </div>
                                        <div class="form-group">
                                            <button type="Remove" class="btn btn-danger btn-block">Remove</button>
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




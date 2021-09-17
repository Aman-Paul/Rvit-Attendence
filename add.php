<?php
include 'includes/common.php';
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
        include 'includes/header_admin_logout.php';
        ?>
        <div class="container" style="text-align: center; margin-top: 8%">
            <div style="margin: 1%; padding: 1%; background-color: #ececec">
                <h3 style="color: #262626;"><b>ADD TECHER AND STUDENT</b></h3>
            </div>
        </div>
       <div class="container" style="margin-top:1%;">
            <div class="row">
            <div class="jumbotron col-lg-5">
                <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="text-center" style="color: #262626;">ADD TEACHER</h3>
                                    <form method="post" action="add_teacher_script.php" style="margin-left:50px">
                                        <div class="form-group">
                                            <input type="id" name="id" class="form-control" placeholder="Enter ID" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="Name" name="name" class="form-control" placeholder="Enter name">
                                      </div>
                                        <div class="form-group">
                                            <input type="Password" name="password" class="form-control" placeholder="Enter Password" required="true">  
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
                                    <h3 class="text-center" style="color: #262626;">ADD STUDENT</h3>

                                    <form method="post" action="add_student_script.php"style="margin-left:50px">
                                        <div class="form-group">
                                            <input type="Roll no" name="Rollno" class="form-control" placeholder="Enter Roll no" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="Name" name="Name" class="form-control" placeholder="Enter student Name" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="Password" class="form-control" placeholder="Enter Password" required="true">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="year" required="true">
                                                 <option>Select Year</option>
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
                <div class="container" style="text-align: center; margin-top: 1%">
            <div style="margin: 1%; padding: 1%; background-color: #ececec">
                <h3 style="color:#262626;"><b>REMOVE TECHER AND STUDENT</b></h3>
            </div>
        </div>
           <div class="container" style="margin-top:1%; margin-bottom: 4%">
            <div class="row">
                <div class="jumbotron col-lg-5">
                <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="text-center" style="color:#262626;">REMOVE TEACHER</h3>
                                    <form method="post" action="add_teacher_script.php" style="margin-left:50px">
                                        <div class="form-group">
                                            <input type="id" name="t_id" class="form-control" placeholder="Enter ID" required="true">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block">Remove</button>
                                        </div>
                                    </form>
                               </div>
                </div>
            </div>
                <div class="jumbotron col-lg-5" style="margin-left:16%;">
                <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="text-center" style="color:#262626;">REMOVE STUDENT</h3>

                                    <form method="post" action="add_student_script.php"style="margin-left:50px">
                                        <div class="form-group">
                                            <input type="Roll no" name="rn" class="form-control" placeholder="Enter Roll no" required="true">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="yr" required="true">
                                                 <option>Select Year</option>
                                                 <option value="2">Second Year</option>
                                                 <option value="3">Third Year</option>
                                                 <option value="4">Fourth Year</option>
                                                </select>
                                            </div>
                                       
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block">Remove</button>
                                        </div>
                                    </form>
                               </div>
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


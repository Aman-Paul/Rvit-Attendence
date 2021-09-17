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
        include 'includes/header_teacher.php';
        $years=$_POST['year'];
        ?>
        <div class="container" style="margin-top:170px;">
            <div class="row">
            <div class="jumbotron col-lg-5">
                <div class="row">
                                <div class="col-lg-10">
                                    <h4 style="text-align:center;" class="text-center">SUBJECT WISE ATTENDENCE</h4>
                                    <form method="POST" action="teacher_insert_attendence.php">
                                        <div class="form-group">
                                            <input type="hidden" name="teacher_name" value="<?php echo $name['name']; ?>">
                                            <input type="hidden" name="year" value="<?php echo $years; ?>">
                                         <select class="form-control" value="" name="subject" required>
                                                 <option value="">select Subject</option>
                                                 <?php if($years=="2"){
                                                     echo "<option value='sub21'>Sub21</option>
                                                <option value='sub22'>Sub22</option>
                                                <option value='sub23'>Sub23</option>
                                                <option value='sub24'>Sub24</option>
                                                <option value='sub25'>Sub25</option>";
                                                 }else if($years=="3"){
                                                     echo "<option value='sub31'>Sub31</option>
                                                <option value='sub32'>Sub32</option>
                                                <option value='sub22'>Sub33</option>
                                                <option value='sub34'>Sub34</option>
                                                <option value='sub35'>Sub35</option>";
                                                 }else{
                                                     echo "<option value='sub41'>Sub41</option>
                                                <option value='sub42'>Sub42</option>
                                                <option value='sub43'>Sub43</option>
                                                <option value='sub44'>Sub44</option>
                                                <option value='sub45'>Sub45</option>";
                                                 } ?>
                                                 
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="total_lectures" value="" class="form-control" placeholder="Enter total lectures" required="true">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
                                        </div>  
                                    </form>
                               </div>
                </div>
            </div>
                <div class="col-lg-2"></div>
                <div class="jumbotron col-lg-5" style="margin-left:auto">
                <div class="row">
                                <div class="col-lg-10">
                             <h4 class="text-center">TOTAL ATTENDENCE</h4>

                                    <form>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block">click here</button>
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


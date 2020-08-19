<?php 
ob_start();
session_start();
if(!isset($_SESSION['udise'])){
header('Location:login.php');
}

$udise = $_SESSION['udise'];
$schoolName = $_SESSION['schoolName'];
$taluka = $_SESSION['taluka'] ;
$id = $_SESSION['id'];
$class = $_SESSION['class'];
$divi = $_SESSION['divi'];
require_once('inc/top.php');
?>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include('inc/navbar.php');?>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <form method="post">
                        <div align="center">
                            <a class="btn btn-primary text-white" href="index.php">Click Here to Change Class & Division</a></div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label class="text-danger">Taluka</label>
                                <input type="text" class="form-control" style="border: 1px solid black; padding-left:10px;" value="<?php echo $taluka;?>" name="taluka" readonly>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="text-danger">UDISE</label>
                                <input type="text" class="form-control" style="border: 1px solid black; padding-left:10px;" value="<?php echo $udise;?>" name="udise" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-danger">School Name</label>
                                <input type="text" class="form-control" style="border: 1px solid black; padding-left:10px;" value="<?php echo $schoolName;?>" name="school_name" readonly>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="text-danger">Class</label>
                                <input type="text" class="form-control" style="border: 1px solid black; padding-left:10px;" value="<?php echo $class;?>" name="class" readonly>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="text-danger">Division</label>
                                <input type="text" class="form-control" style="border: 1px solid black; padding-left:10px;" value="<?php echo $divi;?>" name="division" readonly>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="text-danger">Roll No</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="roll_no" required oninvalid="this.setCustomValidity('Please Select Roll No ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <?php
                                    for($i=1; $i<150; $i++){
                                    ?>
                                    <option value="<?php echo $i ;?>"><?php echo $i ;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label class="text-danger">Student Name</label>
                                <input type="text" class="form-control" placeholder="Student Name " style="border: 1px solid black; padding-left:10px;" required name="stu_name" oninvalid="this.setCustomValidity('Please Write Student Name ')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group col-md-1">
                                <label class="text-danger">CWSN </label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="cswn" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="text-danger">Presenty </label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="presnty" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="PRESENT">PRESENT</option>
                                    <option value="ABSENT">ABSENT</option>
                                </select>
                            </div>

                        </div>
                        <hr>
                        <h2 class="bg-primary  text-white text-center">अध्ययन स्तर निश्चिती टप्पा- 1 -( वर्ग 1 ते 8)- भाषा व गणित</h2>

                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="text-danger">भाषा स्तर निश्चिती (जो सतह पर हो उसी सतह का इनतेखाब किजिये) </label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="languStage" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="अक्षर वाचतो">अक्षर वाचतो (हरफी सतह)</option>
                                    <option value="शब्द वाचतो">शब्द वाचतो (लफजी सतह)</option>
                                    <option value="उतारा वाचतो">उतारा वाचतो (एकतेबास की सतह)</option>
                                    <option value="समजपूर्वक वाचन">समजपूर्वक वाचन ( तफहिम के साथ एकतेबास पढणे की सलाहियत)</option>
                                    <option value="भाषा प्रारंभिक स्तर (ज्याला वरीलपैकी काहीही जमत नाही.)">भाषा प्रारंभिक स्तर (ज्याला वरीलपैकी काहीही जमत नाही.)</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>
                            <!--<div class="form-group col-md-3">
                                <label class="text-danger">संख्याज्ञान (0 ते 9 )(आदाद का इलम) </label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="mathStageFirst" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  (FOR ABSENT STUDENT ONLY)">लागू नाही (FOR ABSENT STUDENT ONLY)</option>
                                </select>
                            </div>-->
                            <div class="form-group col-md-3">
                                <label class="text-danger">संख्याज्ञान (आदाद का इलम)?(वर्ग 1 ते 8 साठी)</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="mathStageSec" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-danger">बेरीज क्षमत (जमा की सलाहीयत)(वर्ग 1 ते 8 साठी)</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="addStage" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-danger">वजाबाकी क्षमता (तफरीक की सलाहीयत)(वर्ग 1 ते 8 साठी)</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="subStage" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-danger">गुणाकार क्षमता(जरब की सलाहीयत)(वर्ग 3 ते 8 साठी)</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="multiStage" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-danger">भागाकार क्षमता (तकसीम की सलाहीयत)(वर्ग 3 ते 8 साठी)</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="diviStage" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-danger">गणित प्रारंभिक स्तरावर आहे ? ( तमाम सवालात अगर न आये तो बच्चे को इस सतह पर रखें.)</label>
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="mathStartStage" required oninvalid="this.setCustomValidity('Please Select One Options ')" oninput="setCustomValidity('')">
                                    <option value="">Please Select </option>
                                    <option value="होय">होय</option>
                                    <option value="नाही">नाही</option>
                                    <option value="लागू नाही  ">लागू नाही </option>
                                    <option value="FOR ABSENT STUDENT ONLY">FOR ABSENT STUDENT ONLY</option>
                                </select>
                            </div>

                        </div>
                        <hr>
                        <div align="center">
                            <button type="submit" class="btn btn-secondary" name="submit">Add Student</button></div>
                        <div style="margin-top:-2px;">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Resp -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-4151366218309776"
                                 data-ad-slot="1545253489"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div><hr>
                        <div >
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Resp -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-4151366218309776"
                                 data-ad-slot="1545253489"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div><hr>
                        <div >
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Resp -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-4151366218309776"
                                 data-ad-slot="1545253489"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>


            <!--------------------Footer---------------------------------->
            <div class="container-fluid">
                <div class="row bg-dark" style="padding-top:20px;">
                    <?php include('inc/footer.php');?>
                </div>
            </div>
            <!--------------------Footer---------------------------------->
        </div>

        </html>
        <?php
    if (isset($_POST['submit'])){
    $taluka = $_POST['taluka'];
    $udise = $_POST['udise'];
    $school_name = $_POST['school_name'];
    $class = $_POST['class'];
    $division = $_POST['division'];
    $roll_no = $_POST['roll_no'];
    $stu_name = $_POST['stu_name'];
    $cswn = $_POST['cswn'];
    $presnty = $_POST['presnty'];
    $languStage = $_POST['languStage'];
    $mathStageSec = $_POST['mathStageSec'];
    $addStage = $_POST['addStage'];
    $subStage = $_POST['subStage'];
    $multiStage = $_POST['multiStage'];
    $diviStage = $_POST['diviStage'];
    $mathStartStage = $_POST['mathStartStage'];
        
        
    echo $insert = "INSERT INTO `studentdata`( `taluka`,`schoolId`, `udise`, `school_name`, `class`, `division`, `roll_no`, `stu_name`, `cswn`, `presnty`, `languStage`,  `mathStageSec`, `addStage`, `subStage`, `multiStage`, `diviStage`, `mathStartStage`) VALUES    ('$taluka','$id','$udise','$school_name','$class','$division','$roll_no','$stu_name','$cswn','$presnty','$languStage','$mathStageSec','$addStage','$subStage','$multiStage','$diviStage','$mathStartStage')" ;  
        
    $insert_pro = mysqli_query($con,$insert);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, You have added a new Student!')</script>";
	   echo"<script>window.open('addStudent.php','_self')</script>";
        }
    }
    ?>
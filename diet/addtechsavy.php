<?php 
$page_title = "TechSavey Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  च्या अधिकृत वेबसाइट वर आजच  आपले नाव  तंत्रस्नेही  म्हणून नोंदणी करा  , संतोष केंद्रे  IT विभाग  नांदेड   ";
include('inc/top.php');

?>

<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/navbar.php');?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-8">
            <h2 class="text-center bg-primary text-white">तंत्रस्नेही शिक्षक नोंदणी करा </h2>
            <div id="shareIconsCountInside" align="center"></div>
            <hr>
            <div align="center">
               <div align="center">
                    
                </div>
                </div>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">पूर्ण नाव </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="तंत्रस्नेही शिक्षकाचे संपूर्ण नाव " name="name" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">ई-मेल </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="तंत्रस्नेही शिक्षकाचे ई-मेल" name="email" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">मोबाईल क्र </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="तंत्रस्नेही शिक्षकाचे मोबाईल क्" name="mobile" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">शाळेचे नाव </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="शाळेचे नाव लिहा " name="school" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">तालुका </label>
                    <div class="col-sm-10">
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="taluka">
                            <?php echo get_option_list('taluka','id','name');?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">लिंग </label>
                    <div class="col-sm-10 ">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="male"> पुरुष
                            </label>

                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="female"> स्त्री
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">आपली संगणकातील कौशल्य निवडा </label>
                    <div class="col-sm-10">
                        <?php
                                    $subject = "SELECT * FROM subject ";
                                    $runSubject = mysqli_query($con, $subject);
                                    while($rowSubject = mysqli_fetch_array($runSubject)){
                                            $id = $rowSubject['id'];
                                            $subjectName = $rowSubject['subjectName'];

                                    ?>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sub[]" value="<?php echo $subjectName;?>"> <?php echo $subjectName;?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <div align="center">
                <div align="center">
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
                </div>
                    </div>
                </div>

            </form>

        </div>
        <div class="col-md-4">
            <h2 class="text-white text-center bg-secondary">IT & Software Entrepreneurs</h2>
            <div class="row">
                <div class="col-md-4">
                <img class="img-fluid" src="images/steve-jobs.jpg" style="height:100px; width:100%;">
                </div>
                <div class="col-md-8">
                <p class="text-danger">Steven Paul Jobs</p>
                ( February 24, 1955 – October 5, 2011) 
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-4">
                <img class="img-fluid" src="images/bill-gates.jpg" style="height:100px; width:100%;">
                </div>
                <div class="col-md-8">
                <p class="text-danger">William Henry Gates III ( Bill Gates )</p>
                (  October 28, 1955) 
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-4">
                <img class="img-fluid" src="images/larry-page.jpg" style="height:100px; width:100%;">
                </div>
                <div class="col-md-8">
                <p class="text-danger">Lawrence Edward Page</p>
                (  March 26, 1973) 
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-4">
                <img class="img-fluid" src="images/sundar-pichai.jpg" style="height:100px; width:100%;">
                </div>
                <div class="col-md-8">
                <p class="text-danger">Pichai Sundararajan </p>
                (  July 12, 1972) 
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-4">
                <img class="img-fluid" src="images/n-r-narayana-murthy.jpg" style="height:100px; width:100%;">
                </div>
                <div class="col-md-8">
                <p class="text-danger">Nagavara Ramarao Narayana Murthy </p>
                (  20 August, 1946) 
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php') ?>
        </div>
    </div>
    <!--------------------Footer---------------------------------->

</div>
</body>

</html>
<?php
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];      
      $school = $_POST['school'];
      $taluka = $_POST['taluka'];
      $gender = $_POST['gender'];
      $sub = implode(",",$_POST['sub']); 
      
      $insert = "INSERT INTO teacher 
      (name,email,mobile,school,taluka,gender,skill,Date,status)
      VALUES ('$name','$email','$mobile','$school','$taluka','$gender','$sub',NOW(),'Pending')";
      
      $insert_pro = mysqli_query($con,$insert);
      
      if($insert_pro){
          
          
	   echo"<script>alert('धन्यवाद , आपण तंत्रस्न्हेही  म्हणून   आपले नाव नोंदणी  केली आहे,')</script>";
	   echo"<script>window.open('searchtechnoteacherinnanded.php','_self')</script>";
        }
  } 
    
?>
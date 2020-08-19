<?php 
$page_title = "Digital School Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  च्या अधिकृत वेबसाइट वर आजच  आपली  डिजिटल शाळा  नोंदणी  करा   , संतोष केंद्रे  IT विभाग  नांदेड   ";
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
            <h2 class="text-center bg-primary text-white">आपली डिजिटल शाळा नोंदणी करा </h2>
            <div id="shareIconsCountInside" align="center"></div>
            <div align="center">
                
            </div>
            <hr>
            <div align="center">
               
                </div>
            <form method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="text-danger">मु  अ  चे पूर्ण  नाव </label>
                        <input type="text" class="form-control"  placeholder="मु  अ  चे पूर्ण  नाव  लिहा " style="border: 1px solid black; padding-left:10px;" required name="name">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="text-danger">शाळेचे पूर्ण  नाव </label>
                        <input type="text" class="form-control"  placeholder="शाळेचे पूर्ण  नाव   लिहा " style="border: 1px solid black; padding-left:10px;" required name="school">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="text-danger">तालुका निवडा  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="taluka">
                            <?php echo get_option_list('taluka','id','name');?>
                        </select>
                    </div>
                </div><hr>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label class="text-danger">मु  अ मोबाइल क्रमांक  </label>
                        <input type="text" class="form-control"  placeholder="मोबाइल क्रमांक  लिहा " style="border: 1px solid black; padding-left:10px;" required name="mobile">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">संगणकांची  संख्या </label>
                        <input type="text" class="form-control"  placeholder="संगणकांची  संख्या " style="border: 1px solid black; padding-left:10px;" required name="computer">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">प्रोजेक्टर  ची   संख्या  </label>
                        <input type="text" class="form-control"  placeholder="प्रोजेक्टर  ची  संख्या " style="border: 1px solid black; padding-left:10px;" required name="projector">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">प्रिंटर  ची   संख्या  </label>
                        <input type="text" class="form-control"  placeholder="प्रिंटर  ची  संख्या  " style="border: 1px solid black; padding-left:10px;" required name="printer">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">प्रोजेक्टर  खोल्या ची संख्या  </label>
                        <input type="text" class="form-control"  placeholder="प्रोजेक्टर  खोल्या ची संख्या   " style="border: 1px solid black; padding-left:10px;" required name="room">
                    </div>
                     <div class="form-group col-md-2">
                        <label class="text-danger">इंटरनेट  सुविधा  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="internet">
                            <option value="आहे">आहे </option>
                            <option value="नाही">नाही </option>
                        </select>
                    </div>
                    
                </div><hr>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label class="text-danger">रोजचा   सरासरी  तास वापर   </label>
                        <input type="text" class="form-control"  placeholder="तासांची सख्या  लिहा  " style="border: 1px solid black; padding-left:10px;" required name="use">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">ऑडिओ  सिस्टिम  सुविधा </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="audio">
                            <option value="आहे ">आहे </option>
                            <option value="नाही">नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">तंत्रस्न्हेही प्रशिक्षित  आहेत  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="isTrained">
                            <option value="होय">होय  </option>
                            <option value="नाही">नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">तंत्रस्नेही प्रशिक्षणाची  गरज  आहे का ?</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="training">
                            <option value="होय">होय  </option>
                            <option value="नाही">नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">इन्व्हर्टर  ची सुविधा  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="inverter">
                            <option value="आहे ">आहे </option>
                            <option value="नाही">नाही </option>
                        </select>
                    </div>
                    
                </div><hr>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="text-danger">आपल्या डिजिटल शाळेविषयी माहिती   </label>
                        <textarea class="form-control" style="border: 1px solid black; padding-left:10px;" rows="3" name="opinion"></textarea> 
                    </div>
                </div><hr>
                <button type="submit" class="btn btn-secondary col-md-5 pull-right" name="submit">Submit</button>
                <div align="center">

                    </div>
            </form>
        </div>
        <div class="col-md-4">
            <div align="center">
                <h4 class="text-secondary">या  संकेतस्थळाचा  वापर  कसा करावा  ?</h4>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yS_lZIjyQ9A?rel=0" allowfullscreen></iframe>
            </div><br>
                <hr><h4 class="text-secondary">DIECPD च्या  अधिकृत  Youtube  चॅनेल  भेट द्या </h4>
             <a href="https://www.youtube.com/channel/UCC4p2ZX4hSkYHv5KPwWbMYg?sub_confirmation=1" class="btn btn-danger text-white" target="_blank"><i class="fa fa-youtube text-white"></i> Youtube</a>
            <a href="" class="btn btn-primary text-white" target="_blank"><i class="fa fa-facebook text-white"></i> Facebook</a>
            </div><hr>
            <h3 class="bg-primary text-white text-center">महत्वाची  संकेत स्थळे </h3>
            <div class="list-group">
                <a href="https://www.maharashtra.gov.in/1125/Home" class="list-group-item list-group-item-action ">महाराष्ट्र  शासन </a>
                <a href="http://www.mscert.org.in/" class="list-group-item list-group-item-action">महाराष्ट्र राज्य शैक्षणिक संशोधन  व प्रशिक्षण परिषद , पुणे </a>
                <a href="https://www.yashada.org/" class="list-group-item list-group-item-action">यशवंतराव  चव्हाण विकास प्रशासन प्रबोधिनी </a>
                <a href="http://www.nuepa.org/New/Index.aspx" class="list-group-item list-group-item-action">NUEPA</a>
                <a href="https://www.mahahsscboard.maharashtra.gov.in/" class="list-group-item list-group-item-action disabled">महाराष्ट्र राज्य माध्यमिक  आणि उच्च माध्यमिक शिक्षण  मंडळ पुणे </a>
                <a href="http://www.dhepune.gov.in/" class="list-group-item list-group-item-action disabled"> उच्य शिक्षण  संचानालय , पुणे </a>
                <a href="https://nanded.gov.in/" class="list-group-item list-group-item-action disabled">जिल्हाअधीकारी कार्यालय ,नांदेड </a>
                <a href="http://zpnanded.in/cms/" class="list-group-item list-group-item-action disabled">जिल्हा परिषद , नांदेड </a>
                <a href="https://www.nwcmc.gov.in/" class="list-group-item list-group-item-action disabled">नांदेड  वाघाला महानगर पालिका , नांदेड </a>
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
      $school = $_POST['school'];
      $taluka = $_POST['taluka'];      
      $mobile = $_POST['mobile'];
      $computer = $_POST['computer'];
      $projector = $_POST['projector'];
      $printer = $_POST['printer'];
      $room = $_POST['room'];
      $internet = $_POST['internet'];
      $use = $_POST['use'];
      $audio = $_POST['audio'];
      $isTrained = $_POST['isTrained'];
      $training = $_POST['training'];
      $opinion = $_POST['opinion'];
      $inverter = $_POST['inverter'];
      
      
       echo 
           $insert = "INSERT INTO digital  (name,school,taluka,mobile,computer,projector,printer,room,internet,hour,audio,isTrained,training,inverter,opinion,status,date) VALUES ('$name','$school','$taluka','$mobile','$computer','$projector','$printer','$room','$internet','$use','$audio','$isTrained','$training','$inverter','$opinion','Pending',NOW())";
      
      $insert_pro = mysqli_query($con,$insert);
      
      if($insert_pro){
          
	   echo"<script>alert('धन्यवाद , आपण आपली शाळा  नोंदणी  केली आहे, ')</script>";
	   echo"<script>window.open('searchschool.php','_self')</script>";
        }
      else {
          echo "Problem";
      }
  } 
    
?>
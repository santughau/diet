<?php 
$page_title = "Help Pages | DICPED NANDED";
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
        <div class="col-md-5">
            <h2 class="text-center bg-primary text-white">मदत केंद्र </h2>
            <div id="shareIconsCountInside" align="center"></div>
            <hr>
            <div align="center">
               <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Responsive -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4151366218309776"
                     data-ad-slot="5270114532"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">पूर्ण नाव </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="शिक्षकाचे संपूर्ण नाव " name="name" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">मोबाईल क्र </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="शिक्षकाचे मोबाईल क्" name="mobile" style="border: 1px solid black; padding-left:10px;" required>
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
                    <label class="col-sm-2 col-form-label text-dark">विषय निवडा </label>
                    <div class="col-sm-10">
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="subject">
                            <option value="Marathi">मराठी </option>
                            <option value="English">इंग्रजी </option>
                            <option value="Math">गणित </option>
                            <option value="Science">विज्ञान </option>
                            <option value="Social Science">सामाजिक शास्त्र</option>
                            <option value="ICT">आय .टी . </option>
                            <option value="ICT">उर्दू </option>
                             <option value="ICT">इतर  </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">प्रश्नाचे स्वरूप लिहा </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="border: 1px solid black; padding-left:10px;" rows="3" name="question"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <div align="center">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- Responsive -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-4151366218309776"
                                 data-ad-slot="5270114532"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                </div>

            </form>

        </div>
        <div class="col-md-7">
            <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action active titlefont"> <i class="fa fa-tachometer" aria-hidden="true"></i>
                    प्रश्नावली </a>
                <?php
                        $record_per_page = 10;
                                $page = '';
                                if (isset($_GET["page"]))
                                {
                                $page = $_GET["page"];
                                }
                                else 
                                {
                                $page = 1;	
                                }
                        $start_from = ($page-1)*$record_per_page;
                           $notice = "SELECT * FROM help WHERE status = 'Approved'  ORDER BY id DESC LIMIT $start_from, $record_per_page  ";
                            $run_notice = mysqli_query($con, $notice);
                            $ia=0;
                            while($row_notice = mysqli_fetch_array($run_notice)){
                                $notice_id = $row_notice['id'];
                                $notice_question =$row_notice['question'];
                                $notice_date = $row_notice['date'];
                                $notice_name = $row_notice['name'];
                                ?>

                <a href="" class="list-group-item list-group-item-action text-justify"> <span class="text-danger">प्रश्न :- </span>  <?php echo $notice_question;?>
                    <hr> <small class="pull-left"><span class="text-secondary">नाव : </span><?php echo $notice_name;?></small>
                    
                    <small class="pull-right"><span class="text-danger">दिनांक : </span><?php echo $notice_date;?></small></a>
                <?php } ?>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination pagination-circle border-0">
                        <?php 
                            $page_query = "select * from help ";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                 echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='help.php?page=".$i."'>".$i."</a></li>";
                                
                                //echo "<li class='".($page==$i ? 'active':'')."'><a href='gallery.php?page=".$i."'>".$i."</a></li>";
                            }
                            ?>
                    </ul>
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
      $mobile = $_POST['mobile'];      
      $school = $_POST['school'];
      $taluka = $_POST['taluka'];
      $subject = $_POST['subject']; 
      $question = $_POST['question']; 
      
      $insert = "INSERT INTO help 
      (name,mobile,school,taluka,subject,question,date,status)
      VALUES ('$name','$mobile','$school','$taluka','$subject','$question',NOW(),'Pending')";
      
      $insert_pro = mysqli_query($con,$insert);
      
      if($insert_pro){
          if($subject == 'Marathi'){
               $to = "santu.ghau@gmail.com";
               $header = "$name<$name>";
               $subject = "$name";
               $message = "<b>Name:</b> $name \n\n<b>Mobile:</b> $mobile \n\n<b>School:</b> $school \n\n<b>Taluka:</b> $taluka \n\n<b>Question:</b> $question \n\n ";  
               mail($to, $subject, $message, $header);  
             }
          
          if($subject == 'English'){
               $to = "santu.ghau@gmail.com";
               $header = "$name<$name>";
               $subject = "$name";
               $message = "<b>Name:</b> $name \n\n<b>Mobile:</b> $mobile \n\n<b>School:</b> $school \n\n<b>Taluka:</b> $taluka \n\n<b>Question:</b> $question \n\n ";  
               mail($to, $subject, $message, $header);  
             }
          
          if($subject == 'Math'){
               $to = "santu.ghau@gmail.com";
               $header = "$name<$name>";
               $subject = "$name";
               $message = "<b>Name:</b> $name \n\n<b>Mobile:</b> $mobile \n\n<b>School:</b> $school \n\n<b>Taluka:</b> $taluka \n\n<b>Question:</b> $question \n\n ";  
               mail($to, $subject, $message, $header);  
             }
          
          if($subject == 'Science'){
               $to = "santu.ghau@gmail.com";
               $header = "$name<$name>";
               $subject = "$name";
               $message = "<b>Name:</b> $name \n\n<b>Mobile:</b> $mobile \n\n<b>School:</b> $school \n\n<b>Taluka:</b> $taluka \n\n<b>Question:</b> $question \n\n ";  
               mail($to, $subject, $message, $header);  
             }
          
          if($subject == 'Social Science'){
               $to = "santu.ghau@gmail.com";
               $header = "$name<$name>";
               $subject = "$name";
               $message = "<b>Name:</b> $name \n\n<b>Mobile:</b> $mobile \n\n<b>School:</b> $school \n\n<b>Taluka:</b> $taluka \n\n<b>Question:</b> $question \n\n ";  
               mail($to, $subject, $message, $header);  
             }
          
         
          
	   echo"<script>alert('धन्यवाद  ,आम्ही  आपल्या  प्रश्नाचे  उत्तर आपल्या   मोबाईल  वर ५ -७ दिवसात  देण्याचा  प्रयत्न  करतो ')</script>";
	   echo"<script>window.open('help.php','_self')</script>";
        }
  } 
    
?>
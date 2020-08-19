<?php 
$page_title = "Add Youtube Video Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  च्या अधिकृत वेबसाइट वर आपले  youtube वर असलेले video upload  करा जेणे करून नांदेड मधील सर्व  शिक्षकांना उपयोगी होईल   , संतोष केंद्रे  IT विभाग  नांदेड ";
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
        <div class="col-md-6 ">
            <h2 class="bg-primary text-white text-center">शिक्षकांनी आपली तयार केलेले youtube व्हिडिओ येथे टाका </h2>
            <div id="shareIconsCountInside" align="center"></div>
            <hr>
            <div align="center">
                
                </div>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">शिक्षकाचे नाव </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="शिक्षकाचे 

संपूर्ण  नाव लिहा " name="name" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark"> मोबाइल क्र </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder=" शिक्षकाचा मोबाइल क्" name="mobile" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">
विडिओ चे Title  </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="
विडिओ चे Title लिहा " name="title" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">विडिओ चे  लिंक </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="विडिओ चे लिंक लिहा " name="link" style="border: 1px solid black; padding-left:10px;">
                        <span><img src="images/link.jpg" class="img-fluid"> </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">
विषय निवडा </label>
                    <div class="col-sm-10">
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="cat">
                            <?php echo get_option_list('video_cat','id','name');?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <div align="center">
                
                </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-6">
             <h2 class="text-white bg-secondary text-center">Good Thoughts</h2>
            <blockquote class="blockquote">
                <p class="mb-0">“Education is not principal of life, education is life itself.” </p>
                <footer class="blockquote-footer">-John Dewey</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">“The Way Get Started Is To Quit Talking And Begin Doing.” </p>
                <footer class="blockquote-footer">-Walt Disney</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">“The Pessimist Sees Difficulty In Every Opportunity. The Optimist Sees Opportunity In Every Difficulty.” </p>
                <footer class="blockquote-footer">-Winston Churchill</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">“Don’t Let Yesterday Take Up Too Much Of Today.” </p>
                <footer class="blockquote-footer">-Will Rogers</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">“You Learn More From Failure Than From Success. Don’t Let It Stop You. Failure Builds Character.” </p>
                <footer class="blockquote-footer">-Unknown</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">“If You Are Working On Something That You Really Care About, You Don’t Have To Be Pushed. The Vision Pulls You.” </p>
                <footer class="blockquote-footer">-Steve Jobs</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p class="mb-0">“People Who Are Crazy Enough To Think They Can Change The World, Are The Ones Who Do.” </p>
                <footer class="blockquote-footer">-Rob Siltanen</footer>
            </blockquote>
        </div>
    </div>

    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <hr> <?php include('inc/footer.php');?>
        </div>
    </div>
    <!--------------------Footer---------------------------------->

</div>
</body>

</html>

<script src="js/product_filter_level1.js"></script>

<?php
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $mobile = $_POST['mobile'];      
      $title = $_POST['title'];
      $link = $_POST['link'];
      $cat = $_POST['cat'];
      
      $insert = "INSERT INTO video 
      (title,link,cat,name,mobile,status,view,date)
      VALUES ('$title','$link','$cat','$name','$mobile','Pending','0',NOW())";
      
      $insert_pro = mysqli_query($con,$insert);
      
      if($insert_pro){
          
          
	   echo"<script>alert('धन्यवाद , आपण आपली व्हिडिओ  अपलोड  केलेली  आहे 
')</script>";
	   echo"<script>window.open('addvideo.php','_self')</script>";
        }
  } 
    
?>
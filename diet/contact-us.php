<?php 
$page_title = "Contact Us Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  च्या अधिकृत वेबसाइट वर  विविध  शिक्षकांनी  youtube video upload केलेले पहा    , संतोष केंद्रे  IT विभाग  नांदेड";
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
        <div class="col-md-4">
            <h2 class="text-secondary">संपर्क  करा </h2>
            <hr>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark"> नाव </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="आपले संपूर्ण नाव " name="name" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">ई-मेल </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="आपला  ई-मेल लिहा " name="email" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">मोबाइल क्र </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="आपला  मोबाइल क् लिहा" name="mobile" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">पत्ता</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="पत्ता लिहा " name="address" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">Messages</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="textarea2" data-status-message="#counter2" rows="5" cols="100" name="message" style="border: 1px solid black; padding-left:10px;"></textarea>
                        <div id="counter2" class="text-left text-secondary"></div>
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
        <div class="col-md-5">
            <h4 class="text-center text-secondary">गूगल मॅप  वरती आमचा शोध </h4>
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyASSRYOZpuH65YKf2Kyu3ZQV9n2rzOlzn8'></script>
            <div style='overflow:hidden;height:400px;width:100%;'>
                <div id='gmap_canvas' style='height:400px;width:100%;'></div>
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div> <a href='https://indiatvnow.com/'>TV Soap from India</a>
            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=771adbb8393dc2f28fd01595020073d70b7c595e'></script>
            <script type='text/javascript'>
                function init_map() {
                    var myOptions = {
                        zoom: 15,
                        center: new google.maps.LatLng(19.1383, 77.3210),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: new google.maps.LatLng(19.1383, 77.3210)
                    });
                    infowindow = new google.maps.InfoWindow({
                        content: '<strong>Nanded</strong><br>DIET<br>431605 NANDED<br>'
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);
            </script>
        </div>
        <div class="col-md-3">
            <address>
                <h4 class="text-primary">पत्ता </h4>
                <b>प्राचार्य,</b><br>
                जिल्हा शैक्षणिक सातत्यपूर्ण व्यावसायिक  विकास  संस्था  <br>
                श्री  नगर  ,<br>
                नांदेड<br>
                तालुका : नांदेड जिल्हा : नांदेड 431605<br>
                दुरध्वनी क्रमांक : 02462-269600, 254487<br>
               ई-मेल:- diecpdnanded@maa.ac.in<br>

            </address>
        </div>
    </div>
    <hr>

    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
    </div>
    <!--------------------Footer---------------------------------->
</div>
</body>

</html>
<script>
    $(function() {

        $('#textarea2').limitText({
            limit: 500,
            warningLimit: 50
        });
    });
</script>

<?php
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $address = $_POST['address'];
      $message = $_POST['message'];
     
      
      $insert_news = "INSERT INTO contact (contact_name,contact_email,contact_mobile,contact_message,contact_time) VALUES ('$name','$email','$mobile','$address','$message',NOW())";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, Your Message submitted successfully, We will Contact you shortly !')</script>";
	   echo"<script>window.open('contact-us.php','_self')</script>";
        }
  } 
    
?>
<hr>
<div class="col-md-3 text-white">
    <h2 class="text-center">DIECPD नांदेड  </h2>
    <hr>
    <p></p>
    <p class="text-center">© 2019 <a href="www.vinaycomputers.in"> जिल्हा शैक्षणिक सातत्यपूर्ण  व्यावसायिक  विकास संस्था   </a>, All rights reserved</p>
    
</div>
<div class="col-md-3">
    <h4 class="text-white">Menu</h4>

    <ul class="text-white">

        <li><a href="training.php">प्रशिक्षण </a></li>
        <li><a href="addtechsavy.php">तंत्रस्नेही नोंदणी</a></li>
        <li><a href="searchtechnoteacherinnanded.php">तंत्रस्नेही शोधा</a></li>
        <li><a href="download.php">डाउनलोड करा</a></li>
         <li><a href="addvideo.php">व्हिडिओ नोंदणी</a></li>
        <li><a href="viewvideo.php">व्हिडिओ शोधा</a></li>
    </ul>

</div>
<div class="col-md-3">
    <h4 class="text-white">Quick Links</h4>
    <ul class="text-white">
        <li><a href="privacy-policy.php">Privacy Policy</a></li>
        <li><a href="disclaimer.php">Disclamier</a></li>
        <li><a href="termsandcondition.php">Terms & Condition</a></li>
        <li><a href="aboutus.php">About Us</a></li>
    </ul>
    <!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=7110144&style=0009&nbdigits=5&type=ip&initCount=0" title="web page hit counters codes Free" Alt="web page hit counters codes Free"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="" 
                                        target="_blank" style="font-family: ; 
                                        font-size: px; color: #; text-decoration:  ;">                                      
                                        </a>   
                            
   
                            

</div>
<div class="col-md-3 text-white">
    <address>
        <h4 class="text-primary">पत्ता </h4>
        <b>प्राचार्य,</b><br>
        जिल्हा शैक्षणिक सातत्यपूर्ण  व्यावसायिक  विकास संस्था  , <br>
        श्री नगर ,<br>
        नांदेड<br>
        तालुका : नांदेड जिल्हा : नांदेड 431605<br>
        दूरध्वनी  क्रमांक:02462-250676 , <br>
        ई-मेल:- diecpdnanded@maa.ac.in<br>

    </address>
</div>



<script>
    $("#shareIconsCountInside").jsSocials({
        url: window.location.href,
        text: "<?php echo $message ;?>",
        showLabel: false,
        showCount: "inside",
        shares: ["facebook", "email", "whatsapp", "linkedin", "pinterest", "stumbleupon", "twitter", "messenger"]
    });
</script>
<script>
    $(".ranjana").jsSocials({
        url: window.location.href,
        text: "<?php echo $message ;?>",
        showLabel: false,
        showCount: "inside",
        shares: ["facebook", "email", "whatsapp"]
    });
</script>

<script>
    OneSignal.push(function() {
        /* These examples are all valid */
        var isPushSupported = OneSignal.isPushNotificationsSupported();
        if (isPushSupported) {
            // Push notifications are supported
            console.log("Supported");
            OneSignal.isPushNotificationsEnabled(function(isEnabled) {
                if (isEnabled) {
                    console.log("Push notifications are enabled!");
                    OneSignal.getUserId(function(userId) {
                        console.log("OneSignal User ID:", userId);
                        // (Output) OneSignal User ID: 270a35cd-4dda-4b3f-b04e-41d7463a2316    
                    });
                } else {
                    console.log("Push notifications are not enabled yet.");
                    OneSignal.push(function() {
                        OneSignal.showSlidedownPrompt();
                    });
                }
            });
        } else {
            // Push notifications are not supported
            console.log("Not Supported");
        }
    });
</script>



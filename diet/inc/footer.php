<hr>
<div class="col-md-3 text-white">
    <h2 class="text-center">DIET नांदेड  </h2>
    <hr>
    <p></p>
    <p class="text-center">© 2019 <a href="www.vinaycomputers.in"> जिल्हा शिक्षण व प्रशिक्षण संस्था, नांदेड  </a>, All rights reserved</p>
    
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
        
        <li><a href="aboutus.php">from Nanded</a></li>
    </ul>
     
                            
   
                            

</div>
<div class="col-md-3 text-white">
    <address>
        <h4 class="text-primary">पत्ता </h4>
        <b>प्राचार्य,</b><br>
        जिल्हा शिक्षण व प्रशिक्षण  संस्था  , <br>
        श्री नगर ,<br>
        नांदेड<br>
        तालुका : नांदेड जिल्हा : नांदेड 431605
        ई-मेल:- diecpdnanded@maa.ac.in<br>
        ई-मेल:-prin.dietnanded@gmail.com<br>
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
<hr>
<div class="col-md-3 text-white">
    <h2 class="text-center">DIET नांदेड  </h2>
    <hr>
    <p></p>
    <p class="text-center">© 2019 <a href="www.vinaycomputers.in">जिल्हा शैक्षणिक सातत्यपूर्ण व्यासायिक विकास संस्था</a>, All rights reserved</p>
</div>
<div class="col-md-3">
   
</div>
<div class="col-md-3">
    

</div>
<div class="col-md-3 text-white">
    <address>
        <h4 class="text-primary">पत्ता </h4>
        <b>प्राचार्य,</b><br>
        जिल्हा शैक्षणिक सातत्यपूर्ण व्यासायिक विकास संस्था, <br>
        श्री नगर ,<br>
        नांदेड<br>
        तालुका : नांदेड जिल्हा : नांदेड 431605<br>
        दुरध्वनी क्रमांक : 02462-269600, 254487<br>
        ई-मेल:- it@diecpdnanded.in<br>

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
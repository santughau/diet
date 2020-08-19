<?php

    //font-family: 'Sarala', sans-serif;

   // 


$page_title = "Home Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  ची अधिकृत वेबसाइट , संतोष केंद्रे  IT विभाग  नांदेड ";
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
        <div class="col-md-6">
            <form action="notification.php" method="post">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="hidden" name="app_id" value="c255b8da-5b06-44ba-8498-ab7e0cc62273">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="heading" class="form-control" name="name" style="border: 1px solid black; padding-left:10px;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Full Name</label>
                        <div class="col-sm-10">
                            <textarea name="message" class="form-control" name="name" style="border: 1px solid black; padding-left:10px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="send_all">Submit</button>
                    </div>
                </div>

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
</body>

</html>
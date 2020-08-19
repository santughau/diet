<?php 
$page_title = "Download Pages | DIECPD NANDED";
$page_key = "diecpd-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "diecpd-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DIECPD  नांदेड  च्या अधिकृत वेबसाइट वरून विविध  Profarma , Excel , PDF  फाईल डाउनलोड  करा  , संतोष केंद्रे  IT विभाग  नांदेड ";
include('inc/top.php');

if(isset($_GET['id'])){
        $id = $_GET['id'];
        $download = "SELECT * FROM download WHERE id = '$id' ";
        $run_download = mysqli_query($con, $download);
        $row_download = mysqli_fetch_array($run_download);
        $download_id = $row_download['id'];
        $download_date = $row_download['date'];
        $download_subject = $row_download['subject'];
        $download_link = $row_download['link'];
        
}

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
            <h2 class="text-center bg-primary text-white"> <?php echo $download_subject;?> </h2>
            <hr>
            <div align="center">
            <a class="btn btn-secondary" href="<?php echo $download_link;?>" target="_blank">Download Now !</a>
            </div>
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
             <div class="table-responsive">
                    
                </div>
           <br><br> 
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
            <hr>
        </div>
        <div class="col-md-4">

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
<script>
    $(document).ready(function(){
    $('#table2excel').DataTable();
});    
</script>
<script>
    $("#but").click(function() {
        $("#table2excel").table2excel({
            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
            filename: "download_list.xls" //do not include extension
        });
    });
</script>
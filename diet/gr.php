<?php 
$page_title = "GR Pages | DICPED NANDED";
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
        <div class="col-md-12 text-justify">
            <h2 class="bg-dark text-white text-center">शासकीय निर्णय </h2>
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
            <div class="table-responsive">
                <table class="table table-bordered " id="table2excel">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">अ  क्र </th>
                            <th scope="col">विषय  </th>
                            <th scope="col">लिंक </th>
                            <th scope="col">माहिती शेअर करा  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $gr = "SELECT * FROM gr ORDER BY id DESC ";
                            $run_gr = mysqli_query($con, $gr);
                            $ia=0;
                            while($row_gr = mysqli_fetch_array($run_gr)){
                                $gr_id = $row_gr['id'];
                                $gr_subject = $row_gr['subject'];
                                $gr_link = $row_gr['link']; 
                                $ia=$ia+1;
                                ?>
                        <tr class="">
                            <td><?php echo $ia;?></td>
                            <td><?php echo $gr_subject;?></td>
                            <td><a href="<?php echo $gr_link;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            <td>
                                <div class="ranjana"></div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <hr>
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
<script>
    $(document).ready(function() {
        $('#table2excel').DataTable();
    });
</script>
<script>
    $("#but").click(function() {
        $("#table2excel").table2excel({
            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
            filename: "gr_list.xls" //do not include extension
        });
    });
</script>
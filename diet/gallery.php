<?php 
$page_title = "Gallery Pages | DICPED NANDED";
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
        <div class="col-md-8">
            <h2 class="text-center bg-primary text-white"><i class="fa fa-photo"></i> 
छायाचित्रे  </h2>
            <div id="shareIconsCountInside" align="center"></div>
            <hr>
            <div class="row">
                <?php
                                $record_per_page = 24;
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

                                 $member_info = "SELECT * FROM gallery ORDER BY gallery_id DESC LIMIT $start_from, $record_per_page";

                                $member_run = mysqli_query($con,$member_info);
                                while($row=mysqli_fetch_array($member_run)){
                                    $gallery_id = $row['gallery_id'];
                                    $gallery_title = ucwords($row['gallery_title']);
                                    $gallery_image = $row['gallery_image'];
                                    
                               
                                ?>
                <div class="col-md-4 mb-4">
                        <img class="card-img-top" src="images/gallery/<?php echo $gallery_image ;?>" alt="<?php echo $gallery_title;?>" height="200px"/>
                    <hr>
                    <p>
                        <?php echo  $gallery_title;?>
                    </p>
                    <hr>
                </div>
                <?php } ?>

                <div class="col-md-12">
                    <ul class="pagination pagination-circle border-0">
                        <?php 
                            $page_query = "select * from gallery ";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                 echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='gallery.php?page=".$i."'>".$i."</a></li>";
                                
                                //echo "<li class='".($page==$i ? 'active':'')."'><a href='gallery.php?page=".$i."'>".$i."</a></li>";
                            }
                            ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">

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

<?php 
$page_title = "Search Youtube Video Pages | DICPED NANDED";
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
        <div class="col-md-12 alert alert-primary " align="center">
            <h3 class="text-dark">विषयाची निवड  करा </h3>
            <div class="form-check form-check-inline sections" id='filters'>
                <?php
                $cat_query = "SELECT * FROM video_cat  ORDER BY id ASC ";
                $run_cat = mysqli_query($con,$cat_query);
                while($row_cat = mysqli_fetch_array($run_cat)){
                $cat_id = $row_cat['id'];
                $cat_name = $row_cat['name'];
                ?>
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name='colour' id="<?php echo $cat_name;?> " value="<?php echo $cat_name;?>"> <?php echo $cat_name;?>
                </label>
                <?php } ?>
                <button class="btn btn-primary" id='none'> Clear All</button>
            </div>
            <div id="shareIconsCountInside"></div>
        </div>         
        <?php
                $video_querya = "SELECT * FROM video  WHERE status ='approved' ORDER BY id ASC ";
                $run_videoa = mysqli_query($con,$video_querya);
                while($row_videoa = mysqli_fetch_array($run_videoa)){
                $video_id = $row_videoa['id'];
                $video_title = $row_videoa['title'];
                $video_link = $row_videoa['link'];
                $video_cat = $row_videoa['cat'];
                    
                 $cat_queryName = "SELECT * FROM video_cat WHERE id = '$video_cat'  ";
                $run_catName = mysqli_query($con,$cat_queryName);  
                $row_catName = mysqli_fetch_array($run_catName);
                $categoryName = $row_catName['name'];
        ?>
        <div class="col-md-3 grid-products" data-colour='<?php echo $categoryName;?>'>
                <h6 class="text-dark text-justified" ><abbr title="<?php echo $video_title;?>"><?php echo substr($video_title,0,37);?>..</abbr></h6>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_link;?>?rel=0" allowfullscreen></iframe>
            </div><br>            
            

            <a href="videodetails.php?id=<?php echo $video_id;?>" class="btn btn-danger text-white pull-right"><i class="fa fa-youtube"></i> Play Yideo</a>
        </div>
        <?php
              }      
            ?>

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
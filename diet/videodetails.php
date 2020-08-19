<?php 
$page_title = "Principal Pages | DIET NANDED";
$page_key = "DIET NANDED, santosh sontakke, nanded, degloor";
$page_desc = "DIET NANDED, santosh sontakke, nanded, degloor";
$message = "Hi";
include('inc/top.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $video_query = "SELECT * FROM video WHERE id = '$id' ";
    $run_video = mysqli_query($con,$video_query);
    $row_video = mysqli_fetch_array($run_video);
    $video_id = $row_video['id'];
    $video_title = $row_video['title'];
    $video_link = $row_video['link'];
    $video_cat = $row_video['cat'];
    $video_name = $row_video['name'];
    $video_mobile = $row_video['mobile'];
    $video_status = $row_video['status'];
    $video_view = $row_video['view'];
    $newView = $video_view+1;
    
    
     $insert_news = "update video set 
      view = '$newView'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
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

        <div class="col-md-9 ">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_link;?>?rel=0" allowfullscreen></iframe>
            </div><br>
            <h4 class="text-dark text-justified"><?php echo $video_title;?></h4>
            <hr>
            <div class="row">
                <div class="col-md-4 ">
                    Uploaded By : <?php echo $video_name;?>
                </div>
                <div class="col-md-4 ">
                    <b class="text-muted">View from This Page : <?php echo $newView;?></b>
                </div>
                <div class="col-md-4 ">
                    <a href="viewvideo.php" class="btn btn-secondary btn-block red darken-4">मुख्य पान</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-3 ">
            
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
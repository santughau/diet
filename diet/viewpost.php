<?php 
$page_title = "News Pages | DICPED NANDED";
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
        <div class="col-md-9 text-justify">
             <?php
                        $record_per_page = 10;
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
                             $post = "SELECT * FROM post ORDER BY id DESC LIMIT $start_from, $record_per_page";
                            $runpost = mysqli_query($con, $post);
                            $i=0;
                            while($rowpost = mysqli_fetch_array($runpost)){
                                $post_id = $rowpost['id'];
                                $post_title = $rowpost['title'];
                                $post_date = $rowpost['date'];
                                $post_views = $rowpost['views'];
                                $post_postData = $rowpost['postData'];
                                $post_image = $rowpost['image'];                               
                                $i++;
                        ?>
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 ">
                                        <img src="images/post/<?php echo $post_image;?>" style="height:200px;" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <h2 class="bg-primary  text-white"><?php echo $post_title;?></h2>
                                        <small class="text-muted"><b>Date:</b> <?php echo $post_date;?></small>
                                        <small class="text-muted pull-right"><b>Views:</b> <?php echo $post_views;?></small>
                                        <hr>
                                        <p class="text-justify"><?php echo substr($post_postData,0,150);?> ....</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="postdetails.php?id=<?php echo $post_id;?>" class="btn btn-primary">View</a>
                                            </div>
                                            <div class="col-md-8">
                                             <div id="shareIconsCountInside" align="center"></div>   
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div><br>
                <?php } ?>
            <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination pagination-circle border-0">
                            <?php
                                 $page_query = "SELECT * FROM post ";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='viewpost.php?page=".$i."'>".$i."</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <h3 class="bg-secondary text-white text-center">नवीन बातम्या </h3>
             <?php
                        $record_per_page = 10;
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
                             $post = "SELECT * FROM post ORDER BY id DESC LIMIT $start_from, $record_per_page";
                            $runpost = mysqli_query($con, $post);
                            $i=0;
                            while($rowpost = mysqli_fetch_array($runpost)){
                                $post_id = $rowpost['id'];
                                $post_title = $rowpost['title'];
                                $post_date = $rowpost['date'];
                                $post_views = $rowpost['views'];
                                $post_postData = $rowpost['postData'];
                                $post_image = $rowpost['image'];                               
                                $i++;
                        ?>
        <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <img src="images/<?php echo $post_image;?>" style="height:70px;" class="img-fluid">
                         </div>
                        <div class="col-md-8">
                            <h6 class="bg-primary  text-white"><?php echo $post_title;?></h6>
                            
                            <a href="postdetails.php?id=<?php echo $post_id;?>" class="btn btn-danger btn-sm text-white pull-right">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
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
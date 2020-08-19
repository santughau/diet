<?php 
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
        <div class="col-md-8 text-justify">
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
            
                            if(isset($_GET['id'])){
                                $post_id = $_GET['id'];
                                $post = "SELECT * FROM notice";
                                $post .= " WHERE id = '$post_id'";
                            }else{
                                $post = "SELECT * FROM notice ORDER BY id DESC LIMIT $start_from, $record_per_page";
                            }
                     
                             
                            $runpost = mysqli_query($con, $post);
                            $i=0;
                            while($rowpost = mysqli_fetch_array($runpost)){
                                $post_id = $rowpost['id'];
                                $post_title = $rowpost['title'];
                                $post_date = $rowpost['date'];
                                $post_views = $rowpost['views'];
                                $post_data = $rowpost['data'];
                                $newView = $post_views+1;
                                
                                 $insert_news = "update notice set 
                                views = '$newView'
                                    where id = '$post_id'";
                                 $insert_pro = mysqli_query($con, $insert_news);
                        ?>
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">                                   
                                    <div class="col-md-12">
                                        <h2 class="bg-primary  text-white"><?php echo $post_title;?></h2>
                                        <small class="text-muted"><b>Date:</b> <?php echo $post_date;?></small>
                                        <small class="text-muted pull-right"><b>Views:</b> <?php echo $newView;?></small>
                                        <hr>
                                        <p class="text-justify"><?php echo $post_data;?></p>
                                      
                                                    <div style="margin-top:-5px;">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Resp -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-4151366218309776"
                                 data-ad-slot="1545253489"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-12">
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
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination pagination-circle border-0">
                            <?php
                                 $page_query = "SELECT * FROM notice ";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='viewnotice.php?page=".$i."'>".$i."</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="col-md-4">
           
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

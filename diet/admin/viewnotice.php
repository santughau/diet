<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    
    $del_query = "DELETE  FROM notice WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('viewnotice.php','_self')</script>";  
    }
}
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
			<div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                   <?php
                        $record_per_page = 5;
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
                        ?>
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">                                   
                                    <div class="col-md-12">
                                        <h2 class="bg-primary  text-white"><?php echo $post_title;?></h2>
                                        <small class="text-muted"><b>Date:</b> <?php echo $post_date;?></small>
                                        <small class="text-muted pull-right"><b>Views:</b> <?php echo $post_views;?></small>
                                        <hr>
                                        <p class="text-justify"><?php echo $post_data;?> </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                               <a href="editnotice.php?id=<?php echo $post_id;?>" class="btn btn-secondary">Edit</a> 
                                            </div>
                                            <div class="col-md-6">
                                               <a href="viewnotice.php?id=<?php echo $post_id;?>" class="btn btn-danger pull-right">Delete</a> 
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
 </html>
 
 
 
 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

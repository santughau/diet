<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
            $post = "SELECT * FROM post WHERE id = '$edit_id' ";
            $runpost = mysqli_query($con, $post);
            $row=mysqli_fetch_array($runpost);
                                    
            $post_id = $row['id'];
            $post_title = $row['title'];
            $post_date = $row['date'];
            $post_views = $row['views'];
            $post_postData = $row['postData'];
            $post_image = $row['image'];
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
                  <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="bg-primary  text-white"><?php echo $post_title;?></h2>
                                        <small class="text-muted"><b>Date:</b> <?php echo $post_date;?></small>
                                        <small class="text-muted pull-right"><b>Views:</b> <?php echo $post_views;?></small>
                                        <hr>
                                        <img src="../images/post/<?php echo $post_image;?>" style="height:500px;" class="img-fluid" width="100%"><br><br>
                                        <p class="text-justify"><?php echo $post_postData;?> </p>
                                        <a href="post.php" class="btn btn-secondary pull-right">GO Back</a>
                                    </div>
                                </div>
                            </div>
                       </div><hr>
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
<script>
            CKEDITOR.replace( 'prodata' );
</script>
<?php
  if(isset($_POST['update'])){
      $imageTitle = $_POST['imageTitle'];
      $u_image = $_FILES['u_image']['name'];
      $image_tmp = $_FILES['u_image']['tmp_name'];
      if(empty($u_image)){
                $u_image = $u_imagea;
        }
      else{
          $u_image = 'product_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
      }
         
      move_uploaded_file($image_tmp,"../images/gallery/$u_image");
      
  
     $insert_news = "update gallery set 
      gallery_title = '$imageTitle',
      gallery_image = '$u_image'
      where gallery_id = '$edit_id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('Welcome, You have Updated your Gallery !')</script>";
            echo"<script>window.open('gallery.php','_self')</script>";
     
            }
    }

?>

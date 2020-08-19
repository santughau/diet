<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');

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
                        <h1 class="text-center bg-secondary text-white"><i class="fa fa-pencil"></i> Add Posts</h1>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Post Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Post Title Here" name="postTitle" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Post Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file btn btn-secondary" name="u_image" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Post Data</label>
                                <div class="col-sm-10">
                                    <textarea name="prodata"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Image</button>
                                </div>
                            </div>
                        </form>
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
        CKEDITOR.replace('prodata',{
            uiColor: '#9AB8F3'
        });
    </script>
    <?php
  if(isset($_POST['submit'])){
      $postTitle = $_POST['postTitle'];
      $prodata = $_POST['prodata'];
      
      
      $u_image = $_FILES['u_image']['name'];
      $image_tmp = $_FILES['u_image']['tmp_name'];
      
      $u_image = 'product_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
            
      move_uploaded_file($image_tmp,"../images/post/$u_image");
      
      $insert_news = "INSERT INTO post (title,date,views,postData,image) VALUES ('$postTitle',NOW(),'0','$prodata','$u_image')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, You have added a new Image !')</script>";
	   echo"<script>window.open('post.php','_self')</script>";
        }
  } 
    
?>
<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
            $post = "SELECT * FROM notice WHERE id = '$edit_id' ";
            $runpost = mysqli_query($con, $post);
            $row=mysqli_fetch_array($runpost);
                                    
            $post_id = $row['id'];
            $post_title = $row['title'];
            $post_postData = $row['data'];       
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
                  <h1 class="text-center bg-secondary text-white">Edit Post</h1><hr>
                  <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Post Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Post Title Here" name="postTitle" required value="<?php echo $post_title;?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Post Data</label>
                                <div class="col-sm-10">
                                    <textarea name="prodata"><?php echo $post_postData;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="update">Edit Post</button>
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
            CKEDITOR.replace( 'prodata' );
</script>
<?php
  if(isset($_POST['update'])){
      $postTitle = $_POST['postTitle'];
      $prodata = $_POST['prodata'];
      
  
      $insert_news = "update notice set 
      title = '$postTitle',
        data = '$prodata'
      where id = '$edit_id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('Welcome, You have Updated your notice !')</script>";
            echo"<script>window.open('viewnotice.php','_self')</script>";
     
            }
    }

?>

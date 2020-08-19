<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
            $download = "SELECT * FROM gr WHERE id = '$edit_id' ";
            $rundownload = mysqli_query($con, $download);
            $row=mysqli_fetch_array($rundownload);
                                    
            $download_id = $row['id'];
            $gallery_subject = $row['subject'];
            $gallery_link = $row['link'];
            
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
                  <h1 class="text-center bg-secondary text-white">Edit GR</h1><hr>
                     <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Subject Here" name="title" required value="<?php echo $gallery_subject;?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter downloaded Link Here Here" name="link" required value="<?php echo $gallery_link;?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Edit Stuff</button>
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
  if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $link = $_POST['link'];
      
  
     $insert_news = "update gr set 
      subject = '$title',
      link = '$link'
      where id = '$edit_id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('Welcome, You have Updated your Download Stuff !')</script>";
            echo"<script>window.open('grview.php','_self')</script>";
     
            }
    }

?>

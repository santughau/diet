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
                        <h2 class="text-center bg-primary text-white">Add GR Here </h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Subject Here" name="title" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter downloaded Link Here Here" name="link" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Stuff</button>
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
<?php
  if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $link = $_POST['link'];
      
      
      
      $insert_news = "INSERT INTO gr (subject,link) VALUES ('$title','$link')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, You have added a new Gr  here !')</script>";
	   echo"<script>window.open('grview.php','_self')</script>";
        }
  } 
    
?>
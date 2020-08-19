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
                    <img src="images/logo.jpg" class="img-fluid shadow-light"><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Student Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter Student Name" name="studentName" required>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter Address Here" name="address" required>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Course</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="courseCat" required>
                                <?php echo get_option_list('courses','course_id','course_name');?>
                              </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Mobile</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter Mobile Here" name="mobile" required>
                        </div>
                      </div>
                        
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="submit">Add Studetn</button>
                        </div>
                      </div>
                    </form>
                    
                </div>
            </div>
            </div>
        </div>
    
    
<!--------------------Footer---------------------------------->
    <div class="row bg-dark" style="padding-top:20px; margin-top:120px;">
			
                <?php include('inc/footer.php');?>
            
        </div>
<!--------------------Footer---------------------------------->
</div>
 </html>
<script>
            CKEDITOR.replace( 'prodata' );
</script>
<?php
  if(isset($_POST['submit'])){
      $studentName = $_POST['studentName'];
      $address = $_POST['address'];
      $courseCat = $_POST['courseCat'];
      $mobile = $_POST['mobile'];
      
      
      $insert_news = "INSERT INTO customer (cust_name,cust_shop,cust_mobile,courseName) VALUES ('$studentName','$address','$mobile','$courseCat')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, You have added a new Student !')</script>";
	   echo"<script>window.open('student.php','_self')</script>";
        }
  } 
    
?>

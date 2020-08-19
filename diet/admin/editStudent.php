<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
            $studentInfo = "SELECT * FROM customer WHERE cust_id = '$edit_id' ";
            $studentRun = mysqli_query($con,$studentInfo);
            $row=mysqli_fetch_array($studentRun);
                                    
            $cust_id = $row['cust_id'];
            $cust_name = $row['cust_name'];
            $cust_shop = $row['cust_shop'];
            $cust_mobile = $row['cust_mobile'];
            $courseName = $row['courseName'];
    
            $courses = "SELECT * FROM courses WHERE course_id = '$courseName' ";
            $run_courses = mysqli_query($con, $courses);
            $row_courses = mysqli_fetch_array($run_courses);
                
            $course_id = $row_courses['course_id'];
            $course_name = $row_courses['course_name'];
                
            
            
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
                    <img src="images/logo.jpg" class="img-fluid shadow-light"><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Student Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $cust_name;?>" name="studentName" required>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-dark">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?php echo $cust_shop;?>" name="address" required>
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
                          <input type="text" class="form-control" value="<?php echo $cust_mobile;?>" name="mobile" required>
                        </div>
                      </div>
                        
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="update">Update Student</button>
                        </div>
                      </div>
                    </form>
                    
                </div>
            </div>
            </div>
        </div>
    
    
<!--------------------Footer---------------------------------->
    <div class="row bg-dark" style="padding-top:20px;">
			
                <?php include('inc/footer.php');?>
            
        </div>
<!--------------------Footer---------------------------------->
</div>
 </html>

<?php
  if(isset($_POST['update'])){
      $studentName = $_POST['studentName'];
      $address = $_POST['address'];
      $courseCat = $_POST['courseCat'];
      $mobile = $_POST['mobile'];
     
      
  
     $insert_news = "update customer set 
      cust_name = '$studentName',
      cust_shop = '$address',
      cust_mobile = '$mobile',
      courseName = '$courseCat'
      where cust_id = '$edit_id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('Welcome, You have Updated your Student !')</script>";
            echo"<script>window.open('student.php','_self')</script>";
     
            }
    }

?>

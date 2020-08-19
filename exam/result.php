<?php 
ob_start();
session_start();
$page_title = "Tech Exam ";
$page_key = "microsoft system engineer,what does comptia stand for,a plus certification online classes,networking certification exams,it technician certification,security plus training courses,boson ccna,network certification classes";
$page_desc = "Online CompTIA practice tests mapping to the latest exam domains. CompTIA A+ 220-901 / 220-902, CompTIA Network+ N10-006, CompTIA Security+.Online CompTIA A+ certification practice test 1. Exam 220-901. Each quiz cosists of 25 practice questions. Free online score reports are available";
include('inc/top.php');

/* Check User Session Session */
$exam_id = $_SESSION['exam_id'];



/* Cerate Total Exam  */
$query_t = "SELECT * FROM questions WHERE exam_id = '$exam_id'";
$result_t = mysqli_query($con,$query_t);
$total = mysqli_num_rows($result_t);

/* Create Total Questions */
$marks = $_SESSION['score'];
$percent = 100*$marks /$total;
$_SESSION['percent'] = $percent;


/* Create Exam Name */
$query_exam = "SELECT * FROM exam WHERE exam_id = '$exam_id'";
$result_exam = mysqli_query($con,$query_exam);
$row_exam = mysqli_fetch_array($result_exam);
$exam_name = $row_exam['exam_name'];
$dept_id = $row_exam['dept_id'];
$_SESSION['exam_name'] = $exam_name;


$get_dept = "SELECT * FROM department WHERE dept_id = '$dept_id'";
$run_dept = mysqli_query($con,$get_dept);
$row_dept = mysqli_fetch_array($run_dept);
$dept_name = $row_dept['dept_name'];
$_SESSION['dept_name'] = $dept_name;
    
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/nav.php'); ?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        
        <div class="col-md-6" style="margin-bottom:15px;">
            <div class="row">
                <div class="col-md-12">
                    <div class=" purple lighten-4 ">
                        <p class="lead text-center">आपली  परीक्षा  पूर्ण  झालेली  आहे </p>
                    </div><hr>
                    <h3 class="text-muted text-center">अभिनंदन !</h3><hr>
                    <h4 class="text-muted text-center">तुमचे मार्क्स  आहेत  : <?php echo $percent;?> %</h4><hr>
                    <?php $_SESSION['score']="";
                
                ?>
                
            
            <div align="center">
            <h3 class="text-danger"><b>महत्वाची  सूचना </b></h3>
                       <h6>कृपया खाली  दिलेल्या  बटनावर  क्लिक  करून विध्यार्थ्यानी  आपले  नाव , शाळेचे नाव भरावे , त्याबाबत  शिक्षकांनी  मार्गदर्शन  करावे   </h6>
                    <a  href="final.php" class=" finall btn btn-secondary" onclick="alert("hi")"> Register  Name</a>       <hr>        
            </div>
			<div  align="center"><a href="whatsapp://send?text=DIECPD NANDED EXAM  👉 https://orangecomputers.us/" data-ction="share/whatsapp/share" class="btn btn-danger whatsapp ">Whatsapp Share</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 table-responsive">
              <div class="row">
                    <div class="col-md-12">
                       
                    </div>
                </div>
               <?php include('inc/list.php');?>
            </div>
    </div>
    <hr>
    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
    </div>
    <!--------------------Footer---------------------------------->
    
    <script>
    $(".table").DataTable();
</script>
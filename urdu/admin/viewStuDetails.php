<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
require_once('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
            $courseInfo = "SELECT * FROM studentdata WHERE id = '$id' ";
            $courseRun = mysqli_query($con,$courseInfo);
            $row=mysqli_fetch_array($courseRun);
                                    
            $school_name = $row['school_name'];
            $class = $row['class'];
            $division = $row['division'];
            $taluka = $row['taluka'];
            $schoolId = $row['schoolId'];
            $udise = $row['udise'];
            $roll_no = $row['roll_no'];
            $stu_name = $row['stu_name'];
            $cswn = $row['cswn'];
            $presnty = $row['presnty'];
            $languStage = $row['languStage'];
            $mathStageFirst = $row['mathStageFirst'];
            $mathStageSec = $row['mathStageSec'];
            $addStage = $row['addStage'];
            $subStage = $row['subStage'];
            $multiStage = $row['multiStage'];
            $diviStage = $row['diviStage'];
            $mathStartStage = $row['mathStartStage'];
            
            
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
            <div class="col-md-12">
                <h1 class="text-center bg-secondary text-white">View all Student's Name </h1>
                <div id="product_table table-responsive">
                    <table class="table table-bordered table-condensed ">
                            <tbody>
                                <tr class="info">
                                    <th class="bg-dark text-white">School Name</th>
                                    <th><?php echo $school_name;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Class</th>
                                    <th><?php echo $class;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Division</th>
                                    <th>Class <?php echo $division;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Taluka</th>
                                    <th><?php echo $taluka;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Roll NO</th>
                                    <th><?php echo $roll_no;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Name</th>
                                    <th><?php echo $stu_name;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">CSWN</th>
                                    <th><?php echo $cswn;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Presenty</th>
                                    <th><?php echo $presnty;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">भाषा स्तर निश्चिती</th>
                                    <th><?php echo $languStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">संख्याज्ञान (1 ते 9 शून्यासहित)</th>
                                    <th><?php echo $mathStageFirst;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">10 ते 99 संख्याज्ञान आहे?(वर्ग 1 ते 5 साठी)</th>
                                    <th><?php echo $mathStageSec;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">बेरीज क्षमता प्राप्त आहे?(वर्ग 1 ते 5 साठी)</th>
                                    <th><?php echo $addStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">वजाबाकी क्षमता प्राप्त आहे?(वर्ग 1 ते 5 साठी)</th>
                                    <th><?php echo $subStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">गुणाकार क्षमता प्राप्त आहे?(वर्ग 3 ते 5 साठी)</th>
                                    <th><?php echo $multiStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">भागाकार क्षमता प्राप्त आहे?(वर्ग 3 ते 5 साठी)</th>
                                    <th><?php echo $diviStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">गणित प्रारंभिक स्तरावर आहे ?</th>
                                    <th><?php echo $mathStartStage;?></th>
                                </tr>
                                
                            </tbody>
                        </table>
                    <hr>
                </div>
                <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
                <hr>
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
        $(document).ready(function() {
            $('#table2excel').DataTable();
        });

    </script>
    <script>
        $("#but").click(function() {
            $("#table2excel").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "SchoolList.xls" //do not include extension
            });
        });

    </script>

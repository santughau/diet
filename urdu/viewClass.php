<?php 
ob_start();
session_start();
if(!isset($_SESSION['udise'])){
        header('Location:login.php');
    }
$udise = $_SESSION['udise'];
$schoolName = $_SESSION['schoolName'];
$taluka = $_SESSION['taluka'] ;
$id = $_SESSION['id'];
require_once('inc/top.php');
if(isset($_GET['delid'])){
    $del_id = $_GET['delid'];
    
    $del_query = "DELETE  FROM studentdata WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('viewClass.php','_self')</script>";  
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
                <div class="col-md-12">
                    <h6 class="text-center bg-warning text-dark">मदत केंद्र : संतोष केंद्रे (आय . टी. विभाग DIECPD नांदेड ) 8446085083 </h6>


                    <div id="product_table " class="table-responsive">
                        <table class="table table-bordered " id="table2excel">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Division</th>
                                    <th scope="col">Roll No</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">CWSN </th>
                                    <th scope="col">Presenty </th>
                                    <th scope="col">भाषा स्तर निश्चिती </th>
                                    <th scope="col">संख्याज्ञान (आदाद का इलम)?(वर्ग 1 ते 8 साठी)</th>
                                    <th scope="col">बेरीज क्षमत (जमा की सलाहीयत)(वर्ग 1 ते 8 साठी)</th>
                                    <th scope="col">वजाबाकी क्षमता (तफरीक की सलाहीयत)(वर्ग 1 ते 8 साठी)</th>
                                    <th scope="col">गुणाकार क्षमता(जरब की सलाहीयत)(वर्ग 3 ते 8 साठी)</th>
                                    <th scope="col">भागाकार क्षमता (तकसीम की सलाहीयत)(वर्ग 3 ते 8 साठी)</th>
                                    <th scope="col">गणित प्रारंभिक स्तरावर आहे ?</th>
                                    <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                         $divNamea = "SELECT * FROM studentdata WHERE schoolId = '$id' ORDER BY class ASC ";
                         $run_divNamea = mysqli_query($con, $divNamea);
                        $ia=0;
                         while($row_divNamea = mysqli_fetch_array($run_divNamea)){
                         $ida= $row_divNamea['id'];
                         $taluka = $row_divNamea['taluka'];
                         $schoolId = $row_divNamea['schoolId'];
                         $udise = $row_divNamea['udise'];
                         $school_name = $row_divNamea['school_name'];
                         $class = $row_divNamea['class'];
                         $division = $row_divNamea['division'];
                         $roll_no = $row_divNamea['roll_no'];
                         $stu_name = $row_divNamea['stu_name'];
                         $cswn = $row_divNamea['cswn'];
                         $presnty = $row_divNamea['presnty'];
                         $languStage = $row_divNamea['languStage'];
                         $mathStageFirst = $row_divNamea['mathStageFirst'];
                         $mathStageSec = $row_divNamea['mathStageSec'];
                         $addStage = $row_divNamea['addStage'];
                         $subStage = $row_divNamea['subStage'];
                         $multiStage = $row_divNamea['multiStage'];
                         $diviStage = $row_divNamea['diviStage'];
                         $mathStartStage = $row_divNamea['mathStartStage'];
                         $ia=$ia+1;
                         ?>
                                <tr>
                                    <th scope="row"><?php echo $ia;?></th>
                                    <td><?php  echo $class;?></td>
                                    <td> <?php  echo $division;?></td>
                                    <td> <?php  echo $roll_no;?></td>
                                    <td> <?php  echo $stu_name;?></td>
                                    <td> <?php  echo $cswn;?></td>
                                    <td> <?php  echo $presnty;?></td>
                                    <td> <?php  echo $languStage;?></td>
                                    <td> <?php  echo $mathStageSec;?></td>
                                    <td> <?php  echo $addStage;?></td>
                                    <td> <?php  echo $subStage;?></td>
                                    <td> <?php  echo $multiStage;?></td>
                                    <td> <?php  echo $diviStage;?></td>
                                    <td> <?php  echo $mathStartStage;?></td>
                                    <td><a href="viewClass.php?delid=<?php echo $ida;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>


                                </tr>
                                <?php } ?>
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
                    filename: "list.xls" //do not include extension
                });
            });

        </script>
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
            $courseInfo = "SELECT * FROM studentdata WHERE schoolId = '$id' ";
            $courseRun = mysqli_query($con,$courseInfo);
            $row=mysqli_fetch_array($courseRun);
                                    
            $school_name = $row['school_name'];
            $class = $row['class'];
            $division = $row['division'];
            
            
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
                <h1 class="text-center bg-secondary text-white">View all Student's Name (<?php echo $school_name;?>) </h1>
                <div id="product_table table-responsive">
                    <table class="table table-bordered " id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">अ .क्र </th>
                                <th scope="col">Student Name </th>
                                <th scope="col">Class</th>
                                <th scope="col">Division </th>
                                <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i>
                                </th>
                                <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                   $schData = "SELECT * FROM studentdata WHERE schoolId = '$id' ";
                    $run_schData = mysqli_query($con, $schData);
                            $ia=0;
                            while($row_schData = mysqli_fetch_array($run_schData)){
                                $id = $row_schData['id'];
                                $stu_name = $row_schData['stu_name'];
                                $class = $row_schData['class'];         
                                $division = $row_schData['division'];         
                                 $ia=$ia+1 ;
                
                ?>
                            <tr>
                                <th scope="row"><?php echo $ia;?></th>
                                <td> <?php echo $stu_name; ?></td>
                                <td><?php echo $class; ?></td>
                                <td><?php echo $division; ?></td>

                                <td><a href="viewStuDetails.php?id=<?php echo $id;?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                                <td><a href="viewSchool.php?del=<?php echo $id;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
                filename: "SchoolList.xls" //do not include extension
            });
        });

    </script>

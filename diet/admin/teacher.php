<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM teacher WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('teacher.php','_self')</script>";  
    }
}


if(isset($_GET['aid'])){
        $approvid_id = $_GET['aid'];
        $approved = "update teacher set 
        status = 'Approved'
        where id = '$approvid_id'";
      
      $approved_pro = mysqli_query($con, $approved);
      
      if($approved_pro){
          echo"<script>alert('Welcome, You have approved this Teacher !')</script>";
            echo"<script>window.open('teacher.php','_self')</script>";
     
        }
}

if(isset($_GET['did'])){
        $disapprovid_id = $_GET['did'];
        $disapproved = "update teacher set 
        status = 'Reject'
        where id = '$disapprovid_id'";
      
      $disapproved_pro = mysqli_query($con, $disapproved);
      
      if($disapproved_pro){
          echo"<script>alert('Welcome, You have Rejected this Teacher !')</script>";
            echo"<script>window.open('teacher.php','_self')</script>";
     
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
            <div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center bg-danger text-white"><i class="fa fa-book"></i> Techno Teacher Lists</h1>
                        <hr>
                        <div class="table-responsive" id="table-responsive">
                            <table class="table table-bordered display" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Teacher Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">School Name</th>
                                        <th scope="col">Taluka</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Skills</th>
                                        <th scope="col"><i class="fa fa-check" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-times" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                   $teacher = "SELECT * FROM teacher ORDER BY id DESC ";
                    $run_teacher = mysqli_query($con, $teacher);
                            $ia=0;
                            while($row_teacher = mysqli_fetch_array($run_teacher)){
                                $teacher_id = $row_teacher['id'];
                                $teacher_name = $row_teacher['name'];
                                $teacher_email = $row_teacher['email'];
                                $teacher_mobile = $row_teacher['mobile'];
                                $teacher_school = $row_teacher['school'];
                                $teacher_taluka = $row_teacher['taluka'];
                                $teacher_gender = $row_teacher['gender'];
                                $teacher_skill = $row_teacher['skill'];
                                $teacher_Date = $row_teacher['Date'];
                                $teacher_status = $row_teacher['status'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$teacher_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                
                ?>
                                    <tr>
                                        <th scope="row"><?php echo $ia;?></th>
                                        <td><?php echo $teacher_name; ?></td>
                                        <td><?php echo $teacher_email; ?></td>
                                        <td><?php echo $teacher_mobile; ?></td>
                                        <td><?php echo $teacher_school; ?></td>
                                        <td><?php echo $taluka_name; ?></td>
                                        <td><?php echo $teacher_gender; ?></td>
                                        <td><?php echo $teacher_Date; ?></td>
                                        <td class="text-center <?php echo $teacher_status == 'Approved' ? 'text-primary' : 'text-danger'; ?>">
                                            <?php echo $teacher_status; ?></td>
                                        <td><?php echo $teacher_skill; ?></td>
                                        <td><a href="teacher.php?aid=<?php echo $teacher_id;?>" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                        <td><a href="teacher.php?did=<?php echo $teacher_id;?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        <td><a href="teacher.php?del=<?php echo $teacher_id;?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <hr>
                            <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
                            <hr>
                        </div>

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
                filename: "customer_name.xls" //do not include extension
            });
        });
    </script>
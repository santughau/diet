<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
            $training = "SELECT * FROM training WHERE id = '$edit_id' ";
            $runtraining = mysqli_query($con, $training);
            $row=mysqli_fetch_array($runtraining);
                                    
            $training_id = $row['id'];
            $training_name = $row['name'];
            $training_date = $row['date'];         
}  
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM list WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('training.php','_self')</script>";  
    }
}

if(isset($_GET['aid'])){
        $approvid_id = $_GET['aid'];
        $approved = "update list set 
        status = 'Approved'
        where id = '$approvid_id'";
      
      $approved_pro = mysqli_query($con, $approved);
      
      if($approved_pro){
          $mail = "SELECT * FROM list  WHERE  id = '$approvid_id' ";
          $run_mail = mysqli_query($con, $mail);
          $row_mail = mysqli_fetch_array($run_mail);
          $mail_id = $row_mail['id'];
          $mail_name = $row_mail['name'];
          $mail_email = $row_mail['email'];
          $mail_trainingId = $row_mail['trainingId'];
          
          
          $training  = "SELECT * FROM training  WHERE  id = '$mail_trainingId' ";
          $run_training = mysqli_query($con, $training);
          $row_training = mysqli_fetch_array($run_training);
          $training_id = $row_training['id'];
          $training_name = $row_training['name'];
          $training_date = $row_training['date'];
          $training_duration = $row_training['duration'];
          $training_incharge = $row_training['incharge'];
          
          
            $to = $mail_email;
            $from = 'santu.ghau@gmail.com';
            $header = "$mail_name<$mail_name>";
            $subject = "DICPED च्या  $training_name प्रशिक्षणास निवड  झाल्या बदल ";
            $message = "श्री $mail_name DICPED तर्फे आयोजित केलेल्या $training_name या प्रशिक्षणास आपली निवड झालेली आहे तरी आपण दिनांक  $training_date या रोजी आपण उपस्थित राहावे . सदरील प्रशिक्षण दिवसांचे आहे धन्यवाद ";  
            mail($to, $subject, $message, $header);
          
          echo"<script>alert('Welcome, You have approved this Teacher !')</script>";
          echo"<script>window.open('training.php','_self')</script>";
     
        }
}

if(isset($_GET['did'])){
        $disapprovid_id = $_GET['did'];
        $disapproved = "update list set 
        status = 'Pending'
        where id = '$disapprovid_id'";
      
      $disapproved_pro = mysqli_query($con, $disapproved);
      
      if($disapproved_pro){
          echo"<script>alert('Welcome, You have reject this Teacher !')</script>";
            echo"<script>window.open('training.php','_self')</script>";
     
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
                        <h1 class="text-center bg-danger text-white"><i class="fa fa-list"></i> List</h1>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered " id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Teachers Name</th>
                                        <th scope="col">School</th>
                                        <th scope="col">Taluka</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
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
            $list = "SELECT * FROM list  WHERE trainingId = '$training_id'  ORDER BY id DESC";
                            $run_list = mysqli_query($con, $list);
                                    $ia=0;
                            while($row_list = mysqli_fetch_array($run_list)){
                                $list_id = $row_list['id'];
                                $list_name = $row_list['name'];
                                $list_email = $row_list['email'];
                                $list_mobile = $row_list['mobile'];
                                $list_school = $row_list['school'];
                                $list_taluka = $row_list['taluka'];
                                $list_status = $row_list['status'];
                                $list_date = $row_list['date'];
                                $list_gender = $row_list['gender'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$list_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                ?>
                                    <tr>
                                        <th scope="row"><?php echo $ia;?></th>
                                        <td><?php echo $list_name; ?></td>
                                        <td><?php echo $list_school; ?></td>
                                        <td><?php echo $taluka_name; ?> </td>
                                        <td><?php echo $list_mobile; ?> </td>
                                        <td><?php echo $list_email; ?> </td>
                                        <td><?php echo $list_gender; ?> </td>
                                        <td><?php echo $list_date; ?> </td>
                                         <td class="text-center <?php echo $list_status == 'Approved' ? 'text-primary' : 'text-danger'; ?>">
                                            <?php echo $list_status; ?></td>
                                        
                                        <td><a href="list.php?aid=<?php echo $list_id;?>" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                        <td><a href="list.php?did=<?php echo $list_id;?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        <td><a href="list.php?del=<?php echo $list_id;?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
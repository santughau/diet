<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');

if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM training WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('training.php','_self')</script>";  
    }
}

if(isset($_GET['aid'])){
        $approvid_id = $_GET['aid'];
        $approved = "update training set 
        status = 'Upcoming'
        where id = '$approvid_id'";
      
      $approved_pro = mysqli_query($con, $approved);
      
      if($approved_pro){
          echo"<script>alert('Welcome, You have approved this Training !')</script>";
            echo"<script>window.open('training.php','_self')</script>";
     
        }
}

if(isset($_GET['did'])){
        $disapprovid_id = $_GET['did'];
        $disapproved = "update training set 
        status = 'Completed'
        where id = '$disapprovid_id'";
      
      $disapproved_pro = mysqli_query($con, $disapproved);
      
      if($disapproved_pro){
          echo"<script>alert('Welcome, This training has completed Now !')</script>";
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
                   <h1 class="text-center bg-danger text-white"><i class="fa fa-star"></i> View All Training</h1>
                        <hr>
                        <div id="product_table">
                            <table class="table table-bordered display" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Training Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Intake </th>
                                        <th scope="col">Vacancy </th>
                                        <th scope="col">Incharge</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"><i class="fa fa-check" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-times" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-list" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                         <?php
                           $training = "SELECT * FROM training ORDER BY id DESC ";
                            $run_training = mysqli_query($con, $training);
                                    $ia=0;
                            while($row_training = mysqli_fetch_array($run_training)){
                                $training_id = $row_training['id'];
                                $training_name = $row_training['name'];
                                $training_date = $row_training['date'];
                                $training_duration = $row_training['duration'];
                                $training_intake = $row_training['intake'];
                                $training_incharge = $row_training['incharge'];
                                $training_status = $row_training['status'];
                                
                                 $ia=$ia+1;
                                $contact = "SELECT * FROM list  WHERE trainingId = '$training_id' && status = 'Approved'";
                                $contact_run = mysqli_query($con,$contact);
                                $row_contact = mysqli_num_rows($contact_run);
                                
                                $result = $training_intake - $row_contact
                ?>
                                    <tr>
                                        <th scope="row"><?php echo $ia;?></th>
                                        <td><?php echo $training_name; ?></td>
                                        <td><?php echo $training_date; ?></td>
                                        <td><?php echo $training_duration; ?> Days</td>
                                        <td><?php echo $training_intake; ?></td>
                                        <td><?php echo $result; ?></td>
                                        <td><?php echo $training_incharge; ?></td>
                                        
                                        <td class="text-center <?php echo $training_status == 'Upcoming' ? 'text-primary' : 'text-danger'; ?>">
                                            <?php echo $training_status; ?></td>
                                        
                                        <td><a href="training.php?aid=<?php echo $training_id;?>" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                        <td><a href="training.php?did=<?php echo $training_id;?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        <td><a href="training.php?del=<?php echo $training_id;?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        <td><a href="list.php?id=<?php echo $training_id;?>" class="btn btn-secondary"><i class="fa fa-list" aria-hidden="true"></i></a></td>
                                        

                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                         <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button><hr>
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
 
 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

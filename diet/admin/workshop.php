<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM workshop WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('workshop.php','_self')</script>";  
    }
}

if(isset($_GET['approve'])){
        $approvid_id = $_GET['approve'];
        $approved = "update workshop set 
        status = 'प्रवेश  निश्चित '
        where id = '$approvid_id'";
      
      $approved_pro = mysqli_query($con, $approved);
      
      if($approved_pro){
          echo"<script>alert('Welcome, You have approved this Teacher !')</script>";
            echo"<script>window.open('workshop.php','_self')</script>";
     
        }
}

if(isset($_GET['disapprove'])){
        $disapprovid_id = $_GET['disapprove'];
        $disapproved = "update workshop set 
        status = 'नोंदणी पूर्ण'
        where id = '$disapprovid_id'";
      
      $disapproved_pro = mysqli_query($con, $disapproved);
      
      if($disapproved_pro){
          echo"<script>alert('Welcome, You have Rejected this Teacher !')</script>";
            echo"<script>window.open('workshop.php','_self')</script>";
     
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
                        <img src="images/logo.jpg" class="img-fluid shadow-light">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center bg-secondary text-white">View all Workshop Details</h1>
                        <div id="product_table">
                            <table class="table table-bordered display" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Teachers Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col"><i class="fa fa-check" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-circle" aria-hidden="true"></i>
                                        </th>
                                        <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                   $fee = "SELECT * FROM workshop order by id desc ";
                    $runFee = mysqli_query($con, $fee);
                            $ia=0;
                            while($rowFee = mysqli_fetch_array($runFee)){
                                $id = $rowFee['id'];
                                $name = $rowFee['name'];
                                $mobile = $rowFee['mobile'];
                                $email = $rowFee['email'];
                                $status = $rowFee['status'];
                                $date = $rowFee['date'];
                                $ia=$ia+1;
               
                ?>
                                    <tr>
                                        <th scope="row"><?php echo $ia;?></th>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $mobile; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $status; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><a href="workshop.php?approve=<?php echo $id;?>" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                        <td><a href="workshop.php?disapprove=<?php echo $id;?>" class="btn btn-warning"><i class="fa fa-circle" aria-hidden="true"></i></a></td>
                                        <td><a href="workshop.php?del=<?php echo $id;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
    <!------------------View Product----------------------------------->


    <!----------------------------------------------------->

    <!------------------------------------------------------>
    <script>
        CKEDITOR.replace('post-data');

    </script>
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

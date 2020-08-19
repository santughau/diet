<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM help WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('viewhelp.php','_self')</script>";  
    }
}


if(isset($_GET['aid'])){
        $approvid_id = $_GET['aid'];
        $approved = "update help set 
        status = 'Approved'
        where id = '$approvid_id'";
      
      $approved_pro = mysqli_query($con, $approved);
      
      if($approved_pro){
          echo"<script>alert('Welcome, You have approved this School !')</script>";
            echo"<script>window.open('viewhelp.php','_self')</script>";
     
        }
}

if(isset($_GET['did'])){
        $disapprovid_id = $_GET['did'];
        $disapproved = "update help set 
        status = 'Pending'
        where id = '$disapprovid_id'";
      
      $disapproved_pro = mysqli_query($con, $disapproved);
      
      if($disapproved_pro){
          echo"<script>alert('Welcome, You have Rejected this School !')</script>";
            echo"<script>window.open('viewhelp.php','_self')</script>";
     
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
                        <div class=" table-responsive">
                            <table class="table table-bordered" id="table2excel">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">अ क्र </th>
                                        <th scope="col">शिक्षकाचे  नाव </th>
                                        <th scope="col">Mobile No </th>
                                        <th scope="col">शाळेचे नाव </th>
                                        <th scope="col">तालुका </th>
                                        <th scope="col">Subject </th>
                                        <th scope="col">Question </th>
                                        <th scope="col">Status </th>
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
                            $list = "SELECT * FROM help  ORDER BY id DESC";
                            $run_list = mysqli_query($con, $list);
                                    $ia=0;
                            while($row_list = mysqli_fetch_array($run_list)){
                                $list_id = $row_list['id'];
                                $list_name = $row_list['name'];
                                $list_school = $row_list['school'];
                                $list_taluka = $row_list['taluka'];
                                $list_status = $row_list['status'];
                                $list_mobile = $row_list['mobile'];
                                $list_subject = $row_list['subject'];
                                $list_question = $row_list['question'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$list_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                ?>
                                    <tr class="">
                                        <th scope="row"><?php echo $ia;?></th>
                                        <td><?php echo $list_name; ?></td>
                                        <td><?php echo $list_mobile; ?></td>
                                        <td><?php echo $list_school; ?> </td>
                                        <td><?php echo $taluka_name; ?> </td>
                                        <td><?php echo $list_subject; ?> </td>
                                        <td><?php echo $list_question; ?> </td>
                                        <td><?php echo $list_status; ?> </td>
                                        
                                        <td><a href="viewhelp.php?aid=<?php echo $list_id;?>" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                        <td><a href="viewhelp.php?did=<?php echo $list_id;?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        <td><a href="viewhelp.php?del=<?php echo $list_id;?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <br><br><button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
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
                filename: "digitalschoolList.xls" //do not include extension
            });
        });
    </script>
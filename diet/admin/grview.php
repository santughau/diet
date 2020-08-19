<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    
    $del_query = "DELETE  FROM gr WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('grview.php','_self')</script>";  
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
                    <div class="table-responsive">
                        <h2 class="text-center bg-primary text-white"><i class="fa fa-download"></i> GR here.... </h2>
                    <table class="table table-bordered " id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Sr No</th>
                                <th scope="col">Subject </th>
                                 <th scope="col">View </th>
                                 <th scope="col">Edit </th>
                                 <th scope="col">Del </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $download = "SELECT * FROM gr ORDER BY id DESC ";
                            $run_download = mysqli_query($con, $download);
                            $ia=0;
                            while($row_download = mysqli_fetch_array($run_download)){
                                $download_id = $row_download['id'];
                                $download_subject = $row_download['subject'];
                                $download_link = $row_download['link'];
                                $ia=$ia+1;
                                ?>
                            <tr class="">
                                <td><?php echo $ia;?></td>
                                <td><?php echo $download_subject;?></td>
                                 <td><a href="<?php echo $download_link;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><a href="editgr.php?id=<?php echo $download_id;?>" class="btn btn-secondary"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                 <td><a href="grview.php?id=<?php echo $download_id;?>" class="btn btn-danger" ><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
 
 
 
 
    
 
 







 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

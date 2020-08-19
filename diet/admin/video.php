<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM video WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('video.php','_self')</script>";  
    }
}

if(isset($_GET['aid'])){
        $approvid_id = $_GET['aid'];
        $approved = "update video set 
        status = 'Approved'
        where id = '$approvid_id'";
      
      $approved_pro = mysqli_query($con, $approved);
      
      if($approved_pro){
          echo"<script>alert('Welcome, You have approved this video !')</script>";
            echo"<script>window.open('video.php','_self')</script>";
     
        }
}

if(isset($_GET['did'])){
        $disapprovid_id = $_GET['did'];
        $disapproved = "update video set 
        status = 'Reject',
        view = '0'
        where id = '$disapprovid_id'";
      
      $disapproved_pro = mysqli_query($con, $disapproved);
      
      if($disapproved_pro){
          echo"<script>alert('Welcome, You have disapproved this video !')</script>";
          echo"<script>window.open('video.php','_self')</script>";     
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
                        <h1 class="text-center bg-danger text-white"><i class="fa fa-youtube"></i> Video</h1>
                        <hr>
                        <div id="product_table">
                            <table class="table table-bordered display" id="table2excel">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Senders Name</th>
                                        <th scope="col">Video Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Video</th>
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
                           $video = "SELECT * FROM video ORDER BY id DESC ";
                            $run_video = mysqli_query($con, $video);
                                    $ia=0;
                            while($row_video = mysqli_fetch_array($run_video)){
                                $video_id = $row_video['id'];
                                $video_title = $row_video['title'];
                                $video_link = $row_video['link'];
                                $video_cat = $row_video['cat'];
                                $video_name = $row_video['name'];
                                $video_mobile = $row_video['mobile'];
                                $video_status = $row_video['status'];
                                $video_view = $row_video['view'];
                                
                                 $ia=$ia+1;
                                
                            $vcatname = "SELECT * FROM video_cat WHERE id = '$video_cat' ";
                            $run_vcatname = mysqli_query($con, $vcatname);
                            $row_vcatname = mysqli_fetch_array($run_vcatname);

                            $vcatname_id = $row_vcatname['id'];
                            $vcatname_name = $row_vcatname['name'];
                
                ?>
                                    <tr>
                                        <th scope="row"><?php echo $ia;?></th>
                                        <td><?php echo $video_name; ?></td>
                                        <td><?php echo $video_title; ?></td>
                                        <td><?php echo $vcatname_name; ?></td>
                                        <td> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_link;?>?rel=0" allowfullscreen></iframe> </td>
                                        <td class="text-center <?php echo $video_status == 'Approved' ? 'text-primary' : 'text-danger'; ?>">
                                            <?php echo $video_status; ?><br><?php echo $video_view; ?></td>
                                        <td><a href="video.php?aid=<?php echo $video_id;?>" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                        <td><a href="video.php?did=<?php echo $video_id;?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        <td><a href="video.php?del=<?php echo $video_id;?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>

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
                filename: "video.xls" //do not include extension
            });
        });
    </script>
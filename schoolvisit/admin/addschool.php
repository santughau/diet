<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM schoollist WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('addschool.php','_self')</script>";  
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
			<div class="col-md-4">
                <h2 class="text-white text-center bg-primary">Add School</h2>
                       <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">School Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter School Name" name="name" required  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">UDISE NO</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter UDISE" name="udise" required style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Taluka</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="taluka" required style="border: 1px solid black;padding-left:10px;" id="taluka">
                                        <?php echo get_option_list('taluka','id','name');?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Block</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="block" id="block" required style="border: 1px solid black;padding-left:10px;">
                                    </select>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Visiters name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="visiter" id="visitor" required style="border: 1px solid black;padding-left:10px;">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Student</button>
                                </div>
                            </div>
                        </form>
            </div>
            <div class="col-md-8">
            <h1 class="text-center bg-secondary text-white">View all School</h1>
                    
                    <div id="product_table table-responsive">
                     <table class="table table-bordered display" id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">Sr No</th>
                          <th scope="col">School Name</th>
                          <th scope="col">UDISE</th>
                          <th scope="col">Taluka</th>
                          <th scope="col">Blcok</th>
                          <th scope="col">Visiter's Name</th>
</th>
                            <th scope="col"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</th>
                          <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
</th>
                        </tr>
                         </thead>
                      <tbody>
                         <?php
                   $student = "SELECT * FROM schoollist ORDER BY id DESC ";
                    $run_student = mysqli_query($con, $student);
                            $ia=0;
                            while($row_student = mysqli_fetch_array($run_student)){
                                $id = $row_student['id'];
                                $sname = $row_student['sname'];
                                $udise = $row_student['udise'];
                                $taluka = $row_student['taluka'];
                                $block = $row_student['block'];
                                $vName = $row_student['vName'];
                                
                                 $ia=$ia+1;
                                
                        $tName = "SELECT * FROM taluka WHERE id = '$taluka' ";
                            $run_tName = mysqli_query($con, $tName);
                            $row_tName = mysqli_fetch_array($run_tName);
                            $nameTa = $row_tName['name'];
                                
                    $bName = "SELECT * FROM block WHERE id = '$block' ";
                            $run_bName = mysqli_query($con, $bName);
                            $row_bName = mysqli_fetch_array($run_bName);
                            $nameba = $row_bName['name'];
                                
                    $vName = "SELECT * FROM user WHERE id = '$vName' ";
                            $run_vName = mysqli_query($con, $vName);
                            $row_vName = mysqli_fetch_array($run_vName);
                            $nameva = $row_vName['name'];
                
                ?> 
                        <tr>
                          <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo ucfirst($sname); ?></td>
                          <td> <?php echo $udise; ?></td>
                          <td><?php echo $nameTa; ?></td>
                          <td><?php echo $nameba; ?></td>
                          <td><?php echo $nameva; ?></td>
                          
                            <td><a href="editSchool.php?id=<?php echo $id;?>" class="btn btn-warning" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                          <td><a href="addschool.php?del=<?php echo $id;?>" class="btn btn-danger" ><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        </tr>
                     <?php } ?>   
                      </tbody>
                    </table>
                        <hr>
                    </div>
                    <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button><hr>
            </div>
        </div><hr>    
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
            $('#taluka').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "fetchblock.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#block').html(data);
                    }
                });
            });
        });
    </script>
<script>
        $(document).ready(function() {
            $('#taluka').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "fetchvisitor.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#visitor').html(data);
                    }
                });
            });
        });
    </script>
<script>
$(document).ready(function(){
    $('#table2excel').DataTable();
});
</script>
<script>
$("#but").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "SchoolList.xls" //do not include extension
  }); 
});
</script>
    <?php
  if(isset($_POST['submit'])){
       $visiter = $_POST['visiter'];
       $block = $_POST['block'];
       $taluka = $_POST['taluka'];
       $name = $_POST['name'];
       $udise = $_POST['udise'];
     
      
      $insert_news = "INSERT INTO schoollist (sname,udise,taluka,block,vName) VALUES ('$name','$udise','$taluka','$block','$visiter')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, You have added a new School !')</script>";
	   echo"<script>window.open('addschool.php','_self')</script>";
        }
  } 
    
?>
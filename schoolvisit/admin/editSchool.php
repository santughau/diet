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
$edit_id = $_GET['id'];
$courseInfo = "SELECT * FROM schoollist WHERE id = '$edit_id' ";
$courseRun = mysqli_query($con,$courseInfo);
$row=mysqli_fetch_array($courseRun);
                                    
$id = $row['id'];
$sname = $row['sname'];
$udise = $row['udise'];
$taluka = $row['taluka'];
$block = $row['block'];
$vName = $row['vName'];
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
                                    <input type="text" class="form-control" value="<?php echo $sname;?>" name="name" required  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">UDISE NO</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $udise;?>" name="udise" required style="border: 1px solid black;padding:10px;">
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
                                    <button type="submit" class="btn btn-primary" name="update">Add Student</button>
                                </div>
                            </div>
                        </form>
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
  if(isset($_POST['update'])){
      $visiter = $_POST['visiter'];
      $block = $_POST['block'];
      $taluka = $_POST['taluka'];
      $udise = $_POST['udise'];
      $name = $_POST['name'];
      
      
     $insert_news = "update schoollist set 
      sname = '$name',
      udise = '$udise',
      taluka = '$taluka',
      block = '$block',
      vName = '$visiter'
      where id = '$edit_id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          echo"<script>alert('Welcome, You have Updated your School !')</script>";
            echo"<script>window.open('addschool.php','_self')</script>";
     
            }
    }

?>
  
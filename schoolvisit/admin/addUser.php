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
    
    $del_query = "DELETE  FROM user WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('addUser.php','_self')</script>";  
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
			<div class="col-md-5">
                <h2 class="text-white text-center bg-primary">Add Visiters</h2>
                       <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Visiters Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Visiters Name" name="name" required  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Email Here" name="username" required style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>        
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Mobile Here" name="mobile"  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Degination</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Degination" name="designation"  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Taluka</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="taluka" required style="border: 1px solid black;padding-left:10px;">
                                        <?php echo get_option_list('taluka','id','name');?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Password Here" name="password" required style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Student</button>
                                </div>
                            </div>
                        </form>
            </div>
            <div class="col-md-7">
            <h1 class="text-center bg-secondary text-white">View all Visiters</h1>
                    
                    <div id="product_table table-responsive">
                     <table class="table table-bordered display" id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">Sr No</th>
                          <th scope="col">Visiters Name</th>
                          <th scope="col">Taluka</th>
                          <th scope="col">User Name</th>
                          <th scope="col">Password</th>
</th>
                            <th scope="col"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</th>
                          <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
</th>
                        </tr>
                         </thead>
                      <tbody>
                         <?php
                   $student = "SELECT * FROM user ORDER BY id DESC ";
                    $run_student = mysqli_query($con, $student);
                            $ia=0;
                            while($row_student = mysqli_fetch_array($run_student)){
                                $id = $row_student['id'];
                                $name = $row_student['name'];
                                $email = $row_student['email'];
                                $password = $row_student['password'];
                                $talukaId = $row_student['talukaId'];
                                
                                 $ia=$ia+1;
                                
                            $tName = "SELECT * FROM taluka WHERE id = '$talukaId' ";
                            $run_tName = mysqli_query($con, $tName);
                            $row_tName = mysqli_fetch_array($run_tName);

                            $nameTa = $row_tName['name'];
                
                ?> 
                        <tr>
                          <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo ucfirst($name); ?></td>
                          <td> <?php echo $nameTa; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $password; ?></td>
                          
                            <td><a href="editUser.php?id=<?php echo $id;?>" class="btn btn-warning" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                          <td><a href="addUser.php?del=<?php echo $id;?>" class="btn btn-danger" ><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        </tr>
                     <?php } ?>   
                      </tbody>
                    </table>
                        <hr>
                    </div>
                    <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button><hr>
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
    filename: "customer_name.xls" //do not include extension
  }); 
});
</script>
 <?php
  if(isset($_POST['submit'])){
      $password = $_POST['password'];
      $taluka = $_POST['taluka'];
      $designation = $_POST['designation'];
      $mobile = $_POST['mobile'];
      $username = $_POST['username'];
      $name = $_POST['name'];
      
      
      $insert_news = "INSERT INTO user (name,email, 	mobile,desination,password,talukaId) VALUES ('$name','$username','$mobile','$designation','$password','$taluka')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
          
	   echo"<script>alert('Welcome, You have added a Visiter !')</script>";
	   echo"<script>window.open('addUser.php','_self')</script>";
        }
  } 
    
?>
 
 
 
 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

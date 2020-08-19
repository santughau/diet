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
$courseInfo = "SELECT * FROM user WHERE id = '$edit_id' ";
$courseRun = mysqli_query($con,$courseInfo);
$row=mysqli_fetch_array($courseRun);
                                    
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$desination = $row['desination'];
$password = $row['password'];
$talukaId = $row['talukaId'];

            
            
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
                <h2 class="text-white text-center bg-primary">Edit Visiters</h2>
                       <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Visiters Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $name;?>" name="name" required  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $email;?>" name="username" required style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>        
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $mobile;?>" name="mobile"  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Degination</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $desination;?>" name="designation"  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Taluka</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="taluka" required style="border: 1px solid black;padding-left:10px;" >
    <?php
    $get_option = "SELECT * FROM taluka ORDER BY name ASC";
    $run_option = mysqli_query($con,$get_option);
    while ($row_option = mysqli_fetch_array($run_option)){
    $option_id = $row_option['id'];
    $option_title = $row_option['name'];
    ?>
    <option value="<?php echo $option_id ;?>" <?php if($talukaId == $option_id ){echo "selected"; }?>><?php echo $option_title ;?></option>
    <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="password" required style="border: 1px solid black;padding:10px;" value="<?php echo $password;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="update">Edit User</button>
                                </div>
                            </div>
                        </form>
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


 <?php
  if(isset($_POST['update'])){
      $password = $_POST['password'];
      $taluka = $_POST['taluka'];
      $designation = $_POST['designation'];
      $mobile = $_POST['mobile'];
      $username = $_POST['username'];  
      $name = $_POST['name'];  
      
      
     echo $insert_news = "update user set 
      name = '$name',
      email = '$username',
      mobile = '$mobile',
      password = '$password',
      talukaId = '$taluka',
      desination = '$designation'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
          
          echo"<script>alert('Welcome, You have Updated your Visiter !')</script>";
            echo"<script>window.open('addUser.php','_self')</script>";
     
            }
    }

?>

 
 
 
 
 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

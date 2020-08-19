<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
$id = $_SESSION['id'];
require_once('inc/top.php');

$visitorInfo = "SELECT * FROM user WHERE id = '$id' ";
$visitorRun = mysqli_query($con,$visitorInfo);
$row=mysqli_fetch_array($visitorRun);
                                    
$id= $row['id'];
$name= $row['name'];
$name= $row['name'];
$email= $row['email'];
$talukaId= $row['talukaId'];
$password= $row['password'];

$get_option = "SELECT * FROM taluka WHERE ID = '$talukaId'";
$run_option = mysqli_query($con,$get_option);
$row_option = mysqli_fetch_array($run_option);
$option_id = $row_option['id'];
$option_title = $row_option['name'];
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
			<div class="col-md-12">
                <h2 class="bg-dark text-white text-center">CHANGE PASSWORD</h2>
                <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Visiters Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $name;?>" name="name" disabled  style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $email;?>" name="username" disabled style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>        
                           
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Taluka</label>
                                <div class="col-sm-9">
                                   
                                    <input type="text" class="form-control" value="<?php echo $option_title;?>" name="username" disabled style="border: 1px solid black;padding:10px;">
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-dark">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $password;?>" name="password" required style="border: 1px solid black;padding:10px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="update">Change Password</button>
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
      echo $insert_news = "update user set 
      password = '$password'
      where id = '$id'";
      
      $insert_pro = mysqli_query($con, $insert_news);
      
      if($insert_pro){
                
          echo"<script>alert('Welcome, You have Updated your Password Successfully !')</script>";
            echo"<script>window.open('index.php','_self')</script>";
     
            }
    }

?>
 
 
 
 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

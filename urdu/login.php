<?php 
ob_start();
//session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>

    <head>
        <title>Login Page</title>
        <!--Made with love by Mutiullah Samim -->

        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Numans');

            html,
            body {
                background-image: url('http://getwallpapers.com/wallpaper/full/6/6/a/1521427-large-geometry-wallpapers-1920x1080.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                height: 100%;
                font-family: 'Numans', sans-serif;
            }

            .container {
                height: 100%;
                align-content: center;
            }

            .card {
                height: 370px;
                margin-top: auto;
                margin-bottom: auto;
                width: 400px;
                background-color: rgba(0, 0, 0, 0.5) !important;
            }

            .social_icon span {
                font-size: 60px;
                margin-left: 10px;
                color: #FFC312;
            }

            .social_icon span:hover {
                color: white;
                cursor: pointer;
            }

            .card-header h3 {
                color: white;
            }

            .card-header h6 {
                color: white;
            }

            .social_icon {
                position: absolute;
                right: 20px;
                top: -45px;
            }

            .input-group-prepend span {
                width: 50px;
                background-color: #FFC312;
                color: black;
                border: 0 !important;
            }

            input:focus {
                outline: 0 0 0 0 !important;
                box-shadow: 0 0 0 0 !important;

            }

            .remember {
                color: white;
            }

            .remember input {
                width: 20px;
                height: 20px;
                margin-left: 15px;
                margin-right: 5px;
            }

            .login_btn {
                color: black;
                background-color: #FFC312;
                width: 100px;
            }

            .login_btn:hover {
                color: black;
                background-color: white;
            }

            .links {
                color: white;
            }

            .links a {
                margin-left: 4px;
            }

        </style>
    </head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h6 align="center">जिल्हा शैक्षणिक सातत्यपूर्ण व्यावसायिक विकास संस्था , नांदेड </h6>
                    <div class="d-flex justify-content-end social_icon">

                    </div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="UDISE No" name="udise">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="pass">
                        </div>
                        <div class="row align-items-center remember">

                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        मदती करिता फोन करा
                    </div>
                    <div class="d-flex justify-content-center links">
                        8446085083 / 9881932921 / 9422185945 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
session_start();
        require_once('inc/db.php');
       if (isset($_POST['login'])){
        
         $udise = mysqli_real_escape_string($con,$_POST['udise']);
        $pass = mysqli_real_escape_string($con,$_POST['pass']);
        
       echo  $get_user = "SELECT * FROM schoollist where udise = '$udise' AND password = '$pass'";
        $run_user = mysqli_query($con,$get_user);
        $check = mysqli_num_rows($run_user);
          $row = mysqli_fetch_array($run_user);
           $schoolName= $row['schoolName'];
           $taluka= $row['taluka'];
           $id= $row['id'];
           
        
        if($check == 1){
              $_SESSION['udise'] = $udise;
              $_SESSION['schoolName'] = $schoolName;
              
              $_SESSION['taluka'] = $taluka;
              $_SESSION['id'] = $id;
            echo "<script>window.open('index.php','_self')</script>";
            
        }
        
                
        else {
            
            echo "<script>alert('UDISE Or Password is not correct !')</script>";
            
        }
        
        
        }
    
        
    
?>

<?php 
ob_start();
session_start();
if(!isset($_SESSION['udise'])){
        header('Location:login.php');
    }
if(isset($_SESSION['class'])){
       $_SESSION['class']= "";
    }
if(isset($_SESSION['divi'])){
       $_SESSION['divi']= "";
    }
$udise = $_SESSION['udise'];
$schoolName = $_SESSION['schoolName'];
$taluka = $_SESSION['taluka'] ;
$id = $_SESSION['id'];
require_once('inc/top.php');
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
                    <h6 class="text-center bg-warning text-dark">मदत केंद्र : संतोष केंद्रे  8446085083 , डॉ.नबील शेख 9422185945 </h6>

                    <div align="center">
                        <form action="" method="post">
                            <div class="col-md-12">
                                <div class="form-group col-md-2">
                                    <label class="text-danger">Class</label>
                                    <select class="form-control" style="border: 1px solid black; padding-left:10px;" name=" class" required oninvalid="this.setCustomValidity('Please Select Class ')" oninput="setCustomValidity('')">
                                        <option value="">Please Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="text-danger">Division </label>
                                    <select class="form-control" style="border: 1px solid black; padding-left:10px;" name=" divi" required oninvalid="this.setCustomValidity('Please Select Division')" oninput="setCustomValidity('')">
                                        <option value="">Please Select</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        
                                    </select>
                                </div>
                                <button class="btn btn-primary" href="addStudent.php" name="login"> Add Student</button>
                                
                                
                            </div>
                        </form>
                    </div>

                    <hr>
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

        <?php
  if(isset($_POST['login'])){
      $class = $_POST['class'];
      $divi = $_POST['divi'];
      $_SESSION['class'] = $class;
      $_SESSION['divi'] = $divi;
      echo "<script>window.open('addStudent.php','_self')</script>";
  } 
    
?>
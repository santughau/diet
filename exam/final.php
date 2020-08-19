<?php 
ob_start();
session_start();
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
include('inc/top.php');
  $marks = $_SESSION['percent'];    
  $exam_name = $_SESSION['exam_name'];    
  $dept_name = $_SESSION['dept_name'];    

?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row" style="margin-top:10px;">
        <div class="col-md-6" style="margin-bottom:15px;">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" purple lighten-4 ">
                        <p class="lead text-center">कृपया विध्यार्थ्यानी आपले नाव , शाळेचे नाव व मोबाईल क्रमांक भरावे !</p>
                    </div>
                    <hr>
                    <form method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-dark">विद्यार्थीचे नाव </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="uname" placeholder="विद्यार्थीचे  नाव" required style="border: 1px solid black; padding-left:10px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-dark">शाळेचे नाव </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="शाळेचे नाव" name="address" required style="border: 1px solid black; padding-left:10px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-dark">जिल्हा </label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="dist" id="district" required>
                                    <option value="">जिल्हा </option>
                                    <?php
                        $districtName = "SELECT * FROM district ORDER BY dist_name ASC  ";
                    $run_distlName = mysqli_query($con, $districtName);
                            $ia=0;
                            while($row_distName = mysqli_fetch_array($run_distlName)){
                                $sid = $row_distName['id'];
                                $dist_name = $row_distName['dist_name'];
                            ?>
                                    <option value="<?php echo $sid; ?>"><?php echo $dist_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-dark">तालुका </label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="taluka" id="talukaname">
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit" required>Submit</button>
                                <a href="index.php" class="btn btn-warning">Back To Home</a>
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 table-responsive">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <?php include('inc/list.php');?>
        </div>
    </div>
    <hr>
    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
        <div class="row">
            <?php include('inc/bitcoin.php');?>
        </div>
    </div>

    <!--------------------Footer---------------------------------->
    <script>
        $(".table").DataTable();

    </script>
    <script>
        $(document).ready(function() {
            $('#district').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "fetchtaluka.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#talukaname').html(data);
                    }
                });


            });
        });

    </script>
    <?php
    //echo $_SESSION['percent'];
  if(isset($_POST['submit'])){
      $name = $_POST['uname'];
      $address = $_POST['address'];
       $m = $_SESSION['percent'];
       $dist = $_POST['dist'];
       $talukaname = $_POST['taluka'];
        $insert_news = "INSERT INTO registration (name,mobile,address,marks,date,class,subject,district,taluka) VALUES ('$name','$mobile','$address','$m',NOW(),'$dept_name','$exam_name','$dist','$talukaname')";
      $insert_pro = mysqli_query($con,$insert_news);
      if($insert_pro){
          
          $to = "santu.ghau@gmail.com";
        $header = "$name<$dist>";
        $subject = "Vinay Quiz Register Page From $name<$marks>";
        $message = "Name: $name \n\n Mobile:  $dist \n\n Address: $address ";  
        mail($to, $subject, $message, $header);
        
        session_destroy();
        //header("location:index.php");
	   echo"<script>alert('Welcome, You have added Your Profile, We will Contact you shortly !')</script>";
	   echo"<script>window.open('index.php','_self')</script>";
        }
  } 
?>

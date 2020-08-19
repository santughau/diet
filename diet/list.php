<?php 
$page_title = "Training List  Pages | DIET NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  तर्फे  आयोजित केलेल्या  प्रशिक्षणास आपले नाव नोंदणी करा  , संतोष केंद्रे  IT विभाग  नांदेड  ";
include('inc/top.php');
if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
            $training = "SELECT * FROM training WHERE id = '$edit_id' ";
            $runtraining = mysqli_query($con, $training);
            $row=mysqli_fetch_array($runtraining);
                                    
            $training_id = $row['id'];
            $training_name = $row['name'];
            $training_date = $row['date'];         
}  
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/navbar.php');?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-4">
            <div class="card text-white bg-secondary">
                <div class="card-header"><?php echo $training_name;?> <small class="pull-right">Date : <?php echo $training_date;?></small></div>
            </div>
            <div id="shareIconsCountInside" align="center"></div>
            <div align="center">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Responsive -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4151366218309776"
                     data-ad-slot="5270114532"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <hr>

            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">नाव </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="प्रशिक्षकाचे संपूर्ण  नाव " name="name" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">ई-मेल </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="प्रशिक्षकाचे ई-मेल " name="email" style="border: 1px solid black; padding-left:10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">मोबाईल
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="प्रशिक्षकाचे मोबाईल" name="mobile" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">शाळा </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="प्रशिक्षकाच्या शाळेचे नाव " name="school" style="border: 1px solid black; padding-left:10px;" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">तालुका </label>
                    <div class="col-sm-10">
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="taluka">
                            <?php echo get_option_list('taluka','id','name');?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">लिंग </label>
                    <div class="col-sm-10 ">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="male"> पुरुष 
                            </label>

                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="female"> स्त्री 
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Responsive -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-4151366218309776"
                             data-ad-slot="5270114532"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                
            
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-bordered " id="table2excel">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">अ .क्र </th>
                            <th scope="col">शिक्षकाचे नाव </th>
                            <th scope="col">शाळा </th>
                            <th scope="col">तालुका </th>
                            <th scope="col">दिनांक </th>
                            <th scope="col">स्थिती </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $list = "SELECT * FROM list  WHERE trainingId = '$training_id'  && status = 'Approved' ORDER BY id DESC";
                            $run_list = mysqli_query($con, $list);
                                    $ia=0;
                            while($row_list = mysqli_fetch_array($run_list)){
                                $list_id = $row_list['id'];
                                $list_name = $row_list['name'];
                                $list_email = $row_list['email'];
                                $list_mobile = $row_list['mobile'];
                                $list_school = $row_list['school'];
                                $list_taluka = $row_list['taluka'];
                                $list_status = $row_list['status'];
                                $list_date = $row_list['date'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$list_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                ?>
                        <tr>
                            <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $list_name; ?></td>
                            <td><?php echo $list_school; ?></td>
                            <td><?php echo $taluka_name; ?> </td>
                            <td><?php echo $list_date; ?> </td>
                            <td class="text-center <?php echo $list_status == 'Approved' ? 'text-primary' : 'text-danger'; ?>">
                                <?php echo $list_status; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <hr>
            </div>
            <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
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
</body>

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
            filename: "trainer's_list.xls" //do not include extension
        });
    });
</script>
<?php
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $school = $_POST['school'];
      $taluka = $_POST['taluka'];
      $gender = $_POST['gender'];
     
      
      echo $insert_news = "INSERT INTO list (trainingId,name,email,mobile,school,taluka,gender,status,date) VALUES ('$training_id','$name','$email','$mobile','$school','$taluka','$gender','Pending',NOW())";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
        
	   echo"<script>alert('धन्यवाद , आपण प्रशिक्षणास  आपले नाव नोंदणी  केली आहे,  ')</script>";
	   echo"<script>window.open('training.php?','_self')</script>";
        
}
}

?>
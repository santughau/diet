<?php 
$page_title = "Training Pages | DIET NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  तर्फे  आयोजित केलेल्या  प्रशिक्षणास आपले नाव नोंदणी करा  , संतोष केंद्रे  IT विभाग  नांदेड  ";
include('inc/top.php');

?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/navbar.php');?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="shareIconsCountInside" align="center"></div>
                <div align="center">
                    
                </div>
                <table class="table table-bordered " id="table2excel">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">अ. क्र </th>
                            <th scope="col">प्रशिक्षणाचे नाव </th>
                            <th scope="col">दिनांक  </th>
                            <th scope="col">कालावधी </th>
                            <th scope="col">प्रशिक्षकांची  संख्या  </th>
                            <th scope="col">रिक्त  जागा  </th>
                            <th scope="col">प्रशिक्षणाचे प्रमुख </th>
                            <th scope="col">स्थिती </th>
                            <th scope="col">नोंदणी करा  !</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $training = "SELECT * FROM training  WHERE status = 'Upcoming' ORDER BY id DESC";
                            $run_training = mysqli_query($con, $training);
                                    $ia=0;
                            while($row_training = mysqli_fetch_array($run_training)){
                                $training_id = $row_training['id'];
                                $training_name = $row_training['name'];
                                $training_date = $row_training['date'];
                                $training_duration = $row_training['duration'];
                                $training_intake = $row_training['intake'];
                                $training_incharge = $row_training['incharge'];
                                $training_status = $row_training['status'];
                                
                                 $ia=$ia+1;
                                
                                $contact = "SELECT * FROM list  WHERE trainingId = '$training_id' && status = 'Approved'";
                                $contact_run = mysqli_query($con,$contact);
                                $row_contact = mysqli_num_rows($contact_run);
                                
                                $result = $training_intake - $row_contact
                ?>
                        <tr>
                            <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $training_name; ?></td>
                            <td><?php echo $training_date; ?></td>
                            <td><?php echo $training_duration; ?> दिवस </td>
                            <td><?php echo $training_intake; ?></td>
                            <td><?php echo $result; ?></td>
                            <td><?php echo $training_incharge; ?></td>

                            <td class="text-center <?php echo $training_status == 'Upcoming' ? 'text-primary' : 'text-danger'; ?>">
                                <?php echo $training_status; ?></td>

                            <td><a href="list.php?id=<?php echo $training_id;?>" class="btn btn-primary " >नोंदणी करा  !</a></td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <hr>
            </div>
            <div align="center">
               
            </div>
            <div class="table-responsive">
                <h2 class="bg-primary text-center text-white titlefont">शैक्षणिक  वर्ष  सन २०१९ - २०२० मधील पूर्ण झालेले प्रशिक्षण </h2>
                <table class="table table-bordered " id="table2excel">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">अ. क्र</th>
                            <th scope="col">प्रशिक्षणाचे नाव </th>
                            <th scope="col">दिनांक </th>
                            <th scope="col">कालावधी </th>
                            <th scope="col">प्रशिक्षकांची  संख्या  </th>
                            <th scope="col">प्रशिक्षणाचे प्रमुख </th>
                            <th scope="col">स्थिती </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $training = "SELECT * FROM training  WHERE status = 'Completed' ORDER BY id DESC";
                            $run_training = mysqli_query($con, $training);
                                    $ia=0;
                            while($row_training = mysqli_fetch_array($run_training)){
                                $training_id = $row_training['id'];
                                $training_name = $row_training['name'];
                                $training_date = $row_training['date'];
                                $training_duration = $row_training['duration'];
                                $training_intake = $row_training['intake'];
                                $training_incharge = $row_training['incharge'];
                                $training_status = $row_training['status'];
                                
                                 $ia=$ia+1;
                ?>
                        <tr>
                            <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $training_name; ?></td>
                            <td><?php echo $training_date; ?></td>
                            <td><?php echo $training_duration; ?>  दिवस</td>
                            <td><?php echo $training_intake; ?></td>
                            <td><?php echo $training_incharge; ?></td>

                            <td class="text-center <?php echo $training_status == 'Upcoming' ? 'text-primary' : 'text-danger'; ?>">
                                <?php echo $training_status; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <hr>
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
</body>

</html>
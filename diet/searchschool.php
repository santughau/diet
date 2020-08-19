<?php 
$page_title = "Digital School Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  च्या अधिकृत वेबसाइट वर आजच  नांदेड  जिल्हातील  डिजिटल शाळा शोधा   , संतोष केंद्रे  IT विभाग  नांदेड ";
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
        <div class="col-md-12 text-justify">
           <div class="bg-secondary text-white text-center">
                        <h2>नांदेड जिल्लातील डिजिटल शाळां </h2>
                    </div>
                    <div id="shareIconsCountInside" align="center"></div>
                    <hr>
                    <div align="center">
                        
                    </div>
                    <div class=" table-responsive">
                    <table class="table table-bordered" id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ  क्र </th>
                                <th scope="col">शाळेचे नाव  </th>
                                 <th scope="col">तालुका  </th>
                                 <th scope="col">संगणकांची संख्या  </th>
                                 <th scope="col">प्रोजेक्टर ची संख्या  </th>
                                 <th scope="col">प्रिंटर ची संख्या  </th>
                                 <th scope="col">प्रोजेक्टर  खोल्या ची संख्या  </th>
                                 <th scope="col">इंटरनेट सुविधा </th>
                                 <th scope="col">रोजचा सरासरी तास वापर </th>
                                 <th scope="col">ऑडिओ सिस्टिम सुविधा</th>
                                 <th scope="col">इन्व्हर्टर  ची सुविधा </th>
                                 <th scope="col">तंत्रस्न्हेही प्रशिक्षित आहेत</th>
                                 <th scope="col">तंत्रस्नेही प्रशिक्षणाची गरज आहे का ?</th>
                                 <th scope="col">आपल्या डिजिटल शाळेविषयी माहिती</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list = "SELECT * FROM digital WHERE status = 'Approved' ORDER BY id DESC";
                            $run_list = mysqli_query($con, $list);
                                    $ia=0;
                            while($row_list = mysqli_fetch_array($run_list)){
                                $list_id = $row_list['id'];
                                $list_name = $row_list['name'];
                                $list_school = $row_list['school'];
                                $list_taluka = $row_list['taluka'];
                                $list_computer = $row_list['computer'];
                                $list_projector = $row_list['projector'];
                                $list_printer = $row_list['printer'];
                                $list_room = $row_list['room'];
                                $list_internet = $row_list['internet'];
                                $list_hour = $row_list['hour'];
                                $list_audio = $row_list['audio'];
                                $list_isTrained = $row_list['isTrained'];
                                $list_training = $row_list['training'];
                                $list_opinion = $row_list['opinion'];
                                $list_inverter = $row_list['inverter'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$list_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                ?>
                            <tr class="">
                            <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $list_school; ?></td>
                            <td><?php echo $taluka_name; ?> </td>
                            <td><?php echo $list_computer; ?> </td>
                            <td><?php echo $list_projector; ?> </td>
                            <td><?php echo $list_printer; ?> </td>
                            <td><?php echo $list_room; ?> </td>
                            <td><?php echo $list_internet; ?> </td>
                            <td><?php echo $list_hour; ?> तास  </td>
                            <td><?php echo $list_audio; ?> </td>
                            <td><?php echo $list_inverter; ?> </td>
                            <td><?php echo $list_isTrained; ?> </td>
                            <td><?php echo $list_training; ?> </td>
                            <td><?php echo $list_opinion; ?> </td>
                            
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <br><br><button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button>
                    <div align="center">
                    
                </div>
            <hr>
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
    $(document).ready(function(){
    $('#table2excel').DataTable();
});    
</script>
<script>
    $("#but").click(function() {
        $("#table2excel").table2excel({
            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
            filename: "digitalschool_list.xls" //do not include extension
        });
    });
</script>
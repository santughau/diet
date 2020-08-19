<?php 
$page_title = "TechSavey Pages | DICPED NANDED";
$page_key = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$page_desc = "dicped-nanded,diet-nanded,DISTRICT-INSTITUTE-OF-EDUCATIONAL-CONTINUOUS-PROFESSIONAL-DEVELOPMENT-nanded,district-institute-of-education-and-training-nanded, santosh sontakke, nanded, degloor";
$message = "DICPED  नांदेड  च्या अधिकृत वेबसाइट वर आजच  आपले नाव  तंत्रस्नेही  म्हणून तपासून  पहा  , संतोष केंद्रे  IT विभाग  नांदेड ";
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
                        <h2>तंत्रस्नेही  शिक्षकांचा शोध  घ्या </h2>
                    </div>
                    <div id="shareIconsCountInside" align="center"></div>
                    <div align="center">
                        
                    </div>
                    <hr>
                    <div align="center">
                       
                    </div>
                    <div class=" table-responsive">
                    <table class="table table-bordered" id="table2excel">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">अ  क्र </th>
                                <th scope="col">शिक्षकाचे नाव </th>
                                <th scope="col">शाळेचे नाव  </th>
                                 <th scope="col">तालुका  </th>
                                 <th scope="col">दिनांक  </th>
                                 <th scope="col">संगणकातील  कौशल्ये  </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list = "SELECT * FROM teacher WHERE status = 'Approved' ORDER BY id ASC";
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
                                $list_date = $row_list['Date'];
                                $list_skill = $row_list['skill'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$list_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                ?>
                            <tr class="">
                                 <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $list_name; ?></td>
                            <td><?php echo $list_school; ?></td>
                            <td><?php echo $taluka_name; ?> </td>
                            <td><?php echo $list_date; ?> </td>
                            <td><?php echo $list_skill; ?> </td>
                            
                                
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
            filename: "technoteacher_list.xls" //do not include extension
        });
    });
</script>
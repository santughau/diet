<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];            
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
            <div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-white bg-secondary text-center">School Details </h2>
                        <hr>
                        <table class="table table-bordered table-condensed ">
                            <tbody>
                                <?php
                            $list = "SELECT * FROM digital WHERE id = '$id'";
                            $run_list = mysqli_query($con, $list);
                                    $ia=0;
                            $row_list = mysqli_fetch_array($run_list);
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
                                $list_mobile = $row_list['mobile'];
                                $list_status = $row_list['status'];
                                
                                 $ia=$ia+1;
                                
                            $taluka = "SELECT * FROM taluka WHERE id = '$list_taluka' ";
                            $run_taluka = mysqli_query($con, $taluka);
                            $row_taluka = mysqli_fetch_array($run_taluka);

                            $taluka_id = $row_taluka['id'];
                            $taluka_name = $row_taluka['name'];
                ?>
                                <tr class="info">
                                    <th class="bg-dark text-white">मु अ चे पूर्ण नाव</th>
                                    <th><?php echo $list_name;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शाळेचे पूर्ण नाव</th>
                                    <th><?php echo $list_school;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">तालुका निवडा</th>
                                    <th> <?php echo $taluka_name;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">मु अ मोबाइल क्रमांक</th>
                                    <th><?php echo $list_mobile;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">संगणकांची संख्या</th>
                                    <th><?php echo $list_computer;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">प्रोजेक्टर ची संख्या</th>
                                    <th><?php echo $list_projector;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">प्रिंटर ची संख्या</th>
                                    <th><?php echo $list_printer;?></th>
                                </tr>                
                                <tr class="info">
                                    <th class="bg-dark text-white">इंटरनेट सुविधा</th>
                                    <th><?php echo $list_internet;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">रोजचा सरासरी तास वापर</th>
                                    <th><?php echo $list_hour;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">ऑडिओ सिस्टिम सुविधा</th>
                                    <th><?php echo $list_audio;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">तंत्रस्न्हेही प्रशिक्षित आहेत
                                    </th>
                                    <th><?php echo $list_isTrained;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">तंत्रस्नेही प्रशिक्षणाची गरज आहे का ?</th>
                                    <th><?php echo $list_training;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">इन्व्हर्टर ची सुविधा</th>
                                    <th><?php echo $list_inverter;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">आपल्या डिजिटल शाळेविषयी माहिती</th>
                                    <th><?php echo $list_opinion;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">स्थिती </th>
                                    <th><?php echo $list_status;?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                    <a href="viewdigital.php" class="btn btn-primary text-white">Back</a>
                    </div><br><br><hr>
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

    </html>
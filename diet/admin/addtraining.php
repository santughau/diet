<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
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
            <div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center bg-secondary text-white">Add Training Here....</h1>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Training Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Training Name Here" name="name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Date</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="date" placeholder="Choose Date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Durations</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Number Of Days Here" name="duration" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Intake</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Intake Capacity Here" name="intake" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-dark">Course Incharge</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Course I/c Here" name="incharge" required>
                                </div>
                            </div>




                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Add Training</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
    <script>
        $(function() {
            $('.datepicker').datepicker();
        });
    </script>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $duration = $_POST['duration'];
        $intake = $_POST['intake'];
        $incharge = $_POST['incharge'];

        $insert_news = "INSERT INTO training (name,date,duration,intake,incharge,status) VALUES ('$name','$date','$duration','$intake','$incharge','Upcoming')";

        $insert_pro = mysqli_query($con,$insert_news);

        if($insert_pro){

        echo"<script>
            alert('Welcome, You have added a new Training !')
        </script>";
        echo"<script>
            window.open('training.php', '_self')
        </script>";
        }
        }

    ?>
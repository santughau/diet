<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
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
                <h1 class="text-center bg-secondary text-white">View all Schools </h1>
                <div id="product_table ">
                    <table class="table table-bordered table-responsive" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">अ .क्र </th>
                                <th scope="col">ID No</th>
                                <th scope="col">शाळेचे नाव </th>
                                <th scope="col">UDISE</th>
                                <th scope="col">तालुका </th>
                                <th scope="col">Password </th>
                                <th scope="col">एकूण विदयार्थी संख्या </th>
                                <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i>
                                </th>
                                <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                   $visiter = "SELECT * FROM schoollist  ORDER BY schoolName DESC ";
                    $run_visiter = mysqli_query($con, $visiter);
                            $ia=0;
                            while($row_visiter = mysqli_fetch_array($run_visiter)){
                                $id = $row_visiter['id'];
                                $schoolName = $row_visiter['schoolName'];
                                $taluka = $row_visiter['taluka'];
                                $password = $row_visiter['password'];
                                $udise = $row_visiter['udise'];             
                                 $ia=$ia+1 ;
                
                ?>
                            <tr>
                                <th scope="row"><?php echo $ia;?></th>
                                <td><?php echo $id; ?></td>
                                <td> <?php echo $schoolName; ?></td>
                                <td><?php echo $udise; ?></td>
                                <td><?php echo $taluka ?></td>
                                <td><?php  echo $password?></td>
                                <td><?php  ?></td>

                                <td><a href="viewDetails.php?id=<?php echo $id;?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                                <td><a href="viewSchool.php?del=<?php echo $id;?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
                filename: "SchoolList.xls" //do not include extension
            });
        });

    </script>
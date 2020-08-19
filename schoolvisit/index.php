<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
$ida = $_SESSION['id'];
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
            <h6 class="text-center bg-warning text-dark">मदती करिता फोन करा : 8446085083 / 9881932921  </h6>
            <h1 class="text-center bg-secondary text-white"><?php echo $name ; ?></h1>
            <div align="center"><a align="center" href="http://www.diecpdnanded.in/schoolvisit/addschool.php"  class="btn btn-primary">PGI नुसार शाळाभेट प्रपत्र भरण्याकरिता  क्लिक करावे</a><hr></div>
                    <div id="product_table ">
                     <table class="table table-bordered table-responsive" id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">अ .क्र . </th>
                          <th scope="col">शाळेचे नाव </th>
                          <th scope="col">UDISE</th>
                          <th scope="col">तालुका </th>
                          <th scope="col">केंद्र </th>
                          <th scope="col">भेट देणाऱ्याचे  नाव </th>
                          <th scope="col">भेट क्र . 1</th>
                          <th scope="col">भेट क्र . 2</th>
                          <th scope="col">भेट क्र . 3</th>
                        </tr>
                         </thead>
                      <tbody>
                         <?php
                   $student = "SELECT * FROM schoollist WHERE vName = '$ida'  ORDER BY id DESC ";
                    $run_student = mysqli_query($con, $student);
                            $ia=0;
                            while($row_student = mysqli_fetch_array($run_student)){
                                $id = $row_student['id'];
                                $sname = $row_student['sname'];
                                $udise = $row_student['udise'];
                                $taluka = $row_student['taluka'];
                                $block = $row_student['block'];
                                $vName = $row_student['vName'];
                                
                                 $ia=$ia+1;
                                
                        $tName = "SELECT * FROM taluka WHERE id = '$taluka' ";
                            $run_tName = mysqli_query($con, $tName);
                            $row_tName = mysqli_fetch_array($run_tName);
                            $nameTa = $row_tName['name'];
                                
                    $bName = "SELECT * FROM block WHERE id = '$block' ";
                            $run_bName = mysqli_query($con, $bName);
                            $row_bName = mysqli_fetch_array($run_bName);
                            $nameba = $row_bName['name'];
                                
                    $vName = "SELECT * FROM user WHERE id = '$vName' ";
                            $run_vName = mysqli_query($con, $vName);
                            $row_vName = mysqli_fetch_array($run_vName);
                            $nameva = $row_vName['name'];
                                
                                
                    
                                
                 $visiter1 = "SELECT * FROM schooldata WHERE schoolName = '$id' && visitNo = '1' && userId = '$ida'";
                $run_visiter1 = mysqli_query($con, $visiter1);

                $row_visiter1 = mysqli_fetch_array($run_visiter1);
                $date1 = $row_visiter1['date'];
                                
                  $visiter2 = "SELECT * FROM schooldata WHERE schoolName = '$id' && visitNo = '2' && userId = '$ida'";
                $run_visiter2 = mysqli_query($con, $visiter2);

                $row_visiter2 = mysqli_fetch_array($run_visiter2);
                $date2 = $row_visiter2['date'];
                                
                $visiter3 = "SELECT * FROM schooldata WHERE schoolName = '$id' && visitNo = '3' && userId = '$ida'";
                $run_visiter3 = mysqli_query($con, $visiter3);

                $row_visiter3 = mysqli_fetch_array($run_visiter3);
                $date3 = $row_visiter3['date'];
                
                ?> 
                        <tr>
                          <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo ucfirst($sname); ?></td>
                          <td> <?php echo $udise; ?></td>
                          <td><?php echo $nameTa; ?></td>
                          <td><?php echo $nameba; ?></td>
                          <td><?php echo $nameva; ?></td>
                            <td><?php echo $date1; ?></td>
                            <td><?php echo $date2; ?></td>
                            <td><?php echo $date3; ?></td>
                        </tr>
                     <?php } ?>   
                      </tbody>
                    </table>
                        <hr>
                    </div>
                    <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button><hr>
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
$(document).ready(function(){
    $('#table2excel').DataTable();
});
</script>
<script>
$("#but").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "<?php echo $name;?>.xls" //do not include extension
  }); 
});
</script>
 
 
 
 
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

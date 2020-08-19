<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM schooldata WHERE id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('schoollist.php','_self')</script>";  
    }
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
			<div class="col-md-12">
                <div id="product_table ">
                     <table class="table table-bordered table-responsive" id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">अ .क्र </th>
                          <th scope="col">शाळेचे नाव </th>
                          <th scope="col">भेटीचा क्रमांक</th>
                          <th scope="col">भेटीचा  दिनांक </th>
                          <th scope="col">तालुका </th>
                          <th scope="col">केंद्र  </th>
                          <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i>
</th>                  
                          <th scope="col"><i class="fa fa-trash-o" aria-hidden="true"></i>
</th>
                        </tr>
                         </thead>
                      <tbody>
                         <?php
                   $visiter = "SELECT * FROM schooldata  ORDER BY id DESC ";
                    $run_visiter = mysqli_query($con, $visiter);
                            $ia=0;
                            while($row_visiter = mysqli_fetch_array($run_visiter)){
                                $id = $row_visiter['id'];
                                $schoolName = $row_visiter['schoolName'];
                                $visitNo = $row_visiter['visitNo'];
                                $date = $row_visiter['date'];
                                $block = $row_visiter['block'];
                                
                                 $ia=$ia+1;
                                
                            $schoolName = "SELECT * FROM schoollist WHERE  	id = '$schoolName' ";
                            $run_schoolName = mysqli_query($con, $schoolName);
                            $row_schoolName = mysqli_fetch_array($run_schoolName);
                            $sname = $row_schoolName['sname'];
                                
                 $talukaName = "SELECT * FROM taluka WHERE  id = '$talukaId' ";
                            $run_talukaName = mysqli_query($con, $talukaName);
                            $row_talukaName = mysqli_fetch_array($run_talukaName);
                            $talukaname = $row_talukaName['name'];
                
                ?> 
                        <tr>
                          <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $sname; ?></td>
                          <td> <?php echo $visitNo; ?></td>
                          <td><?php echo $date; ?></td>
                          <td><?php echo $talukaname; ?></td>
                          <td><?php echo $block; ?></td>
                          
                            <td><a href="schoolDetails.php?id=<?php echo $id;?>" class="btn btn-primary" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            
                          <td><a href="schoollist.php?del=<?php echo $id;?>" class="btn btn-danger" ><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
    filename: "SchoolList.xls" //do not include extension
  }); 
});
</script>
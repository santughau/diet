<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
require_once('inc/top.php');
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    $del_query = "DELETE  FROM gallery WHERE gallery_id = '$del_id'";
    $del_run = mysqli_query($con,$del_query);
    if($del_run)
    {
       echo "<script>alert('You have been deleted successfully')</script>";
        echo "<script>window.open('gallery.php','_self')</script>";  
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
			<div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
			<div class="col-md-9">            
            <div class="row">
                <div class="col-md-12">
                  <h1 class="text-center bg-secondary text-white">View all Messages</h1>
                    <div id="product_table">
                     <table class="table table-bordered " id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">Sr No</th>
                          <th scope="col">Date</th>
                          <th scope="col">Senders Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Mobile</th>
                          <th scope="col">Messages</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                   $contact = "SELECT * FROM contact ORDER BY contact_id DESC ";
                    $runcontact = mysqli_query($con, $contact);
                            $i=0;
                            while($rowcontact = mysqli_fetch_array($runcontact)){
                                $contact_id = $rowcontact['contact_id'];
                                $contact_name = $rowcontact['contact_name'];
                                $contact_mobile = $rowcontact['contact_mobile'];
                                $contact_message = $rowcontact['contact_message'];
                                $contact_time = $rowcontact['contact_time'];
                                $contact_email = $rowcontact['contact_email'];
                                $i++;
                ?> 
                        <tr>
                          <th scope="row"><?php echo $i;?></th>                          
                          <td><?php echo $contact_time; ?></td>
                          <td><?php echo $contact_name; ?></td>
                          <td><?php echo $contact_email; ?></td>
                          <td><?php echo $contact_mobile; ?></td>
                          <td><?php echo $contact_message; ?></td>
                        </tr>
                     <?php } ?>   
                      </tbody>
                    </table>
                    </div>
                    <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button><hr>
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
    filename: "messages.xls" //do not include extension
  }); 
});
</script>

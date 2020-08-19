<?php 
include('inc/top.php');
$output = '';
$sql = "SELECT * FROM taluka WHERE dist_id = '".$_POST["id"]."' order by taluka_name asc";
$result = mysqli_query($con,$sql);
while($row= mysqli_fetch_array($result)){
    $output .= '<option value="'.$row["taluka_name"].'">'.$row["taluka_name"].'</option>';
}
echo $output;
?>

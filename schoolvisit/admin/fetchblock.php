<?php 
require_once('inc/db.php');
$output = '';
$sql = "SELECT * FROM  block WHERE talukaId = '".$_POST["id"]."' ORDER BY name ASC";
$result = mysqli_query($con,$sql);
while($row= mysqli_fetch_array($result)){
    $output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
}
echo $output;
?>
<?php 
require_once('inc/db.php');
$output = '';
$sql = "SELECT * FROM  schoollist WHERE id = '".$_POST["id"]."'";
$result = mysqli_query($con,$sql);
$row= mysqli_fetch_array($result);

$block = $row['block'];

$sqlblock = "SELECT * FROM  block WHERE id = '$block'";
$resultblock = mysqli_query($con,$sqlblock);
$rowblock= mysqli_fetch_array($resultblock);

$blockname = $rowblock['name'];



$output .= '<option value="'.$rowblock['name'].'">'.$rowblock['name'].'</option>';
echo $output;
?>
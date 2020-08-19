<?php 
require_once('inc/db.php');
$output = '';
$sql = "SELECT * FROM  schoollist WHERE id = '".$_POST["id"]."'";
$result = mysqli_query($con,$sql);
while($row= mysqli_fetch_array($result)){
    $output .= '<option value="'.$row["udise"].'">'.$row["udise"].'</option>';
}
echo $output;
?>
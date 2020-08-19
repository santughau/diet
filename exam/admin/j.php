<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_mobile'])){
        header('Location:../admin.php');
    }
require_once('inc/top.php');
include ("PHPExcel/IOFactory.php");
$objPHPExcel = PHPExcel_IOFactory::load('r.xlsx');
foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
	$highestRow = $worksheet->getHighestRow();
	for($row=2; $row<=$highestRow; $row++){
		$dist_id = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$taluka_name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
		
		$sql = "INSERT INTO taluka(dist_id,taluka_name) VALUES('".$dist_id."','".$taluka_name."')";
		mysqli_query($con,$sql);
	}
}

?>
<?php 
ob_start();
session_start();

require_once('inc/top.php');
include ("PHPExcel/IOFactory.php");
$objPHPExcel = PHPExcel_IOFactory::load('.xls');
foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
	$highestRow = $worksheet->getHighestRow();
	for($row=2; $row<=$highestRow; $row++){
		$udise = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$sname = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
		$taluka = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$password = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
		
		$sql = "INSERT INTO schoollist(udise,schoolName,taluka,password) VALUES('".$udise."','".$sname."','".$taluka."','".$password."')";
		mysqli_query($con,$sql);
	}
}

?>
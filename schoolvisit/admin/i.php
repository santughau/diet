<?php 
ob_start();
session_start();

require_once('inc/top.php');
include ("PHPExcel/IOFactory.php");
$objPHPExcel = PHPExcel_IOFactory::load('ssd.xls');
foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
	$highestRow = $worksheet->getHighestRow();
	for($row=2; $row<=$highestRow; $row++){
		$taluka = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
		$username = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
		$password = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
		
		$sql = "INSERT INTO user(name,email,password,talukaId) VALUES('".$name."','".$username."','".$password."','".$taluka."')";
		mysqli_query($con,$sql);
	}
}

?>
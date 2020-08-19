<?php 
ob_start();
session_start();

require_once('inc/top.php');
include ("PHPExcel/IOFactory.php");
$objPHPExcel = PHPExcel_IOFactory::load('school.xlsx');
foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
	$highestRow = $worksheet->getHighestRow();
	for($row=2; $row<=$highestRow; $row++){
		$taluka = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$block = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
		$udise = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
		$sname = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
        $visiter = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
		
		$sql = "INSERT INTO schoollist(sname,udise,taluka,block,vName) VALUES('".$sname."','".$udise."','".$taluka."','".$block."','".$visiter."')";
		mysqli_query($con,$sql);
	}
}

?>
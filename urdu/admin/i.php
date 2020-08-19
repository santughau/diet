<?php 
ob_start();
session_start();

require_once('inc/top.php');
include ("PHPExcel/IOFactory.php");
$objPHPExcel = PHPExcel_IOFactory::load('.xlsx');
foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
	$highestRow = $worksheet->getHighestRow();
	for($row=2; $row<=$highestRow; $row++){
		$udise = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$Name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
        $taluka = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
        
         $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Output: 54esmdr0qf
         $num = substr(str_shuffle($permitted_chars), 0, 6);
		
		$sql = "INSERT INTO schoollist(schoolName,udise,taluka,password) VALUES('$Name','$udise','$taluka','$num')";
		mysqli_query($con,$sql);
	}
}

?>

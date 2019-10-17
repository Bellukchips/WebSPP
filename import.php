<?php
require'PHPExcel/PHPExcel/IOFactory.php';
include'config/connect.php';
$inputfilename = $_FILES['file']['tmp_name'];
$exceldata = array();

try {
  $inputfiltype = PHPExcel_IOFactory::identify($inputfilename);
  $objReader = PHPExcel_IOFactory::createReader($inputfiltype);
  $objPHPExcel = $objReader->load($inputfilename);
} catch (Exception $e) {
  die('error loading file"'.pathinfo($inputfilename,PATHINFO_BASENAME).'":'.$e->getMessage());
}
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row=1; $row <= $highestRow; $row++) { 
$rowdata = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);
$sql =mysqli_query($koneksi,"INSERT INTO imports VALUES('".$rowdata[0][0]."','".$rowdata[0][1]."','".$rowdata[0][2]."','".$rowdata[0][3]."')");
if ($sql) {
  $exceldata[] = $rowdata[0];
echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
  # code...
}else{
	echo"<script>alert('GAGAL MENGIMPORT DATA MOHON CEK FILE EXCEL ANDA')</script>";
	echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";  echo "Error :".$sql."<br>".mysql_error();

}
}
mysqli_close();


?>
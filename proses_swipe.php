<?php 
include'config/connect.php';
$tahun = $_POST['tahun'];
$pilih = $_POST['pilih'];
$naikan = $_POST['naikan'];
$proses = mysql_query("UPDATE imports set id_kelass='$naikan' where tahun_ajaran='$tahun' and id_kelass='$pilih'") or die(mysql_error());
if ($proses) {
	echo "<script>alert('Kelas Berhasil Dinaikan')</script>";
	echo '<script>window.history.back()</script>';
}else{
	echo "<script>alert('Kelas Gagal Dinaikan')</script>";
	echo '<script>window.history.back()</script>';
}
 ?>

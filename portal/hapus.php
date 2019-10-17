<?php
include'../config/connect.php';
$q = mysqli_query($koneksi,"DELETE FROM imports");
if ($q) {
	# code...
	  echo "<meta http-equiv='refresh' content='1 url=../form_kelas.php'>";
}else{
	echo "<script>alert('Gagal Menghapus Data')</script>";
	echo'<script>window.history.back()</script>';
}
?>
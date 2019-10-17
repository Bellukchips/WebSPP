<?php
include'config/connect.php';
$q = mysqli_query($koneksi,"DELETE FROM imports");
if ($q) {
	# code...
	echo "<script>alert('Berhasil Menghapus Data')</script>";
	echo'<script>window.history.back()</script>';
}else{
	echo "<script>alert('Gagal Menghapus Data')</script>";
	echo'<script>window.history.back()</script>';
}
?>
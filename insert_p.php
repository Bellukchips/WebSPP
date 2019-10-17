<?php
include'config/connect.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$level = $_POST['level'];

	$q = mysqli_query($koneksi"INSERT INTO users VALUES('$nama','$user','$pass','$level',null)") or die(mysqli_error());
	if ($q) {
		echo "<script>alert('berhasil Di simpan')</script>";
		echo '<script>window.history.back()</script>';
	}else{
	echo "<script>alert('Gagal Menyimpan')</script>";
		echo '<script>window.history.back()</script>';
	}

}else{
		echo '<script>window.history.back()</script>';
}

?>
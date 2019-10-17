	<?php
	include'config/connect.php';
	if (isset($_POST['update'])) {
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$tahun = $_POST['tahun'];
	$que = mysqli_query($koneksi,"UPDATE imports SET nama='$nama',id_kelass='$kelas',tahun_ajaran='$tahun' WHERE nis='$nis'") or die(mysql_error());
	if ($que) {
		echo "<script>alert('Data Berhasil Di Update')</script>";
	echo "<meta http-equiv='refresh' content='1 url=data_siswa.php'>";
	} else {
		echo "<script>alert('Gagal Di Update')</script>";
		echo '<script>window.history.back()</script>';
		# code...
	}
	

		# code...
	}else{
		echo '<script>window.history.back()</script>';
	}

	?> 
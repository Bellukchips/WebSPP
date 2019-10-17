	<?php
	include'config/connect.php';
	if (isset($_POST['update'])) {
	$nis = $_POST['id'];
	$kelas = $_POST['kelas'];
	$que = mysqli_query($koneksi,"UPDATE t_kelas SET kelas='$kelas' where id_kelas='$nis'") or die(mysqli_error());
	if ($que) {
		echo "<script>alert('Data Berhasil Di Update')</script>";
	echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
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
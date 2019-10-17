	<?php
	include'config/connect.php';
	if(isset($_GET['nis'])){

		$nis = $_GET['nis'];
		$cek = mysqli_query($koneksi,"SELECT * FROM imports WHERE nis='$nis'") or die(mysql_error());

		if (mysqli_num_rows($cek)==0) {
			# code...
		echo '<script>window.history.back()</script>';
		} else {
			$hapus = mysqli_query($koneksi,"DELETE FROM imports WHERE nis='$nis'");
			if ($hapus) {

			echo "<script>alert('Data Berhasil Di hapus')</script>";
	echo "<meta http-equiv='refresh' content='1 url=data_siswa.php'>";
				# code...
			} else {
				echo "<script>alert('Data Gagal Dihapus')</script>";
	echo "<meta http-equiv='refresh' content='1 url=data_siswa.php'>";
				# code...
			}
			
			# code...
		}
		

	}


	?>
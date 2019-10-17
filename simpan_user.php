	<?php
	include 'config/connect.php';
	session_start();
	$nis = $_POST['nis'];
	$nama= $_POST['nama'];
		$kelas = $_POST['kelas'];
		$nominal = $_POST['nominal'];
		$bulan = $_POST['bulan'];
		$tanggal = date("Y-m-d");
		$tahun =  $_POST['tahun'];
		$status = $_POST['status'];
		$user = $_POST['nama_petugas'];
	$cek = mysqli_query($koneksi,"SELECT * FROM imports inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where nis='$nis' and id_bulann='$bulan'");
	if (mysqli_num_rows($cek)) {
	echo "<script>alert('Anda Sudah Membayar Pada Bulan $bulan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
	}elseif ($nominal == '') {
		echo "<script>alert('Nominal Kelas Anda Masih Kosong , Anda Akan Di alihkan Ke Halaman Utama')</script>";
		echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
	}else{
		$query = mysqli_query($koneksi,"INSERT INTO spp VALUES('$nis','$nama','$kelas','$nominal','$bulan','$tanggal','$tahun','$status','$user')") or die(mysqli_error());

		if ($query) {
			echo "<script>alert('Data Berhasil Di simpan ,  Anda Akan Dialihkan Ke halaman Utama')</script>";
		echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
			# code...
		} else {
			echo "<script>alert('Gagal Di simpan , Anda Akan dialihkan ke halaman utama')</script>";
		echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
			# code...
		}

	}

	/*if (isset($_POST['simpan'])) 
	{
		$nis = $_POST['nis'];
		$kelas = $_POST['kelas'];
		$nominal = $_POST['nominal'];
		$bulan = $_POST['bulan'];
		$tanggal = $_POST['tanggal'];
		$tahun =  $_POST['tahun'];
		$status = $_POST['status'];

		$query = mysql_query("INSERT INTO lunas VALUES('$nis','$kelas','$nominal','$bulan','$tanggal','$tahun','$status')") or die(mysql_error());

		if ($query) {
			echo "<script>alert('Data Berhasil Di simpan')</script>";
		echo '<script>window.history.back()</script>';
			# code...
		} else {
			echo "<script>alert('Gagal Di simpan')</script>";
		echo '<script>window.history.back()</script>';
			# code...
		}
		
		# code...
	} else {
		# code...
		echo '<script>window.history.back()</script>';
	}*/

	?>

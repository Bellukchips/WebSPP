<?php
	include'config/connect.php';
	session_start();
if (isset($_POST['simpan'])) {


	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$thn = $_POST['tahun'];

	$cek= mysqli_query($koneksi,"SELECT * FROM imports where nis='$nis'") or die(mysql_error());
	$cek_kelas = mysqli_query($koneksi,"SELECT * FROM t_kelas where id_kelas='$kelas'");
	if (mysqli_num_rows($cek)) {
				  echo "<script>alert('Nis Sudah ada')</script>";
    echo '<script>window.history.back()</script>';
	}elseif (mysqli_num_rows($cek_kelas)) {
	$query= mysqli_query($koneksi,"INSERT INTO imports VALUES('$nis','$nama','$kelas','$thn')") or die(mysql_error());
	if ($query) {
		  echo "<script>alert('Data Berhasil Di simpan')</script>";
    echo '<script>window.history.back()</script>';
	} else {
		  echo "<script>alert('Gagal Menyimpan')</script>";
    echo '<script>window.history.back()</script>';
		# code...
	}
	}else{
		
	  echo "<script>alert('ID Kelas Tidak Ada ')</script>";
    echo '<script>window.history.back()</script>';

	}
	
		
		# code...
}else{
	  echo '<script>window.history.back()</script>';
}

?>


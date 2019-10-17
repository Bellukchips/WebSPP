	<?php
	include'config/connect.php';
	if(isset($_GET['id'])){

		$id = $_GET['id'];
		$cek = mysqli_query($koneksi,"SELECT * FROM users WHERE id='$id'") or die(mysqli_error());

		if (mysqli_num_rows($cek)==0) {
			# code...
		echo '<script>window.history.back()</script>';
		} else {
			$hapus = mysqli_query($koneksi"DELETE FROM users WHERE id='$id'");
			if ($hapus) {

			echo "<script>alert('Data Berhasil Di hapus')</script>";
	echo "<meta http-equiv='refresh' content='1 url=view_users.php'>";
				# code...
			} else {
				echo "<script>alert('Data Gagal Dihapus')</script>";
	echo "<meta http-equiv='refresh' content='1 url=view_users.php'>";
				# code...
			}
			
			# code...
		}
		

	}


	?>
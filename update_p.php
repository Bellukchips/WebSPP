		<?php
		include'config/connect.php';
		if (isset($_POST['update'])) {
		$nama = $_POST['nama'];
			$user = $_POST['user'];
			$id = $_POST['id'];
			$pass = $_POST['pass'];
			$q = mysqli_query($koneksi,"UPDATE users SET name='$nama',username='$user',password='$pass' where id='$id'") or die(mysqli_error());
			if ($q) {
			echo "<script>alert('berhasil Di ubah')</script>";
				echo '<script>window.history.back()</script>';
			}else{
					echo "<script>alert('Gagal Di ubah')</script>";
				echo '<script>window.history.back()</script>';
			}

		}else{

				echo '<script>window.history.back()</script>';
		}

		?>
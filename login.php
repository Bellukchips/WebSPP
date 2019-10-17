	<?php
	session_start();
	include'config/connect.php';
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$cek = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$user' and password='$pass'");
	$data = mysqli_fetch_array($cek);
	if ($pass == $data['password']) {
	$_SESSION['status'] = $data['level'];
	$_SESSION['user']=$data['username'];
		$_SESSION['lastAct'] = time();
		if ($_SESSION['status'] == 'admin') {
			$_SESSION['nama']=$data['name'];

		echo "<meta http-equiv='refresh' content='1 url=menu_admin.php'>";
			# code...
		}elseif ($_SESSION['status'] == 'petugas') {
			$_SESSION['petugas'] = $data['name'];
			
		echo "<meta http-equiv='refresh' content='1 url=menu.php'>";
		}else{
				echo "<script>alert('Anda Tidak Memiliki Hak Akses')</script>";
		echo "<meta http-equiv='refresh' content='1 url=index.php'>";
		}
	} else {
		echo "<script>alert('Username Dan Password Tidak Terdaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
	}
	?>

	<!--$expiry = time()+5;
	$data = (object) array( "value1" => "just for fun", "value2" => "i'll save whatever I want here" );
	$cookieData = (object) array( "data" => $data, "expiry" => $expiry );
	setcookie( "cookiename",$expiry, $expiry );
	if (!empty($_COOKIE['cookiename'])) {
	echo "masih".'<br/>';
	echo date('d-m-Y H:i:s',$_COOKIE['cookiename']);
	} else {
		setcookie( "cookiename",$expiry,$expiry );
	require'backup/index.php';
	}
	-->
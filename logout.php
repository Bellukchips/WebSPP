<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session();
unset($_SESSION['user']);
unset($_SESSION['status']);
unset($_SESSION['nama']);
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:index.php?pesan=logout");
echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>
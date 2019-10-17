<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "aspp";

// $koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
// mysqli_($db, $koneksi) or die("Tidak ada database yang dipilih!");
$koneksi = mysqli_connect("localhost","root","","aspp");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
  <?php
  include'config/connect.php';
  $nis = $_GET['id_siswa'];
  $bulan = $_GET['id_bulann'];
  $q = mysqli_query($koneksi,"DELETE from spp where id_siswa='$nis' and id_bulann='$bulan'") or die(mysql_error());
  if ($q) {
    // code..
    echo "<script>alert('Data Berhasil Di Hapus')</script>";
    echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
  }else{
    echo "<script>alert('Data Gagal Di Hapus')</script>";
    echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
  }
  ?>

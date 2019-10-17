    <?php
  require "config/connect.php";
  $q = $_POST['kelas'];
  $e = $_POST['nominal'];
  $cek = mysqli_query($koneksi,"SELECT * FROM spp where kelass='$q'") or die(mysql_error());
  if (mysqli_num_rows($cek) == 0) {
    echo "<script>alert('BELUM TERDAPAT TRANSAKSI PEMBAYARAN PADA KELAS TERSEBUT , Sehingga nominal tidak dapat diubah sementara')</script>";
  echo "<meta http-equiv='refresh' content='1 url=form_setting_pembayaran.php'>";
  }else{
    $a = mysqli_query($koneksi,"UPDATE t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis set set_nominal='$e',nominal='$e' where kelas='$q'");
  if ($a) {
  echo "<script>alert('Data Berhasil Di Ubah')</script>";
  echo "<meta http-equiv='refresh' content='1 url=form_setting_pembayaran.php'>";
  }else{
    echo "<script>alert('Data GAGAL Di Ubah')</script>";
  echo "<meta http-equiv='refresh' content='1 url=form_setting_pembayaran.php'>";
  }
  }


  ?>
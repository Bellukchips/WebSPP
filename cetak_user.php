  <!DOCTYPE html>
  <html>
  <head>
  <?php
  require'portal/head.php';
  require "config/connect.php";
  session_start();

  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {


  ?>
    <title>Result Class</title>
  </head>
  <body>

      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
      <!--bagian isi-->
          <a onclick="location.href='menu_user.php'" class="btn btn-danger" id="kembali">Kembali</a>
      <legend style="text-align:center;font-family:Verdana"><?php echo"<h3>SMK NEGERI 1 SLAWI</h3>";?>
        <?php echo"<h3>Pembayaran SPP</h3><br/>";?>
      </legend>
              <table class="table table-bordered" width="100%"  cellspacing="0" >
                <thead>
                  <tr>
  <td>Nis</td>
  <td>Nama </td>
  <td>Kelas</td>
  <td>Nominal</td>
  <td>Tanggal</td>
  <td>Bulan</td>
  <td>Status</td>
  <td>Nama Petugas</td>


                  </tr>
                </thead>
                <tbody>
          <?php
  include'config/connect.php';
  $nis= $_GET['nis']; //get the nama value from form
  $q = "SELECT * FROM imports inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where nis='$nis'"; //query to get the search result
  $result = mysqli_query($koneksi,$q);
  if (mysqli_num_rows($result)==0) {
    echo "<script>alert('Siswa Belum Membayar Bulanan , Anda Akan Dialihkan Ke Halaman Utama')</script>";
    echo "<meta http-equiv='refresh' content='1 url=menu_user.php'>";
  }else{
    while ($data = mysqli_fetch_array($result)) {  //fetch the result from query into an array
  echo "
  <tr>
  <td>".$data['nis']."</td>
  <td>".$data['nama']."</td>
  <td>".$data['kelass']."</td>
  <td>".$data['nominal']."</td>
  <td>".$data['tanggal']."</td>
  <td>".$data['nama_bulan']."</td>
  <td>".$data['status']."</td>
  <td>".$data['nama_petugas']."</td>
  </tr>";
  echo '<script>window.print()</script>';
  }
  }

  }
          ?>

        </tbody>
              </table>
              <?php 
              echo '<label style="margin-left:30px;">Bulan Yang Belum Lunas</label><br>';
  $niss = $_GET['nis'];
  $tunggak = mysql_query($koneksi,"SELECT t_bulan.id_bulan, t_bulan.nama_bulan
  FROM t_bulan
  WHERE id_bulan NOT
  IN (
  SELECT id_bulann
  FROM spp
  INNER JOIN imports ON imports.nis = spp.id_siswa INNER JOIN t_kelas ON t_kelas.id_kelas = imports.id_kelass
  WHERE id_siswa =  '$niss'
  )") or die(mysqli_error());
  if (mysqli_num_rows($tunggak) == 0) {
  echo '<label style="margin-left:30px">--------Siswa Tidak Mempunyai Tunggakan-------</label>';
  }else{
  while ($cek = mysqli_fetch_array($tunggak)) {
    echo'<label style="margin-left:30px;">Bulan : '.$cek['nama_bulan'].'</label>';
    echo"<br/>";
  }
  $q=mysqli_query($koneksi"SELECT SUM(set_nominal) FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join t_bulan where nis='$niss' and id_bulan NOT IN(SELECT id_bulann from spp where id_siswa='$niss')") or die(mysql_error());
  while ($d = mysqli_fetch_array($q)) {
  echo '<label style="margin-left:30px;">------------------------------------------------- +</label><br/>';
  echo'<label style="margin-left:83px;"> Total : Rp.  '.$d['SUM(set_nominal)'].'.000</label>';
  } ?>

    <a class="scroll-to-top rounded" href="#page-top">   </a>
          </form>

        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>

      <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  @media print {
      #kembali {
          display :  none;
      }
      #cari{
        display: none;
      }
  }
  </style>
  </body>
  <?php
  require'portal/script.php';
  }
  ?>
  </html>

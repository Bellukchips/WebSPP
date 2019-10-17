  <!DOCTYPE html>
  <html>
  <head>
  <?php
  require'portal/head.php';
  require'backup/script_timer.php';
  require "config/connect.php";

  session_start();
include'session.php';
  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {


  ?>
  </head>
  <body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">
  <?php
  require'portal/header.php';
  require'portal/body.php';
  ?>

    <!-- Left side column. contains the logo and sidebar -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">

      </section>
      <!-- Main content -->
          <section class="content">
  <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Data Siswa</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
        <?php
  $nis = $_POST['nis'];
  $query = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas where nis='$nis'");
  if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Data Siswa Tidak Ada')</script>";
  echo '<script>window.history.back()</script>';
  }else{
    while ($d = mysqli_fetch_array($query)) {
    echo '<table>';
    echo '<tr>';
    echo '<td>';
    echo '<label style="margin-left:40px">Nis</label';
    echo '</td>';
    echo '<td>';
    echo ":";
    echo '</td>';
    echo '<td>';
      echo '<label style="margin-left:30px;">'.$d['nis'].'</label><br/>';
    echo '</td>';
    echo '</tr>';
      echo '<tr>';
    echo '<td>';
    echo '<label style="margin-left:40px">Nama</label';
    echo '</td>';
    echo '<td>';
    echo ":";
    echo '</td>';
    echo '<td>';
  echo '<label style="margin-left:30px;">'.$d['nama'].'</label><br/>';
    echo '</td>';
    echo '</tr>';
      echo '<tr>';
    echo '<td>';
    echo '<label style="margin-left:40px">Kelas</label';
    echo '</td>';
    echo '<td>';
    echo ":";
    echo '</td>';
    echo '<td>';
          echo '<label style="margin-left:30px;">'.$d['kelas'].'</label><br/>';
    echo '</td>';
      echo '<td>';
    echo '<label style="margin-left:40px"></label';
    echo '</td>';
    echo '<td>';
    echo "";
    echo '</td>';
    echo '<td>';
          echo '<a href="cetak.php?nis='.$d['nis'].'" class="btn btn-primary"> <span class="glyphicon glyphicon-print"></span> Cetak</a><br/>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
  }
  }
  echo '<label style="margin-left:30px;">Bulan Yang Belum Lunas</label><br>';
  $niss = $_POST['nis'];
  $tunggak = mysqli_query($koneksi,"SELECT t_bulan.id_bulan, t_bulan.nama_bulan
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
  $q=mysqli_query($koneksi,"SELECT SUM(set_nominal) FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join t_bulan where nis='$niss' and id_bulan NOT IN(SELECT id_bulann from spp where id_siswa='$niss')") or die(mysql_error());
  while ($d = mysqli_fetch_array($q)) {
    echo '<label style="margin-left:30px;">------------------------------------------------- +</label><br/>';
  echo'<label style="margin-left:83px;"> Total : Rp.  '.$d['SUM(set_nominal)'].'.000</label>';
  }
  }
    ?>
            </div>
  <!-- Form Element sizes -->

            <!-- /.box -->
            <!-- /.box -->

            <!-- Input addon -->

              <div class="box-header with-border">
                <h3 class="box-title">Data Pembayaran</h3>
              </div>
              <div class="box-body">

                            <table class="table table-bordered" cellspacing="0" width="100%">
                <thead style="background-color:white;">
                  <tr>
                <th style="text-align:center;">Nis</th>
                    <th style="text-align:center;">Nominal (Rp.)</th>
                        <th style="text-align:center;">Bulan</th>
                          <th style="text-align:center;">Tanggal</th>
                            <th style="text-align:center;">Tahun</th>
                              <th style="text-align:center;">Status</th>
                              <th style="text-align:center;">Nama Petugas</th>
                              <th style="text-align:center;">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                            <?php
      $niss = $_POST['nis'];
    $q = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where id_siswa='$niss'");
    while ($st = mysqli_fetch_array($q)) {
          echo '<tr>';
            echo '<td>'.$st['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
    //menampilkan data nama lengkap dari database //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nominal'].'</td>';
            echo '<td>'.$st['nama_bulan'].'</td>';
            echo '<td>'.$st['tanggal'].'</td>';
            echo '<td>'.$st['tahun'].'</td>';
            echo '<td>'.$st['status'].'</td>';
            echo '<td>'.$st['nama_petugas'].'</td>';
            echo '<td><a href="hapus_pembayaran.php?id_siswa='.$st['id_siswa'].'&&id_bulann='.$st['id_bulann'].'" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>';
            echo '</tr>';

    }

      ?>
                </tbody>
  </table>
                <!-- /input-group -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Transaksi SPP</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <!-- /.box-footer -->

      <table border="1" class="table table-bordered">
        <thead>
          <th>No</th>
          <th>Bulan</th>
          <th>Nominal</th>
          <th>Kelas</th>
          <th style="width:30px;">Opsi</th>

        </thead>
        <tbody>

                      <?php
  $id = $_POST['nis'];
  $q = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join t_bulan where nis='$id'") or die(mysql_error());
    while ($c = mysqli_fetch_array($q)) {
  echo '<tr>';
  echo '<td>'.$c['id_bulan'].'</td>';
  echo '<td>'.$c['nama_bulan'].'</td>';
  echo '<td>'.$c['set_nominal'].'</td>';
  echo '<td>'.$c['kelas'].'</td>';
  echo '<td><a href="aksi_bayar_user.php?nis='.$c['nis'].'&&id_bulan='.$c['id_bulan'].'" class="btn btn-success"  data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-check"></span</a></td>';
  echo '</tr>';
  }

  ?>
        </tbody>
      </table>
  <script type="text/javascript">

  </script>

              </form>

            </div>
      </section>

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
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; <a href="#">Software </a>.</strong>Engineering
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      </ul>
      <!-- Tab panes -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <?php
  require'portal/script.php';
  ?>


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
  </body>
  <?php
  }
  ?>
  </html>

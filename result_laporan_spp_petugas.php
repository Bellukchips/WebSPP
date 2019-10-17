  <!DOCTYPE html>
  <html>
  <head>
  <?php
  require'portal/head.php';
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
  <body class="hold-transition skin-red-light sidebar-mini">
  <div class="wrapper">
  <?php
  require'portal/header_a.php';
  require'portal/body_a.php';
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
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <!-- Main content -->
          <section class="content">
  <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <form action="" method="post">
            <div class="box box-primary" style="width:800px;margin-top:-20px;">
              <div class="box-header with-border">
                <h3 class="box-title">Laporan Pembayaran Spp</h3>
              </div>
                <div class="box-body">
                                <table>
              <tr><th>
                  <label style="margin-left:10px;">Kategori</label>
              <select name="kategori1" style="width:100px;margin-left:10px;" class="form-control" required>
                <option value=""></option>
                <option value="Siswa">Siswa</option>
                <option value="Kelas">Kelas</option>
                <option value="Bulan">Bulan</option>
              </select>
              </th>
              <th>
                <label style="margin-left:10px;">Inputkan Data Berdasarkan Kategori Yang Cari</label>
                <input type="text" name="inputan1" placeholder="Cari Data" class="form-control" style="margin-left:10px;" required  onkeyup="this.value=this.value.toUpperCase()">
              </th>
            </tr>
            <tr><th>
                <input type="submit" name="tampill" value="Tampilkan" style="margin-left:10px;margin-top:10px;" class="btn btn-primary">
                <a name="cetak" href="cetak_laporan_petugas.php" data-toggle="modal" data-target="#exampleModal" style="margin-left:10px;margin-top:10px;" class="btn btn-success">Cetak</a>
            </th>
  <th>
    <label style="margin-left:10px">Keterangan :</label><br/>
      <label style="margin-left:10px">Kategori Kelas : Inputkan Nama Kelas ( CONTOH:X RPL 1)</label><br/>
      <label style="margin-left:10px">Kategori Siswa : Inputkan Nis Siswa</label><br/>
      <label style="margin-left:10px">Kategori Bulan : Inputkan Nama Bulan </label><br/>
  </th>
          </tr>
            </table>
            </div>
          </div>
            <!-- /.box -->
            </form>

            <!-- Form Element sizes -->
            <div class="box box-success" style="width:1000px;">
              <div class="box-header with-border">
                <h3 class="box-title">Data Pembayaran Yang Sudah Lunas</h3>
              </div>
              <div class="box-body">
                <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
                  <table class="table table-bordered"  id="dataTable" cellspacing="0" width="100%">
                <thead>
                  <tr>
                <th style="text-align:center;">Nis</th>
                <th style="text-align:center;">Nama</th>
                <th style="text-align:center;">Kelas</th>
                    <th style="text-align:center;">Nominal (Rp.)</th>
                        <th style="text-align:center;">Bulan</th>
                          <th style="text-align:center;">Tanggal</th>
                            <th style="text-align:center;">Tahun</th>
                              <th style="text-align:center;">Status</th>
                              <th style="text-align:center;">Nama Petugas</th>
                  </tr>
                </thead>
                <tbody>
                            <?php
                            error_reporting(0);
  $k = $_POST['kategori'];
  $c = $_POST['inputan'];
  if ($k == 'Siswa') {
    $q = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where id_siswa like'%$c%'");
    while ($st = mysqli_fetch_array($q)) {
          echo '<tr>';
            echo '<td>'.$st['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nominal'].'</td>';
            echo '<td>'.$st['nama_bulan'].'</td>';
            echo '<td>'.$st['tanggal'].'</td>';
            echo '<td>'.$st['tahun'].'</td>';
            echo '<td>'.$st['status'].'</td>';
            echo '<td>'.$st['nama_petugas'].'</td>';
            echo '</tr>';

    }

  }elseif ($k == 'Kelas') {
    $b = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where kelas like'%$c%'") or die(mysql_error());
    while ($kls = mysqli_fetch_array($b)) {
          echo '<tr>';
            echo '<td>'.$kls['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$kls['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$kls['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$kls['nominal'].'</td>';
            echo '<td>'.$kls['nama_bulan'].'</td>';
            echo '<td>'.$kls['tanggal'].'</td>';
            echo '<td>'.$kls['tahun'].'</td>';
            echo '<td>'.$kls['status'].'</td>';
                echo '<td>'.$kls['nama_petugas'].'</td>';
            echo '</tr>';
  }
  }else{
    $moon= mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where nama_bulan like'%$c%'") or die(mysql_error());
    while ($bln = mysqli_fetch_array($moon)) {
          echo '<tr>';
            echo '<td>'.$bln['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$bln['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$bln['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$bln['nominal'].'</td>';
            echo '<td>'.$bln['nama_bulan'].'</td>';
            echo '<td>'.$bln['tanggal'].'</td>';
            echo '<td>'.$bln['tahun'].'</td>';
            echo '<td>'.$bln['status'].'</td>';
                echo '<td>'.$bln['nama_petugas'].'</td>';
            echo '</tr>';
  }
  }
  if (isset($_POST['tampill'])) {
        $kk = $_POST['kategori1'];
  $cc = $_POST['inputan1'];
  if ($kk == 'Siswa') {
    $q = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where id_siswa like'%$cc%'");
    while ($st = mysqli_fetch_array($q)) {
          echo '<tr>';
            echo '<td>'.$st['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nominal'].'</td>';
            echo '<td>'.$st['nama_bulan'].'</td>';
            echo '<td>'.$st['tanggal'].'</td>';
            echo '<td>'.$st['tahun'].'</td>';
            echo '<td>'.$st['status'].'</td>';
                echo '<td>'.$st['nama_petugas'].'</td>';
            echo '</tr>';

    }
  }elseif ($kk == 'Kelas') {
    $b = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where kelas like'%$cc%'") or die(mysql_error());
    while ($kls = mysqli_fetch_array($b)) {
          echo '<tr>';
            echo '<td>'.$kls['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$kls['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$kls['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$kls['nominal'].'</td>';
            echo '<td>'.$kls['nama_bulan'].'</td>';
            echo '<td>'.$kls['tanggal'].'</td>';
            echo '<td>'.$kls['tahun'].'</td>';
            echo '<td>'.$kls['status'].'</td>';
                echo '<td>'.$kls['nama_petugas'].'</td>';
            echo '</tr>';
  }
  }else{
    $moon= mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where nama_bulan  like'%$cc%'") or die(mysql_error());
    while ($bln = mysqli_fetch_array($moon)) {
          echo '<tr>';
            echo '<td>'.$bln['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$bln['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$bln['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$bln['nominal'].'</td>';
            echo '<td>'.$bln['nama_bulan'].'</td>';
            echo '<td>'.$bln['tanggal'].'</td>';
            echo '<td>'.$bln['tahun'].'</td>';
            echo '<td>'.$bln['status'].'</td>';
                echo '<td>'.$bln['nama_petugas'].'</td>';
            echo '</tr>';
  }
  }

      }
      ?>
                </tbody>
  </table>
  </div></div></div></div></div>
  <!-- <div class="box box-danger" style="width:1000px;">
              <div class="box-header with-border">
                <h3 class="box-title">Data Tunggakan</h3>
              </div>
              <div class="box-body">
                    <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" cellspacing="0" width="100%">
                <thead>
                  <tr>
                <th style="text-align:center;">Nis</th>
                <th style="text-align:center;">Nama</th>
                <th style="text-align:center;">Kelas</th>
                    <th style="text-align:center;">Nominal (Rp.)</th>
                        <th style="text-align:center;">Bulan</th>
                              <th style="text-align:center;">Status</th>
                              <th style="text-align:center;">Tanggal Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $n = $_POST['kategori'];
                  $inputann = $_POST['inputan'];
                if ($n == 'Siswa') {
                    $aksi = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join tunggakan on tunggakan.id_student=imports.nis inner join t_bulan on t_bulan.id_bulan=tunggakan.id_bulan_t where id_student='$inputann'");
                    while ($tampil = mysqli_fetch_array($aksi)) {
                            echo '<tr>';
            echo '<td>'.$tampil['id_student'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil['set_nominal'].'</td>';
            echo '<td>'.$tampil['nama_bulan'].'</td>';
                  echo '<td>'.$tampil['status_t'].'</td>';
            echo '<td>'.$tampil['tgl_l'].'</td>';

            echo '</tr>';

                    }
                }elseif ($n == 'Kelas') {
                  $aksi1 = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join tunggakan on tunggakan.id_student=imports.nis inner join t_bulan on t_bulan.id_bulan=tunggakan.id_bulan_t where kelas_t='$inputann'");
                    while ($tampil1 = mysqli_fetch_array($aksi1)) {
                            echo '<tr>';
            echo '<td>'.$tampil1['id_student'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil1['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil1['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil1['set_nominal'].'</td>';
            echo '<td>'.$tampil1['nama_bulan'].'</td>';
                  echo '<td>'.$tampil1['status_t'].'</td>';
            echo '<td>'.$tampil1['tgl_l'].'</td>';

            echo '</tr>';

                    }

                }else{
                  $aksi2 = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join tunggakan on tunggakan.id_student=imports.nis inner join t_bulan on t_bulan.id_bulan=tunggakan.id_bulan_t where nama_bulan='$inputann'");
                    while ($tampil2 = mysqli_fetch_array($aksi2)) {
                            echo '<tr>';
            echo '<td>'.$tampil2['id_student'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil2['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil2['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil2['set_nominal'].'</td>';
            echo '<td>'.$tampil2['nama_bulan'].'</td>';
                  echo '<td>'.$tampil2['status_t'].'</td>';
            echo '<td>'.$tampil2['tgl_l'].'</td>';

            echo '</tr>';

                }}
  if (isset($_POST['tampill'])) {
      $nn = $_POST['kategori1'];
                  $inputannn = $_POST['inputan1'];
      if ($nn == 'Siswa') {
                    $aksii = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join tunggakan on tunggakan.id_student=imports.nis inner join t_bulan on t_bulan.id_bulan=tunggakan.id_bulan_t where id_student='$inputannn'");
                    while ($show = mysqli_fetch_array($aksii)) {
                            echo '<tr>';
            echo '<td>'.$show['id_student'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$show['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$show['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$show['set_nominal'].'</td>';
            echo '<td>'.$show['nama_bulan'].'</td>';
                  echo '<td>'.$show['status_t'].'</td>';
            echo '<td>'.$show['tgl_l'].'</td>';

            echo '</tr>';

                    }
                }elseif ($nn == 'Kelas') {
                  $aksi1i = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join tunggakan on tunggakan.id_student=imports.nis inner join t_bulan on t_bulan.id_bulan=tunggakan.id_bulan_t where kelas_t='$inputannn'");
                    while ($tampilin = mysqli_fetch_array($aksi1i)) {
                            echo '<tr>';
            echo '<td>'.$tampilin['id_student'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampilin['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampilin['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampilin['set_nominal'].'</td>';
            echo '<td>'.$tampilin['nama_bulan'].'</td>';
                  echo '<td>'.$tampilin['status_t'].'</td>';
            echo '<td>'.$tampilin['tgl_l'].'</td>';

            echo '</tr>';

                    }

                }else{
                  $aksi2i = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join tunggakan on tunggakan.id_student=imports.nis inner join t_bulan on t_bulan.id_bulan=tunggakan.id_bulan_t where nama_bulan='$inputannn'");
                    while ($tampil2in = mysqli_fetch_array($aksi2i)) {
                            echo '<tr>';
            echo '<td>'.$tampil2in['id_student'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil2in['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil2in['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$tampil2in['set_nominal'].'</td>';
            echo '<td>'.$tampil2in['nama_bulan'].'</td>';
                  echo '<td>'.$tampil2in['status_t'].'</td>';
            echo '<td>'.$tampil2in['tgl_l'].'</td>';

            echo '</tr>';

                }}

  }
                  ?>
                </tbody></table>
        </div></div></div></div> -->

  <a class="scroll-to-top rounded" href="#page-top">
          </a>




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

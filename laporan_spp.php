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
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <!-- Main content -->
          <section class="content">
      <div class="col-md-6">
            <!-- Horizontal Form -->
            <form action="result_laporan_spp.php" method="post">
            <div class="box box-info" style="width:800px;">
              <div class="box-header with-border">
                <h3 class="box-title">Laporan Pembayaran SPP</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-10">
                                    <table>
              <tr><th>
                  <label style="margin-left:10px;">Kategori</label>
              <select name="kategori" style="width:100px;margin-left:10px;" class="form-control" required>
                <option value=""></option>
                <option value="Siswa">Siswa</option>
                <option value="Kelas">Kelas</option>
                <option value="Bulan">Bulan</option>
              </select>
              </th>
              <th>
                <label style="margin-left:10px;">Inputkan Data Berdasarkan Kategori Yang Cari</label>
                <input type="text" name="inputan" placeholder="Cari Data" class="form-control" style="margin-left:10px;" required  onkeyup="this.value=this.value.toUpperCase()">
              </th>
            </tr>
            <tr><th>
                <input type="submit" name="tampil" value="Tampilkan" style="margin-left:10px;margin-top:10px;" class="btn btn-primary">
                <a href="cetak_laporan.php" name="cetak" value="Cetak" data-toggle="modal" data-target="#exampleModal" style="margin-left:10px;margin-top:10px;" class="btn btn-success">Cetak</a>
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
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                    </div>
                  </div>

    </div>
    </form>
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

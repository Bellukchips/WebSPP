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
  ?>
    <!-- Left side column. contains the logo and sidebar -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
  require'portal/body_a.php';
      ?>
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
      <!--bagian isi-->
          <div class="card-header" style="margin-top:50px;">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <thead>
                  <tr>
                    <th style="text-align: center;">No</th>
                <th style="text-align:center;">Nis</th>
                  <th style="text-align:center;">Nama </th>
                    <th style="text-align:center;">Kelas</th>

                    <th style="text-align:center;">Nominal</th>
                        <th style="text-align:center;">Bulan</th>
                          <th style="text-align:center;">Tanggal</th>
                            <th style="text-align:center;">Tahun</th>
                              <th style="text-align:center;">Status</th>


                  </tr>
                </thead>
                <tbody>
          <?php
          include'config/connect.php';
          $ambil=mysqli_query($koneksi,"SELECT * from imports inner join spp on imports.nis=spp.id_siswa inner join t_kelas on t_kelas.id_kelas=imports.id_kelass inner join t_bulan on t_bulan.id_bulan=spp.id_bulann") or die(mysql_error());
            if (mysqli_num_rows($ambil) == 0) {
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            }else{
              $no = 1;
              while($data=mysqli_fetch_array($ambil)){
                        echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$data['nis'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$data['nama'].'</td>';
            echo '<td>'.$data['kelas'].'</td>';
            echo '<td>'.$data['nominal'].'</td>';
            echo '<td>'.$data['nama_bulan'].'</td>';
            echo '<td>'.$data['tanggal'].'</td>';
            echo '<td>'.$data['tahun'].'</td>';
            echo '<td>'.$data['status'].'</td>';
            $no++;
            }
            }

          ?>



        </tbody>
              </table>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>    </a>
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
  }
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
  </html>

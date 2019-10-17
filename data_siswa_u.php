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
    
        </ol>
      </section>         
      <!-- Main content -->
      <section class="content">     
      <!--bagian isi-->
            <form action="" method="post">
            <div class="box box-info" style="width:500px;">
              <div class="box-header with-border">
                <h3 class="box-title">Cari Siswa</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control" placeholder="Cari Siswa" required>
        <input type="submit" name="cari" class="btn btn-primary" value="Cari" style="margin-left:10px;margin-top:10px;">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    
                    </div>
                  </div>
                
    </div>
    </form>
    </div></form>
    <a class="scroll-to-top rounded" href="">
          </a>
          </form>

        <div class="row">
          <!-- Left col -->
          <div class="box box-danger" style="width:1000px;margin-left:10px">
              <div class="box-header with-border">
                <h3 class="box-title">Data Siswa</h3>
              </div>
              <div class="box-body">
          <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%"  cellspacing="0" >
                <thead>
                  <tr>
              <th style="text-align:center;">No</th>
                <th style="text-align:center;">Nis</th>
                  <th style="text-align:center;">Nama </th>
                    <th style="text-align:center;">Kelas</th>
                  <th style="text-align:center;width:150px;">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                if (isset($_POST['cari'])) {
                    $kelas = $_POST['nama'];
                    $que = mysqli_query($koneksi"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas where nama like'%$kelas%' ");
                    if (mysqli_num_rows($que)== 0) {
                              echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                    }else{
                    $no = 1;
                    while ($data = mysqli_fetch_array($que))
                  {
                          echo '<tr>';
            echo '<td align="center">'.$no.'</td>';               
            echo '<td align="center">'.$data['nis'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td align="center">'.$data['nama'].'</td>';
            echo '<td align="center">'.$data['kelas'].'</td>';
            echo '<td align="center">'.$data['tahun_ajaran'].'</td>';
          echo '</tr>';
    $no++;
                    }
                  }}

                  ?>
                </tbody></table>
        </div></div></div></div>
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

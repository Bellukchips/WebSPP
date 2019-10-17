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
            <form action="" method="post">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Backup Data</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-10">
                    <label for="">Backup Semua Data Transaksi</label>
                      <a href="backup/backup.php" class="btn btn-success">Back Up Data </a> ke (.xlsx)<br><br>
                      JIka ingin Mereset Data silahkan Klik Tombol Backup Data Di Atas Terlebih Dahulu, Kemudian Klik Reset Data
                      <a onclick="konfirmasi()" style="cursor: pointer;">RESET DATA</a><br>
                              <script type="text/javascript">
              function konfirmasi(lokasi){
                if ( confirm("Anda yakin ingin menghapus Semua data?? DATA PEMBAYARAN SPP AKAN TERHAPUS SEMUA(Apakah Data Sudah Di Backup?)"))
                {
                  location.href = 'hapus_imports.php';
                  return (true);
                } else {
                  return (false);
                }
              }

            </script> 
              <a href="backup/backup_sql.php" class="btn btn-danger">Backp To SQL</a>

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

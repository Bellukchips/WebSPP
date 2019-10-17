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
      <!--bagian isi-->
      <div class="row">
          <div class="col-md-6">
  <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">SIMPAN NOMINAL SPP</h3>
              </div>
              <!-- /.box-header -->
    
              <form action="" method="post">
  <?php  
  // Koneksi
  $resultt = mysqli_query($koneksi,"select * from t_kelas where set_nominal=''");
  $jsArrayy = "var prdNamee = new Array();\n";
  echo '<select class="form-control" style="width:150px;margin-left:30px;" name="prdIdd" onchange="document.getElementById(\'prd_namee \').value = prdNamee[this.value]" required>';
  echo '<option value=""></option>';
  while ($row = mysqli_fetch_array($resultt)) {
      echo '<option value="' . $row['kelas'] . '">' . $row['kelas'] . '</option>';
      $jsArray .= "prdNamee['" . $row['kelas'] . "'] = '" . addslashes($row['set_nominal']) . "';\n";
  }
  echo '</select>';
  ?>
  <br />
  <input type="text" class="form-control" style="width:150px;margin-left:30px;margin-top:-10px;" name="prod_namee" id="prd_namee" required />
  <script type="text/javascript">
  <?php echo $jsArrayy; ?>
  </script>
  <input type="submit" name="simpan" class="btn btn-success" style="margin-left:30px;margin-top:10px;" value="Simpan">
    
    
              </form>
      
    <?php
  require "config/connect.php";
  if (isset($_POST['simpan'])) {
    $q = $_POST['prod_namee'];
  $e = $_POST['prdIdd'];
  $a = mysqli_query($koneksi,"UPDATE t_kelas set set_nominal='$q' where kelas='$e'");
  if ($a) {
  echo "<script>alert('Data Berhasil Di Simpan')</script>";
  echo "<meta http-equiv='refresh' content='1 url=form_setting_pembayaran.php'>";
  }else{
    echo "<script>alert('Data GAGAL Di Simpan')</script>";
  echo "<meta http-equiv='refresh' content='1 url=form_setting_pembayaran.php'>";
  }

  }
  ?>
              <div class="box-body">
              </div></div></div></div>
              <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">EDIT NOMINAL SPP</h3>
              </div>
              <!-- /.box-header -->
      <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%">
                <thead>
                  <th>No</th>
                  <th>Kelas</th>
                  <th>Nominal SPP</th>
                  <th style="width:20px;">Aksi</th>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $show = mysqli_query($koneksi,"SELECT * FROM t_kelas")or die(mysqli_error());
                  while ($c = mysqli_fetch_array($show)) {
                  echo '<tr>';
                  echo '<td>'.$no.'</td>';
                  echo '<td>'.$c['kelas'].'</td>';
                  echo '<td>'.$c['set_nominal'].'</td>';
                  echo '<td><a href="getkelas.php?id_kelas='.$c['id_kelas'].'" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>';
                  echo '</tr>';
                  $no++;
                  }

                  ?>
                </tbody>
              </table>
    
              <div class="box-body">
              </div></div></div></div>
    
    <a class="scroll-to-top rounded" href="#page-top">
    </a>
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

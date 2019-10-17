  <!DOCTYPE html>
  <html>
  <head>
  <?php
  require'portal/head.php';
  require'backup/script_timer.php';
  require "config/connect.php";

  session_start();
  if (isset($_SESSION['lastAct'])) {
    if ($_SESSION['lastAct'] + 120*120 < time()) {
        echo "<script>alert('Waktu sesi anda habis silahkan login kembali')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  }
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
        <form action="proses_swipe.php" method="post">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Kenaikan Kelas</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-10">
    
              <form action="proses_swipe.php" method="post">
  <?php  
  // Koneksi
  $resultt = mysqli_query($koneksi,"SELECT DISTINCT tahun_ajaran
  FROM  `imports`");
  $jsArrayy = "var prdNamee = new Array();\n";
  echo '<label style="margin-left:30px;">Tahun Ajaran</label>';
  echo '<select class="form-control" style="width:150px;margin-left:30px;" name="tahun" onchange="document.getElementById(\'prd_namee \').value = prdNamee[this.value]" required>';
  echo '<option value=""></option>';
  while ($row = mysqli_fetch_array($resultt)) {
      echo '<option value="' . $row['tahun_ajaran'] . '">' . $row['tahun_ajaran'] . '</option>';
  }
  echo '</select>';
  $result = mysqli_query($koneksi,"SELECT DISTINCT id_kelas
  FROM  `t_kelas`");
  $jsArrayy = "var prdNamee = new Array();\n";
  echo '<label style="margin-left:30px;margin-top:20px;">Pilih Kelas</label>';
  echo '<select class="form-control" style="width:150px;margin-left:30px;" name="pilih" onchange="document.getElementById(\'prd_namee \').value = prdNamee[this.value]" required>';
  echo '<option value=""></option>';
  while ($roww = mysqli_fetch_array($result)) {
      echo '<option value="' . $roww['id_kelas'] . '">' . $roww['id_kelas'] . '</option>';
  }
  echo '</select>';
  $result = mysqli_query($koneksi,"SELECT DISTINCT id_kelas
  FROM  `t_kelas`");
  $jsArrayy = "var prdNamee = new Array();\n";
  echo '<label style="margin-left:30px;margin-top:20px;">Pilih Kenakan Kelas</label>';
  echo '<select class="form-control" style="width:150px;margin-left:30px;" name="naikan" onchange="document.getElementById(\'prd_namee \').value = prdNamee[this.value]" required>';
  echo '<option value=""></option>';
  while ($rowww = mysqli_fetch_array($result)) {
      echo '<option value="' . $rowww['id_kelas'] . '">' . $rowww['id_kelas'] . '</option>';
  }
  echo '</select>';
  ?>

  <input type="submit" name="swipe" class="btn btn-success" style="margin-left:30px;margin-top:10px;" value="Swipe">
    
    
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

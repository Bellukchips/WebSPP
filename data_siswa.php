  <!DOCTYPE html>
  <html>
  <head>
  <?php
  require'portal/head.php';
  require'backup/script_timer.php';
  require "config/connect.php";

  session_start();
 
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
    
        </ol>
      </section>         
      <!-- Main content -->
      <section class="content">     
      <!--bagian isi-->
            <form action="" method="post">
            <div class="box box-info" style="width:500px;">
              <div class="box-header with-border">
                <h3 class="box-title">Cari Kelas</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-10">
        <select name="kelas" class="form-control" style="margin-left:40px;width:100px;">
              <option value=""></option>
          <option value="X RPL 1 ">X RPL 1</option>
          <option value="X RPL 2">X RPL 2 </option>
            <option value="X MM 1 ">X MM 1</option>
            <option value="X MM 2">X MM 2</option>
            <option value="X TKJ 1">X TKJ 1</option>
            <option value="X TKJ 2">X TKJ 3</option>
            <option value="X TKJ 3">X TKJ 3</option>
            <option value="X TKJ 4">X TKJ 4</option>
              <option value="X AP 1">X AP 1</option>
              <option value="X AP 2">X AP 2</option>
              <option value="X AP 3">X AP 3</option>
              <option value="X AP 4">X AP 4</option>
                <option value="X PM 1">X PM 1</option>
                <option value="X PM 2">X PM 2</option>
                <option value="X PM 3">X PM 3</option>
                <option value="X PM 4">X PM 4</option>
                  <option value="X AK 1">X AK 1</option>
                  <option value="X AK 2">X AK 2</option>
                  <option value="X AK 3">X AK 3</option>
                  <option value="X AK 4">X AK 4</option>
            <option value="XI RPL 1 ">XI RPL 1</option>
          <option value="XI RPL 2">XI RPL 2 </option>
            <option value="XI MM 1 ">XI MM 1</option>
            <option value="XI MM 2">XI MM 2</option>
            <option value="XI TKJ 1">XI TKJ 1</option>
            <option value="XI TKJ 2">XI TKJ 3</option>
            <option value="XI TKJ 3">XI TKJ 3</option>
            <option value="XI TKJ 4">XI TKJ 4</option>
              <option value="XI AP 1">XI AP 1</option>
              <option value="XI AP 2">XI AP 2</option>
              <option value="XI AP 3">XI AP 3</option>
              <option value="XI AP 4">XI AP 4</option>
                <option value="XI PM 1">XI PM 1</option>
                <option value="XI PM 2">XI PM 2</option>
                <option value="XI PM 3">XI PM 3</option>
                <option value="XI PM 4">XI PM 4</option>
                  <option value="XI AK 1">XI AK 1</option>
                  <option value="XI AK 2">XI AK 2</option>
                  <option value="XI AK 3">XI AK 3</option>
                  <option value="XI AK 4">XI AK 4</option>
                        <option value="XII RPL 1 ">XII RPL 1</option>
          <option value="XII RPL 2">XII RPL 2 </option>
            <option value="XII MM 1 ">XII MM 1</option>
            <option value="XII MM 2">XII MM 2</option>
            <option value="XII TKJ 1">XII TKJ 1</option>
            <option value="XII TKJ 2">XII TKJ 3</option>
            <option value="XII TKJ 3">XII TKJ 3</option>
            <option value="XII TKJ 4">XII TKJ 4</option>
              <option value="XII AP 1">XII AP 1</option>
              <option value="XII AP 2">XII AP 2</option>
              <option value="XII AP 3">XII AP 3</option>
              <option value="XII AP 4">XII AP 4</option>
                <option value="XII PM 1">XII PM 1</option>
                <option value="XII PM 2">XII PM 2</option>
                <option value="XII PM 3">XII PM 3</option>
                <option value="XII PM 4">XII PM 4</option>
                  <option value="XII AK 1">XII AK 1</option>
                  <option value="XII AK 2">XII AK 2</option>
                  <option value="XII AK 3">XII AK 3</option>
                  <option value="XII AK 4">XII AK 4</option>
            
                  
        </select>
        <input type="submit" name="cari" class="btn btn-primary" value="Cari" style="margin-left:40px;margin-top:10px;">
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
                    <th style="text-align:center;">Tahun Ajaran</th>
                  <th style="text-align:center;width:150px;">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if (isset($_POST['cari'])) {
                    $kelas = $_POST['kelas'];
                    $que = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas where kelas='$kelas'");
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
              echo '<td><a href="hapus.php?nis='.$data['nis'].'" class="btn btn-danger style="margin-left:30px">Hapus<span class="glyphicon glyphicon-trash"></span></a> <a href="edit_siswa.php?nis='.$data['nis'].'" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</a>
              </td>';
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

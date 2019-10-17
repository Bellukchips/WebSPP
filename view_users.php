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
    <title>VIEW USERS</title>
  </head>
  <body class="hold-transition skin-green-light sidebar-mini">
  <?php
  require'portal/header.php';
  require'portal/body.php';
  ?>
  </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
          
      <!-- Main content -->
    <section class="content">     
      <!--bagian isi-->
          <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Users</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                      <thead>
                  <tr>
                <th style="text-align:center;">Nama</th>
                  <th style="text-align:center;">Username</th>
                    <th style="text-align:center;">Password</th>
                  <th style="text-align:center;">Opsi</th>
                  </tr>
                </thead>
                <tbody>
            <?php 
            include'config/connect.php';
                  $tampil=mysqli_query($koneksi,"SELECT * FROM users where level='petugas'");
                  while ($data = mysqli_fetch_array($tampil))
                  {
                          echo '<tr>';
            echo '<td align="center">'.$data['name'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td align="center">'.$data['username'].'</td>';
            echo '<td>********</td>';
              echo '<td><a class="btn btn-warning" href="edit_p.php?id='.$data['id'].'" data-toggle="modal" data-target="#exampleModal">EDIT</a><a href="hapus_p.php?id='.$data['id'].'" style="margin-left:10px;" class="btn btn-primary">Delete</a>
              </td>';
          echo '</tr>';

            } 
                ?>

          
        </tbody>
                </table>
              </div>
            

    <a class="scroll-to-top rounded" href="#page-top">
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
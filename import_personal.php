  <!DOCTYPE html>
  <html>
  <head>
  <?php
  require'portal/head.php';
  require "config/connect.php";
  session_start();


  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {

  
  ?>
    <title>Input Siswa</title>
    <style type="text/css">
  .body{
    position:absolute;
    top:40%;
    left:65%;
    transform:translate(-50%,-50%);
    width: 950px;
    margin: auto;
    background-color:rgba(255,255,255,0.8);
    border-radius: 50px;
    background:transparent;
    width:60%;
    height:70%;
    box-shadow:3px 1px 3px 3px orange;
    transition:500ms ease-in-out;



  }
  .body:hover{

    box-shadow:0px 2px 1px 2px blue;
  }
    </style>
  </head>
  <body>
    <div class="body">
            <legend style="margin-top:80px;text-align:center;font-family:verdana;">FORM INPUT PERSONAL SISWA</legend>
        <form action="prosesimport.php" method="post">
            <label style="font-family:bold;margin-left:150px;">Nis</label>
          <input type="text" name="nis" class="form-control" autocomplete="off" style="margin-left:150px;width:100px;" required>
              <label style="font-family:bold;margin-left:150px;">Nama</label>
          <input type="text" name="nama" class="form-control" onkeyup="this.value=this.value.toUpperCase()" autocomplete="off" style="margin-left:150px;width:500px;" required>
          <label style="font-family:bold;margin-left:150px;margin-top:10px;">ID KELAS</label>
          <input type="text" name="kelas" class="form-control" onkeyup="this.value=this.value.toUpperCase()" autocomplete="off" style="margin-left:150px;width:200px;margin-top:10px" required>
          <label style="font-family:bold;margin-left:150px;margin-top:10px;">Tahun Ajaran</label>
          <input type="text" name="tahun" class="form-control" onkeyup="this.value=this.value.toUpperCase()" autocomplete="off" style="margin-left:150px;width:200px;margin-top:10px" required>
            <button class="btn btn-info" style="font-family:Times new roman;margin-left:150px;margin-top:30px;" name="simpan">S a v e</button><a class="btn btn-danger" style="font-family:Times new roman;margin-top:30px;margin-left:1px;" href="menu_utama.php">Kembali</a>
        </form>
    </div>


  <h4 style="margin-left:5px;">Keterangan Kode Kelas</h4><br/>
  <div class="card-header">
          <div class="card-body">
            <div class="table-responsive"> 
  <table class="table table-bordered" style="max-width:20%;" id="dataTable">
    <thead>
  <th style="text-align: center;width:40px">KODE KELAS</th>
  <th style="text-align: center;width:40px"> KELAS</th>
    
    </thead>
    <tbody>
      <?php 
  include'config/connect.php';
  $q = mysqli_query($koneksi,"SELECT * FROM t_kelas");
  while ($data = mysqli_fetch_array($q)) {
    echo'<tr>';  
    echo '<td style="text-align:center;">'.$data['id_kelas'].'</td>';
    echo '<td style="text-align:center;">'.$data['kelas'].'</td>';
    echo'</tr>';

  }
  ?>
    </tbody>
  </table>
  </div></div></div>
  </body>
  <?php
  }
  ?>
  </html>


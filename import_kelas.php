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
    left:50%;
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
            <legend style="margin-top:80px;text-align:center;font-family:verdana;"></legend>
        <form action="" method="post">
            <label style="font-family:bold;margin-left:150px;">Kode Kelas</label>
          <input type="text" name="kode" class="form-control" autocomplete="off" style="margin-left:150px;width:100px;" onkeyup="this.value=this.value.toUpperCase()" required>
              <label style="font-family:bold;margin-left:150px;">Kelas</label>
          <select name="kelas" class="form-control" style="margin-left:150px;width:150px;" id="kelas">
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
            <button class="btn btn-info" style="font-family:Times new roman;margin-left:150px;margin-top:30px;" name="simpan">S a v e</button><a class="btn btn-danger" style="font-family:Times new roman;margin-top:30px;margin-left:1px;" href="menu_utama.php">Kembali</a>
        </form>

    </div>
  <?php 
  if (isset($_POST['simpan'])) {
    $k = $_POST['kelas'];
    $kd = $_POST['kode'];
    $query = mysqli_query($koneksi,"SELECT * FROM t_kelas where id_kelas='$kd' or kelas='$k'");
    if (mysqli_num_rows($query)) {
      echo "<script>alert('ID Kelas yang Anda Masukan Sudah Ada / Kelas Sudah Di inputkan')</script>";
      echo '<script>window.history.back()</script>';
    }else{
    $q =mysqli_query($koneksi,"INSERT INTO t_kelas VALUES('$kd','$k','')");
    if ($q) {
      echo "<script>alert('Data Berhasil Disimpan')</script>";
      echo '<script>window.history.back()</script>';
    }else{
      echo "<script>alert('Gagal Disimpan Disimpan , Anda akan dialihkan Ke Halaman Utama ')</script>";
    echo "<meta http-equiv='refresh' content='1 url=menu_utama.php'>";
    }
    }
  }

  ?>

  <h4 style="margin-left:5px;">Keterangan Kode Kelas:</h4><br/>
  Pada Saat Insert Dimohon Gunakan<br/>
  Kode Yang Benar Dan Mudah Diingat
  <table border="2" style="margin-left:20px;" style="margin-top:10px;">
    <thead>
      <td style="text-align:center;">KODE KELAS</td>
      <td style="text-align:center;">KELAS</td>
    
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
  </body>
  <?php
  }
  ?>
  </html>


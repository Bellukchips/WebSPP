  <?php

  include'config/connect.php';
  session_start();
include'session.php';
  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $nis = $_GET['nis'];
  $bulan = $_GET['id_bulan'];
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join t_bulan  where nis='$nis' and id_bulan='$bulan'") or die(mysql_error());

    //cek apakah data dari hasil query ada atau tidak
    if(mysqli_num_rows($show) == 0){

      //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
      echo '<script>window.history.back()</script>';

    }else{

      //jika data ditemukan, maka membuat variabel $data
      $data = mysqli_fetch_array($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah

    }
    ?>
      <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">Pembayaran</h3>
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

    <form action="simpan_user.php" method="post">
      <table border="0" style="margin-left:60px;">
        <tr>
      <th><div class="col-md-6">
        <label style="margin-top:40px;margin-left:-60px;">Nis</label>
      <input type="text" name="nis" style="margin-left:-60px;" autocomplete="off" class="form-control" readonly value="<?php echo $data['nis'];?>" required>
      </div>
    </th>
        <th><div class="col-md-6">
          <label style="margin-left:40px;margin-top:10px;">Bulan Ke(1,2,3,4,5,6,7,8,9,10,11,12)</label>
  <input type="text" name="bulan" class="form-control" autocomplete="off" style="margin-left:40px;width:80px;" value="<?php echo$data['id_bulan'];?>" readonly>

      </div></th>    
  </tr>
    <tr>
      <th><div class="col-md-6">
        <label style="margin-left:-60px;margin-top:10px;">Nama</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" style="width:300px;margin-left:-60px;" readonly value="<?php echo $data['nama'];?>" required>
      </div></th>       
      <th>
      <div class="col-md-6">
        <label style="margin-top:10px;margin-left:40px;">Tahun</label>
        <input type="text" style="width:70px;margin-left:40px;" autocomplete="off" name="tahun" readonly value="<?php
  echo "" . date("Y");
  ?>" class="form-control">
        </th>
    </tr>
    <tr>
              <th>
    <div class="col-md-6">
          <label style="margin-left:-60px;margin-top:10px;">Kelas</label>
          <input type="text" name="kelas" class="form-control" readonly style="margin-left:-60px;width:150px;" value="<?php echo $data['kelas']; ?>">
        </div>
      </th>
      <th><button style="margin-left:58px;margin-top:30px;" class="btn btn-primary" name="simpan" >Bayar</button></th>

  <!--        -->

    </tr>
    <tr>
  <th><div class="col-md-6">
        <label style="margin-top:10px;margin-left:-60px;">Nominal</label>
        <input type="text" name="nominal" value="<?php echo $data['set_nominal']; ?>" readonly class="form-control" style="margin-left:-60px;">
      </div></th>
  
    </tr>
    <tr>
        <th><div class="col-md-6">
        <label style="margin-top:10px;margin-left:-60px;">Keterangan</label>
        <input type="text" name="status" value="Lunas" readonly class="form-control" style="margin-left:-60px;">
      </div></th>
    <!--   -->
    </tr>
    <tr>
      <input type="hidden" name="nama_petugas" value="<?php echo $_SESSION['nama']; ?>">
    </tr>
        </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        </div>
      </div>

      <?php
  }
      ?>

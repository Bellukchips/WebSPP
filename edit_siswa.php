  <?php
  
  include'config/connect.php';
  session_start();
include'session.php';
  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login ')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $nis = $_GET['nis'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysqli_query($koneksi"SELECT * FROM imports inner join t_kelas on t_kelas.id_kelas=imports.id_kelass WHERE nis='$nis'");
    
    //cek apakah data dari hasil query ada atau tidak
    if(mysqli_num_rows($show) == 0){
      
      //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
      echo '<script>window.history.back()</script>';
      
    }else{
    
      //jika data ditemukan, maka membuat variabel $data
      $data = mysqli_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    
    }
    ?>
      <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">UPDATE SISWA</h3>
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

    <form action="" method="post">
      <table border="0" style="margin-left:60px;">
        <tr>
      <th><div class="col-md-6">  
        <label style="margin-top:40px;margin-left:-60px;">Nis</label>
      <input type="text" name="nis" style="margin-left:-60px;" autocomplete="off" class="form-control" readonly value="<?php echo $data['nis'];?>" required>
      </div>
    </th>
  </tr>
    <tr>
      <th><div class="col-md-6">  
        <label style="margin-left:-60px;margin-top:10px;">Nama</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" style="width:300px;margin-left:-60px;" value="<?php echo $data['nama'];?>" required>
      </div></th>
    </tr>
    <tr>
      <th><div class="col-md-6">
        <label style="margin-left:-60px;margin-top:10px;">Kelas</label>
    <input type="text" name="kelas" class="form-control" autocomplete="off" style="width:90px;margin-left:-60px;" value="<?php echo $data['id_kelas'];?>" required>
      </div></th>
    </tr>
    <tr>
      <th><div class="col-md-6">
        <label style="margin-left:-60px;margin-top:10px;">Tahun Ajaran</label>
    <input type="text" name="tahun" class="form-control" autocomplete="off" style="width:100px;margin-left:-60px;" value="<?php echo $data['tahun_ajaran'];?>" required>
      </div></th>
    </tr>
    <tr>
      <th><button style="margin-left:-40px;margin-top:35px;" class="btn btn-warning" name="update" >UPDATE</button></th>
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
      


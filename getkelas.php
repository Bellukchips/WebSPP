  <?php
  
  include'config/connect.php';
  session_start();

  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login ')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_kelas'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysqli_query($koneksi,"SELECT * FROM t_kelas where id_kelas='$id'");
    
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
          <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">EDIT</h3>
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

    <form action="edit_nominal.php" method="post">
      <table border="0" style="margin-left:60px;">
        <tr>
      <th><div class="col-md-6">  
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas']; ?>" readonly>
  </div> </th>    
  <th>
    <div class="col-md-6">
      <label>Nominal SPP</label>
        <input type="text" name="nominal" class="form-control"  value="<?php echo $data['set_nominal']; ?>">
    </div>
  </th>
  <tr>
    <th>
    <div class="col-md-6">
      <input type="submit" name="edit" class="btn btn-primary" value="EDIT" style="margin-top:10px;">
    </div>
    </th>
  </tr> </table>
          </form>
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        </div>
      </div>
      <?php
  }
      ?>


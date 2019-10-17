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
    $p = $_GET['id'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysqli_query($koneksi,"SELECT * FROM users WHERE id='$p'");
    
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
          <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">UPDATE USERS</h3>
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

    <form action="update_p.php" method="post">
      <table border="0" style="margin-left:60px;">
        <tr>
      <th><div class="col-md-6">  
        <label style="margin-top:10px;margin-left:-60px;">Nama</label>
      <input type="text" name="nama" style="margin-left:-60px;width:200px;" autocomplete="off" class="form-control" value="<?php echo $data['name'];?>" required>
      </div>
    </th>
    <th>
      <input type="hidden" name="id" value="<?php echo$data['id']?>">
    </th>
  </tr>
    <tr>
      <th><div class="col-md-6">  
        <label style="margin-left:-60px;margin-top:10px;">Username</label>
        <input type="text" name="user" class="form-control" autocomplete="off" style="width:200px;margin-left:-60px;" value="<?php echo $data['username'];?>" required>
      </div></th>
    </tr>
    <tr>
      <th><div class="col-md-6">
        <label style="margin-left:-60px;margin-top:10px;">Password</label>
    <input type="password" name="pass" class="form-control" autocomplete="off" style="width:200px;margin-left:-60px;" value="<?php echo $data['password'];?>" required>
      </div></th>
      <th>
        <div class="col-md-6">
          <input type="submit" name="update" class="btn btn-danger" value="Update" style="margin-top:38px;">
        </div>
      </th>
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


  <?php
  
  include'config/connect.php';
  session_start();

  if (empty($_SESSION['user'])) {
      echo "<script>alert('Anda belum login')</script>";
    echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
    }
  else
    {
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
  //  $nis = $_GET['nis'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    //$show = mysql_query("SELECT * FROM imports WHERE nis='$nis'");
    
    //cek apakah data dari hasil query ada atau tidak
    //if(mysql_num_rows($show) == 0){
      
      //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
      //echo '<script>window.history.back()</script>';
      
    //}else{
    
      //jika data ditemukan, maka membuat variabel $data
  //   $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    
  // }
    ?>
      <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">INSERT NEW USER</h3>
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <form action="insert_p.php" method="post">
      <div class="col-md-6">
        <table>
      <!-- <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <input type="text" name="nama" class="form-control" autocomplete="off"  onkeyup="this.value=this.value.toUpperCase()" style="margin-left:20px;"></td>
      </tr>
      <tr>
        <td style="margin-top:10px;">Username</td>
        <td>:</td>
        <td><input type="text" name="username" class="form-control" autocomplete="off" style="margin-top:10px;margin-left:20px;"></td>
      </tr>
      <tr>
        <td style="margin-top:10px">Password</td>
        <td>:</td>
        <td><input type="Password" name="password" class="form-control" autocomplete="off" style="margin-top:10px;margin-left:20px;"></td>
      </tr>
    -->
    <tr>
      <th>
        <div class="col-md-6">
          <label>Nama :</label>
          <input type="text" name="nama" class="form-control" autocomplete="off" onkeyup="this.value=this.value.toUpperCase()" style="width:300px;">
        </div>
      </th>
    </tr>
    <tr>
      <th>
      <div class="col-md-6">
        <label>Username :</label>
        <input type="text" name="user" class="form-control" autocomplete="off" style="width:200px;" required>
      </div>
      </th>
      <th>
        <input type="hidden" name="level" class="form-control" autocomplete="off" value="petugas" required>
      </th>
    </tr>
    <tr>
      <th>
        <div class="col-md-6">
          <label>Password :</label>
          <input type="password" name="pass" class="form-control" autocomplete="off" style="width:200px;" required>
        </div>
      </th>
      <th>
        <div class="col-md-6">
          <input type="submit" name="simpan" class="btn btn-primary" style="margin-top:30px;margin-left:-100px;" value="Simpan">
        </div>
      </th>
    </tr>
      </table>
      </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:119px;" onclick="javascript:window.location.reload()">Close</button>
        </div>
      </div>
      <?php
  }
      ?>
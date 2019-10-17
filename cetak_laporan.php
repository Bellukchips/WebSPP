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
          <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">Cetak DATA</h3>
          <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <form action="cetak_proses.php" method="post">
                      <table>
              <tr><th>
                  <label style="margin-left:10px;">Kategori</label>
              <select name="kategori" style="width:100px;margin-left:10px;" class="form-control" required>
                <option value=""></option>
                <option value="Siswa">Siswa</option>
                <option value="Kelas">Kelas</option>
                <option value="Bulan">Bulan</option>
              </select>
              </th>
              <th>
                <label style="margin-left:10px;">Inputkan Data Berdasarkan Kategori Yang Cari</label>
                <input type="text" name="inputan" placeholder="Cari Data" class="form-control" style="margin-left:10px;" required  onkeyup="this.value=this.value.toUpperCase()">
              </th>
            </tr>
            <tr><th>
                <input type="submit" name="Cetak" value="Cetak" style="margin-left:10px;margin-top:10px;" class="btn btn-primary">
            </th>
  <th>
    <label style="margin-left:10px">Keterangan :</label><br/>
      <label style="margin-left:10px">Kategori Siswa : Inputkan Nis</label><br/>
      <label style="margin-left:10px">Kategori Kelas : Inputkan Nama Kelas (ex:(X RPL 1))</label><br/>
      <label style="margin-left:10px">Kategori Bulan : Inputkan Nama Bulan </label><br/>
  </th>
          </tr>
            </table>
          </form>
        </div>
        <div class="modal-footer">
          <input type="submit" name="Close" value="Close" style="margin-left:10px;margin-top:10px;" class="btn btn-danger" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
        </div>
      </div>
      <?php
  }
      ?>

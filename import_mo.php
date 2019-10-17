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
            <h3 class="modal-title" id="exampleModalLabel" style="text-align:center;">IMPORT DATA</h3>
            <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
      <form action="import.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
    Pilih File Excel*: <input name="file" type="file"> <input name="upload" type="submit" class="btn btn-danger" style="margin-top:5px;" value="Import"></div>
            </form>
          </div>
          <div class="modal-footer">
          </div>
        </div>
        <?php
    }
        ?>


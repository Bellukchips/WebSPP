  <table>
    <thead>
                  <tr>
                <th style="text-align:center;">Nis</th>
                <th style="text-align:center;">Nama</th>
                <th style="text-align:center;">Kelas</th>
                    <th style="text-align:center;">Nominal (Rp.)</th>
                        <th style="text-align:center;">Bulan</th>
                          <th style="text-align:center;">Tanggal</th>
                            <th style="text-align:center;">Tahun</th>
                              <th style="text-align:center;">Status</th>
                  </tr>
                </thead>
                <tbody>
  <?php 
  include'config/connect.php';
  $nis = $_POST['niss'];
  $kelas = $_POST['kelass'];
  $c = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where id_siswa='$nis' and kelas='$kelas'") or die(mysql_error());
  while ($st = mysqli_fetch_array($c)) {
      echo '<tr>';
            echo '<td>'.$st['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nama'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['kelas'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$st['nominal'].'</td>';
            echo '<td>'.$st['nama_bulan'].'</td>';
            echo '<td>'.$st['tanggal'].'</td>';
            echo '<td>'.$st['tahun'].'</td>';
            echo '<td>'.$st['status'].'</td>';
            echo '</tr>';
  }

  ?>
  </tbody>
  </table>
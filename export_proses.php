            <?php
    echo ' <label style="text-align:center;font-family:bold;">Data Pembayaran Yang Sudah Lunas</label>';
              ?>
              <table class="table table-bordered" border="2" cellspacing="0" width="100%">
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
                                <th style="text-align:center;">Nama Petugas</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                $k = $_POST['kategori'];
    $c = $_POST['inputan'];
    include'config/connect.php';
    header("content-type:application/vnd-ms-excel");
    header("content-disposition:attachment;filename=Export-Data-$c.xls");

    if ($k == 'Siswa') {
      $q = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where id_siswa='$c'");
      while ($st = mysqli_fetch_array($q)) {
            echo '<tr>';
              echo '<td>'.$st['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$st['nama'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$st['kelas'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$st['nominal'].'.</td>';
              echo '<td>'.$st['nama_bulan'].'</td>';
              echo '<td>'.$st['tanggal'].'</td>';
              echo '<td>'.$st['tahun'].'</td>';
              echo '<td>'.$st['status'].'</td>';
              echo '<td>'.$st['nama_petugas'].'</td>';
              echo '</tr>';

      } echo '<label style="margin-left:30px;">Bulan Yang Belum Lunas</label><br>';
    $tunggak = mysqli_query($koneksi,"SELECT t_bulan.id_bulan, t_bulan.nama_bulan
    FROM t_bulan
    WHERE id_bulan NOT
    IN (
    SELECT id_bulann
    FROM spp
    INNER JOIN imports ON imports.nis = spp.id_siswa INNER JOIN t_kelas ON t_kelas.id_kelas = imports.id_kelass
    WHERE id_siswa =  '$c'
    )") or die(mysqli_error());
    if (mysqli_num_rows($tunggak) == 0) {
      echo '<label style="margin-left:30px">--------Siswa Tidak Mempunyai Tunggakan-------</label>';
    }else{
      while ($cek = mysqli_fetch_array($tunggak)) {
        echo'<label style="margin-left:30px;">Bulan : '.$cek['nama_bulan'].'</label>';
        echo"<br/>";
    }
    $q=mysqli_query($koneksi,"SELECT SUM(set_nominal) FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join t_bulan where nis='$c' and id_bulan NOT IN(SELECT id_bulann from spp where id_siswa='$c')") or die(mysql_error());
    while ($d = mysqli_fetch_array($q)) {
      echo '<label style="margin-left:30px;">------------------------------------------------- +</label><br/>';
    echo'<label style="margin-left:83px;"> Total : Rp.  '.$d['SUM(set_nominal)'].'.000</label>';
    }
    }
    }elseif ($k == 'Kelas') {
      $b = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where kelas like'%$c%'") or die(mysql_error());
      while ($kls = mysqli_fetch_array($b)) {
            echo '<tr>';
              echo '<td>'.$kls['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$kls['nama'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$kls['kelas'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$kls['nominal'].'.</td>';
              echo '<td>'.$kls['nama_bulan'].'</td>';
              echo '<td>'.$kls['tanggal'].'</td>';
              echo '<td>'.$kls['tahun'].'</td>';
              echo '<td>'.$kls['status'].'</td>';
              echo '<td>'.$kls['nama_petugas'].'</td>';
              echo '</tr>';
    }
    }else{
      $moon= mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join spp on spp.id_siswa=imports.nis inner join t_bulan on t_bulan.id_bulan=spp.id_bulann where nama_bulan like'%$c%'") or die(mysql_error());
      while ($bln = mysqli_fetch_array($moon)) {
            echo '<tr>';
              echo '<td>'.$bln['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$bln['nama'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$bln['kelas'].'</td>';  //menampilkan data nama lengkap dari database
              echo '<td>'.$bln['nominal'].'.</td>';
              echo '<td>'.$bln['nama_bulan'].'</td>';
              echo '<td>'.$bln['tanggal'].'</td>';
              echo '<td>'.$bln['tahun'].'</td>';
              echo '<td>'.$bln['status'].'</td>';
              echo '<td>'.$bln['nama_petugas'].'</td>';
              echo '</tr>';
    }
    }
    ?>
    </tbody>
    </table>

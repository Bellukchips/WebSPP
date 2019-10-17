  <div class="card-header" style="margin-top:50px;">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                <th style="text-align:center;">Nis</th>
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
          $nis = $_POST['nis'];

          $query = mysqli_query($koneksi,"SELECT * FROM lunas inner join t_bulan on t_bulan.id_bulan=lunas.id_bulann WHERE id_siswa = '$nis'");
            while($data = mysqli_fetch_array($query))
            {
                        echo '<tr>';
            echo '<td>'.$data['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
            echo '<td>'.$data['nominal'].'</td>';
            echo '<td>'.$data['nama_bulan'].'</td>';
            echo '<td>'.$data['tanggal'].'</td>';
            echo '<td>'.$data['tahun'].'</td>';
            echo '<td>'.$data['status'].'</td>';
              '</tr>';
              
            }

          ?>
          
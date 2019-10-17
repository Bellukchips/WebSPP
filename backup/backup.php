			<table class="table table-bordered" border="2" cellspacing="0" width="100%">
							<thead>
							<tr>
							<th style="text-align:center;">Nis</th>
							<th style="text-align:center;">Nama</th>
							<th style="text-align:center;">Kelas</th>
								<th style="text-align:center;">Nominal (Rp.)</th>
									<th style="text-align:center;">Bulan Ke</th>
									<th style="text-align:center;">Tanggal</th>
										<th style="text-align:center;">Tahun</th>
										<th style="text-align:center;">Status</th>
										<th style="text-align:center;">Nama Petugas</th>
							</tr>
							</thead>
							<tbody>
							<?php
							include'../config/connect.php';
							$date = date('d-m-y');
							header("content-type:application/vnd-ms-excel");
		header("content-disposition:attachment;filename=BackUp-data-$date.xls");	
		$b = mysql_query("SELECT * FROM spp") or die(mysql_error());
		while ($kls = mysql_fetch_array($b)) {
			echo '<tr>';
				echo '<td>'.$kls['id_siswa'].'</td>';  //menampilkan data nama lengkap dari database
				echo '<td>'.$kls['nama_siswa'].'</td>';  //menampilkan data nama lengkap dari database
				echo '<td>'.$kls['kelass'].'</td>';  //menampilkan data nama lengkap dari database
				echo '<td>'.$kls['nominal'].'.</td>';
				echo '<td>'.$kls['id_bulann'].'</td>';
				echo '<td>'.$kls['tanggal'].'</td>';
				echo '<td>'.$kls['tahun'].'</td>';
				echo '<td>'.$kls['status'].'</td>';
				echo '<td>'.$kls['nama_petugas'].'</td>';
				echo '</tr>';
	}
							?>
							</tbody>
							</table>
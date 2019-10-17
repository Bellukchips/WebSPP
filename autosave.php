    <?php 
    include'config/connect.php';
    $bulan = date('m');
    $tahun = date('Y');
    $show = mysqli_query($koneksi,"SELECT * FROM t_kelas inner join imports on imports.id_kelass=t_kelas.id_kelas inner join t_bulan  where nis='$nis'")
    while ($data = mysqli_fetch_array($show)) {
        
        $auto = mysqli_query("INSERT INTO spp( id_siswa,kelass, nominal,id_bulan,tanggal,tahun,status ) 
    SELECT nis,'$data['kelas']','$data['set_nominal']',  '$bulan', NULL ,'$tahun','Belum Lunas' 
    FROM imports inner join t_kelas on t_kelas.id_kelas=imports.id_kelass");
    }


        ?>
    <!-- /*
    $auto = mysql_query("INSERT INTO tunggakan( id_student, kelas_t, nominal_t, bulan_t, tahun_t, status_t, tgl_l, id ) 
    SELECT nis, kelass,  '-',  '$moon',  '$tahunn',  'BELUM LUNAS', NULL , NULL 
    FROM imports");
    */ -->
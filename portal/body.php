
 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
          <li><a href="menu_utama.php"><i class="fa fa-dashboard"></i> <span>Transaksi SPP</span></a></li>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="laporan_spp.php"><i class="fa fa-circle-o"></i> Laporan SPP</a></li>
          <li><a href="export.php"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-circle-o"></i> Export Data</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="import_kelas.php"><i class="fa fa-circle-o"></i> Insert Kelas</a></li>
            <li><a href="Import_personal.php"><i class="fa fa-circle-o"></i> Insert Siswa</a></li>
            <li><a href="data_siswa.php"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="data_kelas.php"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
        <!--     <li><a href="swipe_class.php"><i class="fa fa-circle-o"></i> Kenaikan Kelas</a></li>

          -->   <li><a href="import_mo.php" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-circle-o"></i> Import Siswa</a></li>
            <li><a href="import_p.php" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-circle-o"></i>Tambah Petugas</a></li>
            <li><a href="backup_data.php" ><i class="fa fa-circle-o"></i>Backup Data</a></li>
  <!--           <li><a onclick="konfirmasi()" style="cursor: pointer;"><i class="fa fa-circle-o"></i> Hapus Data </a>


                       <script type="text/javascript">
            function konfirmasi(lokasi){
              if ( confirm("Anda yakin ingin menghapus Semua data?? termasuk Data pembarayaran dan Lainnya?"))
              {
                location.href = 'hapus_imports.php';
                return (true);
              } else {
                return (false);
              }
            }
          </script> -->
          </ul>
        </li>

       <li>
          <a href="view_users.php">
            <i class="fa fa-folder"></i> <span>View Users</span>
          </a>
        </li>
           <li>
          <a href="form_setting_pembayaran.php">
            <i class="fa fa-edit"></i> <span>Setting Nominal Spp</span>
          </a>
        </li>
        </ul>

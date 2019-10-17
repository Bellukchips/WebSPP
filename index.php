  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { width:1400px; margin: auto;}</style>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
    <title>Dashboard| SPP</title>
    <link rel="shortcut icon" href="gambar/logo.png">
  </head>
  <body>
  <div class="content-wrapper" style="width:1409px;margin-left:-20px;margin-top:-9px;">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb" style="background-color:white;">
      <img src="gambar/logo.png" style="width:5%;height:2%;"> <h5 style="font-family:bold;font-size:20px;margin-left:10px;margin-top:20px;">SPP Payments Aplication</h5>
          <li class="breadcrumb-item">
        <a class="btn btn-danger" name="simpan" style="margin-left:1225px;width:110px;margin-top:-60px;" href="form_login.php">L o g i n</a>
          </li>
        </ol>
        </div>
        <br>
        <div class="container" style="margin-top:-18px; width:1400px;margin-left:-4px; ">
    <div id="WJSlider" class="carousel slide" data-ride="carousel" style="width:1390px;margin-top: 
    -20px;"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
        <li data-target="#WJSlider" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="gambar/download.jpg" alt="slide1" style="width:1400px;height:500px;">
          <div class="carousel-caption">
            <marquee behavior="alternate"><h1 style="font-family:times new roman;font-size:40px;color:black;">SPP Payments Aplication</h1></marquee>
            
          </div>
        </div>

        <div class="item">
          <img src="gambar/bg.jpg" alt="slide2" style="width:1400px;height:500px;">
          <div class="carousel-caption">
          </div>
        </div>
    </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Kembali</span>
      </a>
      <a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Lanjut</span>
      </a>
    </div>
  </div>
  </div>
  </div>
  <div></div>
  <?php 
  require'backup/script_timer.php';
  ?>

  <footer class="sticky-footer" style="width:1400px;padding-bottom:90px; ">
        <div class="container">
          <div class="text-center">
            <h3>Copyright ©  TEAM KERJA PROYEK RPL</h3>
          </div>
        </div>
      </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>
      <!-- Custom scripts for this page-->
      <script src="js/sb-admin-datatables.min.js"></script>
      <script src="js/sb-admin-charts.min.js"></script>
  </body>
  </html>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN</title>
    <link rel="shortcut icon" href="gambar/logo.png">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #eee;
    background-image: url(gambar/smk1.png);
    background-size:1550px auto; 
    }

    .form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
    color: #006666; 
    }
    .form-signin .form-signin-heading{
      text-align: center;
    }
    .form-signin .checkbox {
    margin-bottom: 10px;
    text-align: center;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
          box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="text"] {
      margin-bottom: 2px;
      border-bottom-right-radius: 10;
      border-bottom-left-radius: 10;
      border-radius:20px; 
      margin-bottom:20px;
      margin-top:20px;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 10;
      border-top-right-radius: 10;
      border-radius:20px; 

    }
      .form-signin button[type="submit"] {
      margin-bottom: 10px;
      border-top-left-radius: 10;
      border-top-right-radius: 10;
      border-radius:20px; 
      background:blue;
      border-color:blue;
      color:white;

    }
    </style>
    
  </head>

    <body class="bg-dark">
      <div class="container">
    
        <form class="form-signin" method="post" action="login.php" role="form">
      <table><legend style="text-align: center; color: white;"><h1 style="font-family: bold;">Welcome To </h1></legend>
            <strong style="text-align: center; color: white;"><h1 style="font-family: bold;">Aplikasi Pembayaran SPP</h1></strong>
            <strong style="text-align: center; color: white;"><h3 style="font-family: bold;"><marquee behavior="alternate">Smk Negeri 1 Slawi</h3></marquee></strong>
              <div class="card-body">
            <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus autocomplete="off">
            </div>
        <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
          <button  class="form-control" type="submit" name="submit">L o g i n</button>
        </form>
      </div> <!-- /container -->
      </table>
    
    <!-- Bootstrap core JavaScript, Placed at the end of the document so the pages load faster -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
      $(".alert-message").alert().delay(3000).slideUp('slow');
    </script>
  <?php require'backup/script_timer.php'; ?>
    </body>
  </html>
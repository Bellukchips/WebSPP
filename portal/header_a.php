
  <header class="main-header">
    <!-- Logo -->
    <a href="menu.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" ><b>P</b>SPP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" ><b>Pembayaran</b> SPP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
              
          <li class="dropdown user user-menu">
          
            <a href="logout.php">
Logout
            </a>
            <ul class="dropdown-menu">

              <!-- User image -->
              <!-- Menu Body -->
              <!-- Menu Footer-->
             
              </li>
            </ul>
          </li>
           <!-- Control Sidebar Toggle Button -->
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="gambar/logo.png" class="img-circle" alt="User Image">
        </div> 
        <div class="pull-left info">
          <h8 style="font-family:bold;"><?php echo $_SESSION['petugas'];?></h8><br>
          <label><?php echo $_SESSION['status']; ?></label>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
      </form>
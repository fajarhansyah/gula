<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">API Laporan Produksi PT IGG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="padding-top: 6%;">
          <img src="template/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <a href="logout.php" class="d-block">
          <div class="info">
            <?php echo $_SESSION['username']; ?><br>
            Logout
            </div>
          </a>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="view.php" class="nav-link">
              <i class="nav-icon fa fa-eye"></i>
              <p>
                View
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="datapg.php" class="nav-link">
              <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                Insert
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="tambahan_komponen_kerja.php" class="nav-link">
              <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                Komponen Kerja
              </p>
            </a>
            
          </li>
          <li  class="nav-item">
            <a href="hapuspg.php" class="nav-link">
              <i class="nav-icon fa fa-trash"></i>
              <p>
                Delete
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
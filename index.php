<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$conn = mysqli_connect("localhost", "root", "", "kas");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dana-ku | Pembayaran Kas</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="dashboard.html">
              
              <b class="logo-icon">
                
                <img src="plugins/images/logo-icon.png" alt="homepage" />
              </b>
              <span class="logo-text">
                <img src="plugins/images/logo-text.png" alt="homepage" />
              </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-none d-md-block d-lg-none">
              <li class="nav-item">
                <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto d-flex align-items-center">
              <li>
                <a class="profile-pic" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle" /><span class="text-white font-medium">Bendahara</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="left-sidebar" data-sidebarbg="skin6">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              
              <li class="sidebar-item pt-2">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                  <i class="far fa-clock" aria-hidden="true"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?page=masuk" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hide-menu">Kas Masuk</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?page=keluar" aria-expanded="false">
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span class="hide-menu">Kas Keluar</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?page=rekap" aria-expanded="false">
                  <i class="fa fa-font" aria-hidden="true"></i>
                  <span class="hide-menu">Rekaptulasi</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?page=user" aria-expanded="false">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  <span class="hide-menu">Management User</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <div class="page-wrapper" style="min-height: 250px">
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">Dashboard</h4>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="white-box">
                
                <?php 
                  $page = $_GET["page"];
                  $aksi = $_GET["aksi"];

                  if($page == "masuk") {
                    if($aksi == "") {
                      include "page/kas_masuk/masuk.php";
                    }
                  } else if($page == "keluar") {
                    if($aksi == "") {
                      include "page/kas_keluar/keluar.php";
                    }
                  } else if($page == "rekap") {
                    if($aksi == "") {
                      include "page/kas_rekap/rekap.php";
                    }
                  } else if($page == "user") {
                    if($aksi == "") {
                      include "page/user/user.php";
                    }
                  }

                ?>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer text-center">Dana-ku &copy; by Muhammad Rizky</footer>
      </div>
    </div>
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
  </body>
</html>

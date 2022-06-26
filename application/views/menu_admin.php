<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="author" content="nazuarsyah">
  <link href="<?php echo base_url() . "assets/images/Logo-UT_03.png" ?>" rel="shortcut icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard IKATM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css" ?>">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/vendors/css/vendor.bundle.base.css" ?>">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/vendors/css/vendor.bundle.addons.css" ?>">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/css/style.css" ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url() . "assets/images/Logo-UT_03.png" ?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo base_url('page'); ?>">
          <img src="<?php echo base_url() . "assets/images/logo.png" ?>" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url() . "page" ?>">
          <img src="<?php echo base_url() . "assets/images/logo.png" ?>" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">

        </ul>
        <ul class="navbar-nav navbar-nav-right">

          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="<?php echo base_url('page'); ?>" data-toggle="dropdown" aria-expanded="false">
              <?php
              $user = $this->session->userdata('ses_user');
              ?>
              <span class="profile-text"><?php echo "Selamat datang, " . $user;
                                          echo "" ?></span>

              <img class="img-xs rounded-circle" src="<?php echo base_url() . "assets/images/logo.png" ?>" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
              </a>
              <a class="dropdown-item mt-2">

              </a>
              <a href="<?php echo base_url() . "page/ganti_password" ?>" class="dropdown-item">
                Ganti Password
              </a>
              <a href="<?php echo base_url() . "login/logout" ?>" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <button class="btn btn-primary btn-block">IKATM <i>Versi 1.0</i></button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kepegawaian" aria-expanded="false" aria-controls="kepegawaian">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Anggota</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kepegawaian">
              <ul class="nav flex-column sub-menu">
                <?php
                $user = $this->session->userdata('ses_user');
                foreach ($this->mymodel->GetProgramPeg(" AND user_program='" . $user . "'")->result() as $peg) {
                ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?><?php echo $peg->kode_program; ?>" <?php echo $peg->nama_program ?> </li>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Pengguna</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() . "page/tabel_user" ?>"> Tabel User </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() . "page/ganti_password" ?>"> Ganti Password </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() . "login/logout" ?>"> Sign Out </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoInventory</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/toastr/toastr.min.css">

  <!-- logo title -->
  <link rel="icon" href="<?= base_url() ?>assets/dist/img/logo.jpg">


</head>

<body class="hold-transition sidebar-mini">

  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <?php
      date_default_timezone_set('Asia/Jakarta');
      echo date("d-M-Y H:i:s");
      ?>
      <!-- Right navbar links -->

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url() ?>assets/dist/img/admin1.jpg" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline">Administrator</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
              <img src="<?= base_url() ?>assets/dist/img/admin1.jpg" class="img-circle elevation-2" alt="User Image">

              <p>
                Administrator
                <small>Go Inventory</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
              <a href="auth/logout" class="btn btn-default btn-flat float-right">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/welcome" class="brand-link py-3 pl-2">
        <img src="<?= base_url() ?>assets/dist/img/logo.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><Strong>Go</Strong>Inventory </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline pt-3">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="/welcome" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <i class="nav-item">
              <a href="/produk" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                  Daftar Produk
                </p>
              </a>
            </i>
            <i class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-arrow-left"></i>
                <p>Inbound</p>
              </a>
            </i>
            <i class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-arrow-right"></i>
                <p>Outbound</p>
              </a>
            </i>
            <i class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-eject"></i>
                <p>Pallet</p>
              </a>
            </i>
            <i class="nav-item">
              <a href="/staff" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Staff</p>
              </a>
            </i>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
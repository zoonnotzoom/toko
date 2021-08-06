<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md bg-white">
    <div class="container-fluid">
      <a href="<?php echo base_url('dashboard') ?>" class="navbar-brand">
        <img src="<?php echo base_url('assets/img/logo.png') ?>" width="150" height="50">
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard') ?>" class="nav-link text-dark text-lg ml-2">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark text-lg ml-3">Kategori</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo base_url('kategori/buku') ?>" class="dropdown-item text-dark">Buku</a></li>
              <li><a href="<?php echo base_url('kategori/alattuliskantor') ?>" class="dropdown-item text-dark">Alat Tulis Kantor</a></li>
              <!-- End Level two -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kategori/promo') ?>" class="nav-link text-dark text-lg ml-3">Promo</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kategori/tentangkami') ?>" class="nav-link text-dark text-lg ml-3">Tentang Kami</a>
          </li>
        </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown no-arrow d-sm-none">          
        </li>
        <div class="navbar bg-white">
          <ul class="nav navbar-nav navbar-right ml-2 bg-white">
            <li>
              <?php
              $keranjang ='<i class="fas fa-fw fa-shopping-cart ml-2 text-dark text-lg"></i>'. $this->cart->total_items()
              ?>
              <?php echo anchor('Dashboard/detail_keranjang', $keranjang) ?>
            </li>
            </ul>
            <div class="topbar-divider d-none d-sm-block ml-2"></div>
              <ul class="na navbar-nav navbar-right ml-2 bg-white">
                <?php if($this->session->userdata('username')) { ?>
                  <li class="text-lg text-uppercase mt-1"><div><?php echo $this->session->userdata('username') ?></div></li>
                    <li class="ml-2 bg-white"><?php echo anchor('auth/logout', '<div class="btn btn-md btn-dark">Logout</div>') ?></li>
                    <?php } else { ?>
                    <li><?php echo anchor('auth/login', '<div class="btn btn-md btn-outline-dark">Login</div>'); ?></li><div class="ml-3"></div>
                    <li><?php echo anchor('registrasi/index', '<div class="btn btn-md btn-dark">Daftar</div>'); ?></li>
                      <?php } ?>
              </ul>
            </div>
      </ul>
    </div>
  </nav>

<link href="<?php echo base_url() ?>assets/css/footer.css" rel="stylesheet">
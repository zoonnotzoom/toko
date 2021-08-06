<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/Dashboard_admin') ?>">
                <div class="sidebar-brand-icon">
               <img src="<?php echo base_url('assets/img/logo.png') ?>" width="150" height="50">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Dashboard_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
 
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Barang</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoice</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-secondary topbar mb-4 static-top shadow text-white">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right text-lg">
                            <?php if($this->session->userdata('username')) { ?>
                                <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>

                            <?php } ?>
                            
                            </ul>
                    </ul>

                </nav>
                <!-- End of Topbar -->
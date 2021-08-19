    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard'); ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Verifikator</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard'); ?>">
            <div class="sidebar-brand-text mx-3">
                <h2><strong>SIMPEG</strong></h2>
            </div>
        </a> -->

        <!-- Heading -->
        <div class="sidebar-heading">
            LIST MENU
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>verifikator/beranda">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Data Pegawai -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'data_pegawai' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>verifikator/data_pegawai">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Pegawai</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
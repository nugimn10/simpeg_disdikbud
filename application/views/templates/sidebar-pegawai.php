    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('pegawai/beranda'); ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="sidebar-brand-text mx-3">PEGAWAI</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            LIST MENU
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'beranda' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url('pegawai/beranda'); ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span></a>
        </li>

        <!-- Nav Item -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'profil_pegawai' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url('pegawai/profil_pegawai/detail/'); ?><?php echo $user['id_pegawai']; ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Profile Pegawai</span></a>
        </li>

        <!-- Nav Item -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'izin' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url('pegawai/izin_pegawai/izin/'); ?><?php echo $user['id_pegawai']; ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Izin</span></a>
        </li>

         <!-- Nav Item - Data Pegawai -->
         <li class="nav-item <?php echo $this->uri->segment(2) == 'pak' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>pegawai/pak">
                <i class="fas fa-fw fa-users"></i>
                <span>PAK</span>
            </a>
        </li>

         <!-- Nav Item - Data Pegawai -->
         <li class="nav-item <?php echo $this->uri->segment(2) == 'kgb' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>pegawai//kenaikan_gaji">
                <i class="fas fa-fw fa-users"></i>
                <span>KGB</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard'); ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="sidebar-brand-text mx-3">ADMIN</div>
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
            <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Data Pegawai -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'data_pegawai' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>admin/data_pegawai">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Pegawai</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item  <?php echo $this->uri->segment(2) == 'riwayat_keluarga' ? 'active' : null; ?>">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#keluarga" aria-expanded="true" aria-controls="keluarga">
                <i class="fas fa-home fa-fw"></i>
                <span>Riwayat Keluarga</span>
            </a>
            <div id="keluarga" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'data_suami_istri' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/riwayat_keluarga/data_suami_istri">
                        <i class="fas fa-user fa-fw"></i>
                        <span>Suami/Istri</span>
                    </a>
                    <!-- <a class="collapse-item <?php echo $this->uri->segment(3) == 'data_anak' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/riwayat_keluarga/data_anak">
                        <i class="fas fa-user fa-fw"></i>
                        <span>Anak</span>
                    </a>
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'data_orangtua' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/riwayat_keluarga/data_orangtua">
                        <i class="fas fa-user fa-fw"></i>
                        <span>Orang Tua</span>
                    </a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item  <?php echo $this->uri->segment(2) == 'riwayat_pendidikan' ? 'active' : null; ?>">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#pendidikan" aria-expanded="true" aria-controls="pendidikan">
                <i class="fas fa-university fa-fw"></i>
                <span>Riwayat Pendidikan</span>
            </a>
            <div id="pendidikan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'sekolah' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/riwayat_pendidikan/sekolah">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Sekolah</span>
                    </a>
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'kelengkapan' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/riwayat_pendidikan/kelengkapan">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Kelengkapan</span>
                    </a>
                    <!-- <a class="collapse-item <?php echo $this->uri->segment(3) == 'bahasa' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/riwayat_pendidikan/bahasa">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Bahasa</span>
                    </a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'kepegawaian' ? 'active' : null; ?>">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#kepegawaian" aria-expanded="true" aria-controls="kepegawaian">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Kepegawaian</span>
            </a>
            <div id="kepegawaian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'jabatan' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/kepegawaian/jabatan">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Jabatan</span>
                    </a>
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'pangkat' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/kepegawaian/pangkat">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Pangkat</span>
                    </a>
                    <a class="collapse-item <?php echo $this->uri->segment(3) == 'mutasi' ? 'active' : null; ?>" href="<?php echo base_url(); ?>admin/kepegawaian/mutasi">
                        <i class="fas fa-fw fa-briefcase"></i>
                        <span>Mutasi</span>
                    </a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Data Pegawai -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'rekapitulasi' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>admin/rekapitulasi">
                <i class="fas fa-chart-bar"></i>
                <span>Rekapitulasi</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block mt-3">

        <!-- Nav Item -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'data_user_login' ? 'active' : null; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>admin/data_user_login">
                <i class="fas fa-fw fa-lock"></i>
                <span>Management User</span></a>
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
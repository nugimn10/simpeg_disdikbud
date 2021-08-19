<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>REKAPITULASI</strong></h6>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body mx-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-users fa-4x text-gray-300"></i>
                                </div>
                                <div class="col ml-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Semua Pegawai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php $pegawai = $this->db->query('SELECT * FROM pegawai');
                                        echo $pegawai->num_rows(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body mx-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-male fa-4x text-gray-300"></i>
                                </div>
                                <div class="col ml-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Pegawai Laki-laki</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php $pegawai = $this->db->query("SELECT * FROM pegawai WHERE jk = 'Laki-laki'");
                                        echo $pegawai->num_rows(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body mx-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-female fa-4x text-gray-300"></i>
                                </div>
                                <div class="col ml-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Pegawai Perempuan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php $pegawai = $this->db->query("SELECT * FROM pegawai WHERE jk = 'Perempuan'");
                                        echo $pegawai->num_rows(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body mx-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-users fa-4x text-gray-300"></i>
                                </div>
                                <div class="col ml-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Semua User</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php $user = $this->db->query('SELECT * FROM user');
                                        echo $user->num_rows(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body mx-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-user-tie fa-4x text-gray-300"></i>
                                </div>
                                <div class="col ml-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">User Admin</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php $user = $this->db->query("SELECT * FROM user WHERE level = 'Administrator'");
                                        echo $user->num_rows(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body mx-auto">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-user fa-4x text-gray-300"></i>
                                </div>
                                <div class="col ml-3">
                                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">User Pegawai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php $user = $this->db->query("SELECT * FROM user WHERE level = 'Pegawai'");
                                        echo $user->num_rows(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

</div>

</div>
<!-- End of Main Content -->
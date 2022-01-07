<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ">BERANDA</h1>
    </div>

    <div class="jumbotron">
        <h4 class="display-4">Selamat Datang <strong><?php echo $user['nama']; ?></strong></h4>
        <p class="lead">Anda Login Sebagai <strong><?php echo $user['level']; ?></strong></p>
        <!-- <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
    </div>

    <!-- <div class="row">


        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1"> <a href="<?php echo base_url(); ?>admin/data_pegawai" class="small-box-footer">Jumlah Pegawai</a></div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php $pegawai = $this->db->query('SELECT * FROM pegawai');
                                                                                echo $pegawai->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->

</div>

</div>
<!-- End of Main Content -->
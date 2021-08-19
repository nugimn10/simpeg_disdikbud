<div class="container">
    
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-14 col-lg-12 col-md-12">

            <div class="card o-hidden border-1 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Masukan NIP Anda</h1>
                                </div>
                                <?php echo $this->session->flashdata('pesan'); ?>
                                <form method="post" action="<?php echo base_url('auth/cari'); ?>" class="pegawai">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Masukkan NIP" name="nip" id="nip" autofocus>
                                        <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                </form>
                                <p align="right"> <?php  echo anchor('auth/login', ' <button type="button" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Aktifkan Akun">Login</button>') ?>  <?php  echo anchor('auth/daftar', ' <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Aktifkan Akun">Buat Akun</button>') ?> 
                                                <!-- <button type="button" class="btn btn-outline-primary">Buat Akun</button></p> -->
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row justify-content-center">

        <div class="col-xl-14 col-lg-12 col-md-12">

            <div class="card o-hidden border-1 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                        <table class="table table-bordered" id="dataTables">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>NIP</th>
                                    <th>NAMA PEGAWAI</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>UNIT KERJA</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php $no = 1;
                                foreach ($pegawai as $pgw) : ?>
                                    
                                    
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $pgw->nip ?></td>
                                            <td><?php echo $pgw->nm_pegawai ?></td>
                                            <td style="width: 150px;"><?php echo $pgw->jk ?></td>
                                            <td><?php echo $pgw->uk ?></td>
                                            <td style="width:150px;">

                                                <?php if ($pgw->status == 0) echo anchor('auth/aktivasi/' . $pgw->id_pegawai, ' <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Aktifkan Akun">Aktivasi </button>'); else echo '<button class="btn btn-sm btn-success mb-3" > Sudah Aktif</button>'  ?> 
                                                <!-- <?php  if ($pgw->status == 0) echo '<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#aktivasi_akun_pegawai"><i class="fas fa-plus fa-sm"></i> Aktivasi </button>'; else echo '<button class="btn btn-sm btn-success mb-3" ><i class="fas fa-plus fa-sm"></i> Aktivasi</button>' ?> -->
                                                
                                            </td>

                                        </tr>

                                <?php endforeach; ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
    <div class="content-wrapper">
        <br>
    </div>
</div>

<div class="modal fade" id="aktivasi_akun_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aktifkan Akun Simpeg</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <?php  echo anchor('auth/aktivasi/' . $pgw->id_pegawai, ' <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Aktifkan Akun">Ya </i></button>') ?>
            </div>
            </form>
        </div>
    </div>
</div>

<style>
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
</style>

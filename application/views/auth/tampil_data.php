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
                                <form method="post" action="<?php echo base_url('auth/tampil_data'); ?>" class="pegawai">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Masukkan NIP" name="nip" id="nip" autofocus>
                                        <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                </form>
                                <p align="right"> <?php  echo anchor('auth/daftar', ' <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Aktifkan Akun">Buat Akun</button>') ?> 
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

                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>NIP</th>
                                    <th>NAMA PEGAWAI</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>UNIT KERJA</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>

                                <?php $no = 1;
                                foreach ($pegawai as $pgw) : ?>
                                    
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $pgw->nip ?></td>
                                            <td><?php echo $pgw->nm_pegawai ?></td>
                                            <td style="width: 150px;"><?php echo $pgw->jk ?></td>
                                            <td>
                                            </td>
                                            <td style="width:150px;">

                                                <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button> -->

                                                <?php  echo anchor('admin/data_pegawai/edit/' . $pgw->id_pegawai, ' <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Aktifkan Akun">Aktivasi <i class="fas fa-edit"></i></button>') ?> 
                                                <!-- <a href="<?php echo base_url('admin/data_pegawai/hapus/'); ?><?php $pgw->id_pegawai ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="far fa-trash-alt"></i></a> -->

                                            </td>

                                        </tr>
                                    </tbody>

                                <?php endforeach; ?>
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

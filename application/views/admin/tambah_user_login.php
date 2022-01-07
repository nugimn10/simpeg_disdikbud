<div class="container-fluid">


    <div class="card">
        <h6 class="card-header"><strong>TAMBAH DATA USER</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url() ?>admin/data_user_login/tambah" method="post">

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="id_pegawai">ID Pegawai</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" placeholder="Masukkan ID Pegawai">
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="id_pegawai">ID Pegawai</label>
                        </div>
                        <div class="col-md-7">
                            <select name="id_pegawai" class="custom-select">
                                <option selected>Pilih Pegawai</option>
                                <?php foreach ($pegawai as $pgw) : ?>
                                    <option value="<?php echo $pgw->id_pegawai ?>"><?php echo $pgw->id_pegawai ?> - <?php echo $pgw->nm_pegawai ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-7">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-7">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="no_hp">No. HP</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No. HP">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="level">Level</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" name="level" id="level">
                                <option selected>Pilih Level</option>
                                <option>Administrator</option>
                                <option>Verifikator</option>
                                <option>Supervisor</option>
                                <option>Pegawai</option>
                            </select>
                        </div>
                    </div>
                </div>

        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('admin/data_user_login'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" name="tambah" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>

        </form>
    </div>



</div>

</div>
<!-- End of Main Content -->
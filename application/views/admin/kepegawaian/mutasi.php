<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>MUTASI</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url() ?>admin/kepegawaian/mutasi/tambah" method="post">

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pegawai">Pegawai</label>
                        </div>
                        <div class="col-md-7">

                            <select name="id_pegawai" class="custom-select">
                                <option selected>Pilih Pegawai</option>
                                <?php foreach ($pegawai as $pgw) : ?>
                                    <option value="<?php echo $pgw->id_pegawai ?>"><?php echo $pgw->nip ?> - <?php echo $pgw->nm_pegawai ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="jenis_mutasi">Jenis Mutasi</label>
                        </div>
                        <div class="col-md-7">
                            <select name="jenis_mutasi" class="custom-select">
                                <option selected>Pilih Jenis Mutasi</option>
                                <option>Masuk</option>
                                <option>Keluar</option>
                                <option>Pindah Antar Instansi</option>
                                <option>Pensiun</option>
                                <option>Wafat</option>
                                <option>Kenaikan Pangkat</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="no_sk_mts">No. SK</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="no_sk_mts" id="no_sk_mts" class="form-control" placeholder="Masukkan No. SK">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tgl_mts">Tanggal Mutasi</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="date" name="tgl_mts" id="tgl_mts" class="form-control">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>

        </form>
    </div>

</div>

</div>
<!-- End of Main Content -->
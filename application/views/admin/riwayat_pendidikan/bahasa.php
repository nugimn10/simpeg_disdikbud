<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA BAHASA</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url() ?>admin/riwayat_pendidikan/bahasa/tambah" method="post">

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
                            <label for="bahasa">Bahasa</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="bahasa" id="bahasa" class="form-control" placeholder="Masukkan Bahasa">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="kmp_bcr">Kemampuan Bicara</label>
                        </div>
                        <div class="col-md-7">
                            <select name="kmp_bcr" class="custom-select">
                                <option selected>Pilih Kemampuan Bicara</option>
                                <option>Aktif</option>
                                <option>Pasif</option>
                            </select>
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
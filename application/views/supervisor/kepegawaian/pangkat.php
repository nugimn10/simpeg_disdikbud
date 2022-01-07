<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA PANGKAT</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url() ?>supervisor/kepegawaian/pangkat/tambah" method="post">

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
                            <label for="id_master_golongan">Golongan</label>
                        </div>
                        <div class="col-md-7">
                            <select name="id_master_golongan" class="custom-select">
                                <option selected>Pilih Golongan</option>
                                <?php foreach ($master_golongan as $mg) : ?>
                                    <option value="<?php echo $mg->id_master_golongan ?>"><?php echo $mg->golongan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pangkat">Pangkat</label>
                        </div>
                        <div class="col-md-7">
                            <select name="pangkat" class="custom-select">
                                <option selected>Pilih Pangkat</option>
                                <?php foreach ($master_golongan as $mg) : ?>
                                    <option><?php echo $mg->pangkat ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tmt_pkt">TMT Pangkat</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="date" name="tmt_pkt" id="tmt_pkt" class="form-control">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pjb_pgs_pkt">Pejabat Pengesah SK</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="pjb_pgs_pkt" id="pjb_pgs_pkt" class="form-control" placeholder="Masukkan Nama Pejabat">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="">No dan Tanggal SK</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="no_sk_pkt" id="no_sk_pkt" class="form-control" placeholder="Masukkan No. SK">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_sk_pkt" id="tgl_sk_pkt" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                    </div>
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
<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA ANAK</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url() ?>admin/riwayat_keluarga/data_anak/tambah" method="post">

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
                            <label for="nik">NIK</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK">
                        </div>
                    </div>
                </div>

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

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tpt_lhr">Tempat, Tanggal Lahir</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="tpt_lhr" id="tpt_lhr" class="form-control" placeholder="Masukkan Tempat Lahir">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_lhr" id="tgl_lhr" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right">
                            <label for="jk">Jenis Kelamin</label><br>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pddk">Pendidikan</label>
                        </div>
                        <div class="col-md-7">
                            <select name="pddk" class="custom-select">
                                <option selected>Pilih Pendidikan</option>
                                <option>SD</option>
                                <option>SMP</option>
                                <option>SMA/SMK</option>
                                <option>D3/S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pkrj">Pekerjaan</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="pkrj" id="pkrj" class="form-control" placeholder="Masukkan Pekerjaan">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="stts_hub">Status Hubungan</label>
                        </div>
                        <div class="col-md-7">
                            <select name="stts_hub" class="custom-select">
                                <option selected>Pilih Status Hubungan</option>
                                <option>Anak Kandung</option>
                                <option>Anak Angkat</option>
                                <option>Anak Tiri</option>
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
        <!-- <?php form_close(); ?> -->
    </div>

</div>

</div>
<!-- End of Main Content -->
<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA SUAMI/ISTRI</strong></h6>
        <div class="card-body">
        <form action="<?php echo base_url('pegawai/riwayat_keluarga/data_suami_istri/tambah/'. $detail->id_pegawai) ?>" method="post">

            <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="id_pegawai" class="form-control" value="<?php echo $detail->id_pegawai ?>" hidden>
                        </div>
                    <div class="form-row justify-content-md-center">
                        
                        <div class="col-md-2 text-right mt-2">
                            <label for="pegawai">Pegawai</label>
                        </div>

                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nm_pegawai" class="form-control" value="<?php echo $detail->nm_pegawai ?>" disabled>
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
                                <option>Suami</option>
                                <option>Istri</option>
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
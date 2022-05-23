<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA PENDIDIKAN</strong></h6>
        <div class="card-body">
            <form action="<?php echo base_url('pegawai/riwayat_pendidikan/sekolah/tambah/'. $detail->id_pegawai) ?>" method="post">


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
                            <label for="tingkat">Tingkat</label>
                        </div>
                        <div class="col-md-7">
                            <select name="tingkat" class="custom-select">
                                <option selected>Pilih Tingkat</option>
                                <option>SD </option>
                                <option>SMP/MTs </option>
                                <option>SMA Sederajat</option>
                                <option>D1</option>
                                <option>D2</option>
                                <option>D3</option>
                                <option>S1/D4</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right">
                            <label for="nm_skl_uv">Nama Sekolah / Universitas</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nm_skl_uv" id="nm_skl_uv" class="form-control" placeholder="Masukkan Nama Sekolah / Universitas">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="lokasi">Lokasi</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Masukkan Lokasi">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="jurusan">Jurusan</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan Jurusan">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="no_ijz">No, Tanggal Ijazah</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="no_ijz" id="no_ijz" class="form-control" placeholder="Masukkan No. Ijazah">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_ijz" id="tgl_ijz" class="form-control">
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
                            <label for="nm_ks_rk">Nama Kepsek / Rektor</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nm_ks_rk" id="nm_ks_rk" class="form-control" placeholder="Masukkan Nama Kepsek / Rektor">
                        </div>
                    </div>
                </div>

        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('supervisor/beranda'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>

        </form>
    </div>

</div>

</div>
<!-- End of Main Content -->
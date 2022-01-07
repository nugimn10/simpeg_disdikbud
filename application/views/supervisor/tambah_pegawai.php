<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>TAMBAH DATA PEGAWAI</strong></h6>
        <div class="card-body">
            <!-- <form action="" method="post"> -->
            <!-- <?php echo form_open_multipart('admin/data_pegawai/tambah') ?> -->
            <form action="<?php echo base_url() ?>admin/data_pegawai/tambah" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nm_pegawai">Nama Pegawai</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nm_pegawai" id="nm_pegawai" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                            <label for="jk">Jenis Kelamin</label><br>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
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
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">Unit Kerja</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="uk" id="uk" class="form-control" placeholder="Masukkan Unit Kerja">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">Kecamatan</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="kec" id="kec" class="form-control" placeholder="Masukkan Kecamatan">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">No Sertifikat Pendidik</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="serdik" id="serdik" class="form-control" placeholder="Masukkan No Seri">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">NIP</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">NIK</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">NUPTK</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nuptk" id="nuptk" class="form-control" placeholder="Masukkan NUPTK">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="tpt_lhr">Tempat, Tanggal Lahir</label>
                        </div>
                        
                        <div class="col-md-7 col-sm-7 col-xs-7">
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
                
                    <div class="form-row justify-content-md-center">
                    <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="tpt_lhr">Tanggal Pensiun</label>
                        </div>
                        
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div class="form-row">
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_pnsn" id="tgl_pnsn" class="form-control" disabled>
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
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="agama">Agama</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <select name="agama" class="custom-select">
                                <option selected>Pilih Agama</option>
                                <option>Islam</option>
                                <option>Katolik</option>
                                <option>Kristen Protestan</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                                <option>Kong Hu Cu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="gol_darah">Golongan Darah</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <select name="gol_darah" class="custom-select">
                                <option selected>Pilih Golongan Darah</option>
                                <option>-</option>
                                <option>A</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="stts_pnkh">Status Pernikahan</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <select name="stts_pnkh" class="custom-select">
                                <option selected>Pilih Status Pernikahan</option>
                                <option>Menikah</option>
                                <option>Belum Menikah</option>
                                <option>Cerai</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="stts_kpgw">Status Kepegawaian</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <select name="stts_kpgw" class="custom-select">
                                <option selected>Pilih Status Kepegawaian</option>
                                <option>PNS</option>
                                <option>NON PNS</option>
                                <option>PPPK</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="no_hp">No. HP</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No. HP">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="tgl_msk">Tanggal Masuk</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="date" name="tgl_msk" id="tgl_msk" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right">
                            <label for="tgl_knk_pkt">Tanggal Kenaikan Pangkat</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="date" name="tgl_knk_pkt" id="tgl_knk_pkt" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="tgl_knk_gj">Tanggal Kenaikan Gaji Terakhir</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="date" name="tgl_knk_gj" id="tgl_msk" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="foto">Upload Foto</label><br>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                    </div>
                </div> -->
        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('admin/data_pegawai'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>

        </form>
        <!-- <?php form_close(); ?> -->
    </div>

</div>

</div>
<!-- End of Main Content -->
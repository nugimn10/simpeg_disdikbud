<div class="container-fluid">


    <div class="card">
        <h6 class="card-header"><strong>EDIT DATA PEGAWAI</strong></h6>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id_pegawai" value="<?php echo $pegawai->id_pegawai ?>">
                <!-- <input type="hidden" name="foto_lama" value="<?php echo $pegawai->foto ?>"> -->
                
                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="nm_pegawai">Nama Pegawai</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nm_pegawai" id="nm_pegawai" class="form-control" value="<?php echo $pegawai->nm_pegawai ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="nip">NIP</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP" value="<?php echo $pegawai->nip ?>">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">NIK</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" value="<?php echo $pegawai->nik ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">NUPTK</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="nuptk" id="nuptk" class="form-control" placeholder="Masukkan NUPTK" value="<?php echo $pegawai->nuptk ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right">
                            <label for="jk">Jenis Kelamin</label><br>
                        </div>
                        <div class="col-md-7">
                            <?php foreach ($jenkel as $jk) : ?>
                                <?php if ($jk == $pegawai->jk) : ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="<?php echo $jk; ?>" value="<?php echo $jk; ?>" checked>
                                        <label class="form-check-label" for="<?php echo $jk; ?>"><?php echo $jk; ?></label>
                                    </div>
                                <?php else : ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="<?php echo $jk; ?>" value="<?php echo $jk; ?>">
                                        <label class="form-check-label" for="<?php echo $jk; ?>"><?php echo $jk; ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">Unit Kerja</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="uk" id="uk" class="form-control" placeholder="Masukkan Unit Kerja" value="<?php echo $pegawai->uk ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">Kecamatan</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="kec" id="kec" class="form-control" placeholder="Masukkan Kecamatan" value="<?php echo $pegawai->kec ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="nip">No. Sertifikat Pendidik</label>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="text" name="noserdik" id="noserdik" class="form-control" placeholder="Masukkan No Sertifikat Pendidik" value="<?php echo $pegawai->noserdik ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tpt_lhr">Tempat Tanggal Lahir</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="tpt_lhr" id="tpt_lhr" class="form-control" value="<?php echo $pegawai->tpt_lhr ?>">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_lhr" id="tgl_lhr" class="form-control" value="<?php echo $pegawai->tgl_lhr ?>">
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
                            <label for="agama">Agama</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" name="agama" id="agama">
                                <?php foreach ($agama as $ag) : ?>
                                    <?php if ($ag == $pegawai->agama) : ?>
                                        <option value="<?php echo $ag; ?>" selected><?php echo $ag; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $ag; ?>"><?php echo $ag; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="gol_darah">Golongan Darah</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" name="gol_darah" id="gol_darah">
                                <?php foreach ($gol_darah as $gd) : ?>
                                    <?php if ($gd == $pegawai->gol_darah) : ?>
                                        <option value="<?php echo $gd; ?>" selected><?php echo $gd; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $gd; ?>"><?php echo $gd; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="stts_pnkh">Status Pernikahan</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" name="stts_pnkh" id="stts_pnkh">
                                <?php foreach ($stts_pnkh as $st_pn) : ?>
                                    <?php if ($st_pn == $pegawai->stts_pnkh) : ?>
                                        <option value="<?php echo $st_pn; ?>" selected><?php echo $st_pn; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $st_pn; ?>"><?php echo $st_pn; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="stts_kpgw">Status Kepegawaian</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" name="stts_kpgw" id="stts_kpgw">
                                <?php foreach ($stts_kpgw as $st_kp) : ?>
                                    <?php if ($st_kp == $pegawai->stts_kpgw) : ?>
                                        <option value="<?php echo $st_kp; ?>" selected><?php echo $st_kp; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $st_kp; ?>"><?php echo $st_kp; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="no_hp">No. HP</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $pegawai->no_hp ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $pegawai->email ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $pegawai->alamat ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tgl_msk">Tanggal Masuk</label>
                        </div>
                        <div class="col-md-7">
                            <input type="date" name="tgl_msk" id="tgl_msk" class="form-control" value="<?php echo $pegawai->tgl_msk ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right">
                            <label for="tgl_knk_pkt">Tanggal Kenaikan Pangkat</label>
                        </div>
                        <div class="col-md-7">
                            <input type="date" name="tgl_knk_pkt" id="tgl_knk_pkt" class="form-control" value="<?php echo $pegawai->tgl_knk_pkt ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tgl_knk_gj">Tanggal Kenaikan Gaji</label>
                        </div>
                        <div class="col-md-7">
                            <input type="date" name="tgl_knk_gj" id="tgl_knk_gj" class="form-control" value="<?php echo $pegawai->tgl_knk_gj ?>">
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="foto">Ganti Foto</label><br>
                        </div>
                        <div class="col-md-7">
                            <img src="<?php echo base_url(); ?>upload/<?php echo $pegawai->foto; ?>" alt="" width="110" height="120" class="mb-3">
                            <input type="file" name="foto" id="foto" class="form-control" value="<?php echo $pegawai->foto; ?>">
                        </div>
                    </div>
                </div> -->
        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('supervisor/data_pegawai'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" name="ubah" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
        </div>

        </form>
    </div>



</div>

</div>
<!-- End of Main Content -->
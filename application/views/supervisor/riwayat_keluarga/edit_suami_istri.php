<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>EDIT SUAMI/ISTRI</strong></h6>
        <div class="card-body">
            <form action="" method="post">

                <input type="hidden" name="id_suami_istri" value="<?php echo $suami_istri->id_suami_istri ?>">

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pegawai">ID Pegawai</label>
                        </div>
                        <div class="col-md-7">
                            <input readonly type="text" name="id_pegawai" id="id_pegawai" class="form-control" value="<?php echo $suami_istri->id_pegawai ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="nik">NIK</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nik" id="nik" class="form-control" value="<?php echo $suami_istri->nik ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $suami_istri->nama ?>">
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
                                    <input type="text" name="tpt_lhr" id="tpt_lhr" class="form-control" value="<?php echo $suami_istri->tpt_lhr ?>">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_lhr" id="tgl_lhr" class="form-control" value="<?php echo $suami_istri->tgl_lhr ?>">
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
                            <select class="form-control" name="pddk" id="pddk">
                                <?php foreach ($pddk as $pd) : ?>
                                    <?php if ($pd == $suami_istri->pddk) : ?>
                                        <option value="<?php echo $pd; ?>" selected><?php echo $pd; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $pd; ?>"><?php echo $pd; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
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
                            <input type="text" name="pkrj" id="pkrj" class="form-control" value="<?php echo $suami_istri->pkrj ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="stts_hub">Status Hubungan</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" name="stts_hub" id="stts_hub">
                                <?php foreach ($stts_hub as $sh) : ?>
                                    <?php if ($sh == $suami_istri->stts_hub) : ?>
                                        <option value="<?php echo $sh; ?>" selected><?php echo $sh; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $sh; ?>"><?php echo $sh; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
        </div>

        </form>
    </div>

</div>

</div>
<!-- End of Main Content -->
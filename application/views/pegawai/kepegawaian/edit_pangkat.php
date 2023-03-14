<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA PANGKAT</strong></h6>
        <div class="card-body">
        <form action="<?php echo base_url('pegawai/kepegawaian/pangkat/edit/'. $detail->id_pegawai.'/'. $pangkat->id_pangkat) ?>" method="post">

                <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                        <input type="text" name="id_pegawai" class="form-control" value="<?php echo $detail->id_pegawai ?>" hidden>
                        <input type="text" name="id_pangkat" class="form-control" value="<?php echo $pangkat->id_pangkat ?>" hidden>                            
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
                            <label for="id_master_golongan">Golongan</label>
                        </div>
                        <div class="col-md-7">
                        <select name="id_master_golongan" class="custom-select">
                            <?php foreach ($master_golongan as $me) : ?>
                                <?php if ($me->id_master_golongan == $pangkat->id_master_golongan) {?>
                                <option value="<?php echo $me->id_master_golongan ?>" selected><?php echo $me->golongan ?></option>
                            <?php }else {?>
                                <option value="<?php echo $me->id_master_golongan ?>"><?php echo $me->golongan ?></option>
                                <?php } ?>
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
                            <?php foreach ($master_golongan as $mg) : ?>
                            <?php if ($mg->id_master_golongan == $pangkat->id_master_golongan) {?>
                            <option value="<?php echo $mg->id_master_golongan ?>" selected><?php echo $mg->pangkat ?></option>
                            <?php }else {?>
                            <option value="<?php echo $mg->id_master_golongan ?>"><?php echo $mg->pangkat ?></option>
                            <?php } ?>
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
                                <input type="date" name="tmt_pkt" id="tmt_pkt" class="form-control" value="<?php echo $pangkat->tmt_pkt  ?>">
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
                            <input type="text" name="pjb_pgs_pkt" id="pjb_pgs_pkt" class="form-control" placeholder="Masukkan Nama Pejabat" value="<? echo $pangkat->pjb_pgs_pkt ?>">
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
                                    <input type="text" name="no_sk_pkt" id="no_sk_pkt" class="form-control" placeholder="Masukkan No. SK" value="<? echo $pangkat->no_sk_pkt ?>">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_sk_pkt" id="tgl_sk_pkt" class="form-control" value="<? echo $pangkat->tgl_sk_pkt?>">
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
            <a href="<?php echo base_url('pegawai/dashboard'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>

        </form>
    </div>

</div>

</div>
<!-- End of Main Content -->
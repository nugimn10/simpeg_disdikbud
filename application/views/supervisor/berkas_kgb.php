<div class="content-wrapper">
    <section class="content">

        <div class="row justify-content-md-center">
            <div class="col-md-10">

                <div class="accordion" id="bagian1">

                    <div class="card">
                        <h6 class="card-header" id="header1">
                            <button class="btn btn-link" data-toggle="" data-target="#collapse1">
                                <strong>Pemeriksaan Berkas Kelengkapan Kenaikan Gaji</strong>
                            </button>
                        </h6>
                        <div id="collapse1" class="collapse show" aria-labelledby="header1" data-parent="#bagian1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="berkas_kp-tab" data-toggle="tab" href="#berkas_kp" role="tab" aria-controls="berkas_kp" aria-selected="true">Berkas Kelengkapan</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="berkas_kp" role="tabpanel" aria-labelledby="berkas_kp-tab">
                                    <div class="card-body">
                                    <div class="row text-left">
                                            <div class="col-md-8">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th width="40%">JENIS BERKAS</th>
                                                        <th width="10%">FILE</th>
                                                        <!-- <th width="5%">ANGKA</th> -->
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php 
                                                    foreach ($kelengkapan as $klkn) : ?>
                                                    <?php if ($klkn->berkas_id > 100) {?>
                                                        <tr>
                                                            <td><?php echo $klkn->nd ?></td>
                                                            <td>
                                                                <!-- <a href="<?php echo base_url(); ?>supervisor/kenaikan_pangkat/download/<?php echo $klkn->id_kelengkapan; ?>" target="_blank">Download</a> -->
                                                                <a class="btn btn-primary" href="<?=base_url('./upload/kgb/'.$klkn->dokumen)?>" target="_blank">Periksa</a>                                            
                                                            </td>
                                                            <!-- <td> -->
                                                            <?php echo form_open_multipart('supervisor/kenaikan_gaji/btl/'. $detail->id_pegawai);?>
                                                                <input id="<?php echo $klkn->id_kelengkapan;?>" name="<?php echo $klkn->id_kelengkapan;?>" type="hidden"  value="<?php echo $klkn->nilai ?>"></input> 
                                                            <!-- </td> -->
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                    <?php endforeach; ?> 
                                                    
                                            <?php echo form_close();?>
                                                </tbody>
                                            </table>
                                                    <!-- <p align="right"><button type="submit" class="btn btn-primary">Lanjutkan Ke Verifikator</button></p>        -->
                                                    
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card  text-center" style="width: 18rem;">
                                                    <div class="card-header text-center">
                                                        <h4><strong>PROFILE</strong></h4>
                                                    </div>
                                                    <!-- <img src="<?php echo base_url(); ?>upload/<?php echo $detail->foto; ?>" class="rounded mx-auto d-block mt-2" width="180" height="200" alt="..."> -->
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $detail->nm_pegawai ?></h5>
                                                        <h6 class="card-title"><?php echo $detail->nip ?></h6>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-2 text-left"><i class="fas fa-sm fa-phone"></i></div>
                                                                <div class="col-md-10 text-right"><?php echo $detail->no_hp ?></div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-2 text-left"><i class="fas fa-sm fa-envelope"></i></div>
                                                                <div class="col-md-10 text-right"><?php echo $detail->email ?></div>
                                                            </div>
                                                        </li>
                            
                                                    </ul>
                                                </div>
                                            </div>

                                            
                                            <!--Material textarea-->
                                            <?php echo form_open_multipart('supervisor/kenaikan_gaji/btl/'. $detail->id_pegawai);?>
                                            <?php echo form_open_multipart('supervisor/kenaikan_gaji/');?>
                                            <div class="md-form">
                                                <p>Catatan Untuk Pegawai :</p>
                                                <textarea name="notes" class="md-textarea form-control" rows="4" cols=100%></textarea>
                                            </div>
                                                    <p align="center"> <br> <?php if ( $detail->stts_knk_gj >= 1 ){?>
                                                        <!-- <a href="<?php echo base_url('supervisor/kenaikan_pangkat/tolak/'. $detail->id_pegawai); ?>" class="btn btn-danger">TMS</a>  -->
                                                        <!-- <a href="<?php echo base_url('supervisor/kenaikan_gaji/btl/'. $detail->id_pegawai); ?>" class="btn btn-warning">BTL</a>      -->
                                                        
                                                        
                                                        <button type="submit" class="btn btn-warning" name="btl" value="y">BTL</button>
                                                        <a href="" class="btn btn-success"  data-toggle="modal" data-target="#buat_nomor_surat">Selesai</a>      
                                                    <?php } ?></p> 
                                                    
                                            <?php echo form_close();?>
                                            <?php echo form_close();?>
                                            </div>                                     
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="<?php echo base_url('supervisor/kenaikan_gaji/'); ?>" class="btn btn-sm btn-danger"><i class=" fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

    </section>
</div>

</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="buat_nomor_surat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Penetapan Angka Kredit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p style="color: red;"> *) surat yang sudah dibuat tidak dapat di ubah</p>
                <form action="<?php echo base_url('supervisor/kenaikan_gaji/selesai/'. $detail->id_pegawai); ?>" method="post">

                    <div class="form-group">
                        <label for="nm_jabatan">Nomor Surat</label>
                        <input type="text" name="nmr_surat" id="nmr_surat" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2 text-left mt-2">
                                <label for="">Tanggal Berlaku</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                        <input type="date" name="t_berlaku" id="t_berlaku" class="form-control">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2 text-left mt-2">
                                <label for="">GP Lama</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                    <input type="number" name="gp_lama" id="gp_lama" class="form-control">
                                    </div>
                                    <div class="col-md-2 text-right mt-2">
                                    <label for="">GP Baru</label>
                                    </div>
                                    <div class="col-md-5 input-group">
                                        <input type="number" name="gp_baru" id="gp_baru" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div></br>

                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2 text-left mt-2">
                                <label for="">No Dasar Surat GP Lama</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                    <input type="text" name="no_ds_gplama" id="no_ds_gplama" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                        </div></br>
                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2 text-left mt-2">
                                <label for="">Kepala Dinas</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                    <input type="text" name="nm_kadis" id="nm_kadis" class="form-control">
                                    </div>
                                    <div class="col-md-2 text-right mt-2">
                                    <label for="">NIP</label>
                                    </div>
                                    <div class="col-md-5 input-group">
                                        <input type="text" name="nip_kadis" id="nip_kadis" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2.5 text-left mt-2">
                                <label for="">Pangkat/Golongan  </label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-row">
                                    <div class="col-md-7 input-group">
                                    <input type="text" name="pnkt" id="pnkt" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Selesai</button>
            </div>
            </form>
        </div>
    </div>
</div>
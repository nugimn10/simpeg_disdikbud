<div class="content-wrapper">
    <section class="content">

        <div class="row justify-content-md-center">
            <div class="col-md-10">

                <div class="accordion" id="bagian1">

                    <div class="card">
                        <h6 class="card-header" id="header1">
                            <button class="btn btn-link" data-toggle="" data-target="#collapse1">
                                <strong>Pemeriksaan Berkas Kelengkapan Kenaikan Pangkat</strong>
                            </button>
                        </h6>
                        <div id="collapse1" class="collapse show" aria-labelledby="header1" data-parent="#bagian1">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="berkas_kp-tab" data-toggle="tab" href="#berkas_kp" role="tab" aria-controls="berkas_kp" aria-selected="true">Berkas Kelengkapan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="angka-tab" data-toggle="tab" href="#angka" role="tab" aria-controls="angka" aria-selected="true">Angka Kredit</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="berkas_kp" role="tabpanel" aria-labelledby="berkas_kp-tab">
                                    <div class="card-body">
                                    <div class="row text-left">
                                        <div class="col-md-7">
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
                                                        <tr>
                                                            <td><?php echo $klkn->nd ?></td>
                                                            <td>
                                                                <!-- <a href="<?php echo base_url(); ?>supervisor/kenaikan_pangkat/download/<?php echo $klkn->id_kelengkapan; ?>" target="_blank">Download</a> -->
                                                                
                                                                <a class="btn btn-primary" href="<?=base_url('./upload/'.$klkn->dokumen)?>" target="_blank">Periksa</a>
                                                                <!--<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />-->
  <label class="form-check-label" for="inlineCheckbox2"></label>                                           
                                                            </td>
                                                            <!-- <td> -->
                                                            <?php echo form_open_multipart('verifikator/kenaikan_pangkat/teruskan/'. $detail->id_pegawai);?>
                                                                <input id="<?php echo $klkn->id_kelengkapan;?>" name="<?php echo $klkn->id_kelengkapan;?>" type="hidden"  value="<?php echo $klkn->nilai ?>"></input> 
                                                            <!-- </td> -->
                                                        </tr>
                                                    <?php endforeach; ?> 
                                                </tbody>
                                            </table>
                                            <p align="right"><button type="submit" class="btn btn-primary">Teruskan Ke Supervisor</button></p>       
                                            <?php echo form_close();?>
                                            </div>
                                            <div class="col-md-5">
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
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-2 text-left"><i class="fas fa-clipboard-list"></i></div>
                                                                <div class="col-md-10 text-right">
                                                                    <?php if ($detail->stts_knk_pkt == 0 ){?>
                                                                        <button type="button" class="btn">Belum Mengajukan</button>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 1) {?>
                                                                        <button type="button" class="btn btn-warning">Pemeriksaan Supervisor</button>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 2) {?>
                                                                        <button type="button" class="btn btn-warning">Pemeriksaan Verifikator</button>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 3) {?>
                                                                        <button type="button" class="btn btn-success">Disetujui</button>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 4){?>
                                                                        <button type="button" class="btn btn-danger">Ditolak</button>
                                                                        <?php } ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php 
                                                            $date1 = new DateTime($detail->tgl_knk_pkt);
                                                            $date2 = new DateTime('now');
                                                            $interval = $date1->diff($date2);
                                                            //  echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days " . $interval->days . " days "; 
                                                        ?>
                                                                
                                                        <?php if ($interval->y > 3) {?> 
                                                            <?php if ($detail->stts_knk_pkt == 0){?> 
                                                                    <li class="list-group-item">
                                                                        <div class="row">
                                                                        <div class="col-md-2 text-left"><i class="fas fa-clipboard-list"></i></div>    
                                                                        <div class="col-md-10 text-right"><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_master_jabatan">Ajukan Kenaikan Pangkat</button>                                                           
                                                                        </div>
                                                                        </div>
                                                                    </li>       
                                                            <?php } else {?>
                                                                    <?php echo ""?>        
                                                            <?php }?>
                                                        <?php } else {?>
                                                                    <li class="list-group-item">
                                                                        <div class="row">
                                                                        <div class="col-md-2 text-left"><i class="fas fa-clipboard-list"></i></div>    
                                                                        <div class="col-md-10 text-right"><a href="" class="btn btn-sm btn-primary"><i class="fas fa-sm "></i> Belum Bisa Mengajukan Kenaikan Pangkat</a>                                                           
                                                                        </div>
                                                                        </div>
                                                                    </li>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="angka" role="tabpanel" aria-labelledby="angka-tab">
                                    <div class="card-body">
                                    <div class="row text-left">
                                            <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th width="40%">UNSUR</th>
                                                        <th width="10%">ANGKA KREDIT LAMA</th>
                                                        <th width="5%">ANGKA KREDIT BARU</th>
                                                        <th width="5%">JML</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php 
                                                    foreach ($ak as $angka) : ?>
                                                        <tr>
                                                            <script> 
                                                            $(function () {
                                                                $("#akl<?php echo $angka->id_pak;?>, #akb<?php echo $angka->id_pak;?>").keyup(function () {
                                                                    $("#jml<?php echo $angka->id_pak;?>").val(+$("#akl<?php echo $angka->id_pak;?>").val() + +$("#akb<?php echo $angka->id_pak;?>").val());
                                                                });
                                                            }); 
                                                            </script>
                                                            <td><?php echo $angka->unsur ?>
                                                            <?php echo form_open_multipart('verifikator/kenaikan_pangkat/teruskan/'. $detail->id_pegawai);?>
                                                                <input id="unsur<?php echo $angka->id_pak;?>" name="unsur<?php echo $angka->id_pak;?>" type="hidden"  value="<?php echo $angka->unsur ?>"></input> 
                                                            </td>
                                                            <td>
                                                            <?php echo form_open_multipart('verifikator/kenaikan_pangkat/teruskan/'. $detail->id_pegawai);?>
                                                                <input id="akl<?php echo $angka->id_pak;?>" name="akl<?php echo $angka->id_pak;?>" type="number" value="<?php echo $angka->angka_lama != null ? $angka->angka_lama : '0'; ?>" step="any"></input> 
                                                            </td>
                                                            <td>
                                                            <?php echo form_open_multipart('verifikator/kenaikan_pangkat/teruskan/'. $detail->id_pegawai);?>
                                                                <input id="akb<?php echo $angka->id_pak;?>" name="akb<?php echo $angka->id_pak;?>" type="number"  value="<?php echo $angka->angka_baru != null ? $angka->angka_baru : '0'; ?>" step="any"></input> 
                                                            </td>
                                                            <td>
                                                            <?php
                                                            $ak1 = $angka->angka_lama != null ? $angka->angka_lama : '0.000';
                                                            $ak2 = $angka->angka_baru != null ? $angka->angka_baru : '0.000';
                                                            $jml = $ak1 + $ak2;
                                                            ?>
                                                            <?php echo form_open_multipart('supervisor/kenaikan_pangkat/teruskan/'. $detail->id_pegawai);?>
                                                                <input id="jml<?php echo $angka->id_pak;?>" name="jml<?php echo $angka->id_pak;?>" type="number" value="<?php echo $jml+0.000; ?>" step="any" readonly></input> 
                                                            </td>
                                                            
                                                        </tr>
                                                    <?php endforeach; ?> 
                                                </tbody>
                                            </table>

                                            <p align="center"><button type="submit" class="btn btn-primary">Teruskan Ke Supervisor</button></p>       
                                                    
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

        </div>

        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="<?php echo base_url('supervisor/kenaikan_pangkat/'); ?>" class="btn btn-sm btn-danger"><i class=" fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

    </section>
</div>

</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="tambah_master_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI BERKAS YANG AKAN DIAJUKAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <P style="color:red;">
                *) berkas yang sudah diajukan tidak dapat di ubah
                <br>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Berkas</th>
                    </tr>
                </thead>
                
                <tbody> 
                <?php foreach ($kelengkapan as $klkn) : ?>
                    <tr>
                        <td>
                        <?php echo $klkn->dokumen; ?>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
                <form action="<?php echo base_url('pegawai/kenaikan_pangkat/ajukan/'.$detail->id_pegawai); ?>" method="post">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Ajukan</button>
            </div>
            </form>
        </div>
    </div>
</div>
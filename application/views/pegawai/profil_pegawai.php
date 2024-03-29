<div class="content-wrapper">
    <section class="content">

        <div class="row justify-content-md-center">
            <div class="col-md-10">

                <div class="accordion" id="bagian1">

                    <div class="card">
                        <h6 class="card-header" id="header1">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1">
                                <strong>DETAIL DATA PRIBADI DAN RIWAYAT KELUARGA</strong>
                            </button>
                        </h6>
                        <div id="collapse1" class="collapse show" aria-labelledby="header1" data-parent="#bagian1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="data_diri-tab" data-toggle="tab" href="#data_diri" role="tab" aria-controls="data_diri" aria-selected="true">Data Diri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="suami_istri-tab" data-toggle="tab" href="#suami_istri" role="tab" aria-controls="suami_istri" aria-selected="false">Suami/Istri</a>
                                </li>
                                <?php if ($detail->stts_knk_pkt == 0) { ?>
                                <li class="nav-item">
                                    <a class="nav-item nav-link" id="kelengkapan-tab" data-toggle="tab" href="#kelengkapan" role="tab" aria-controls="kelengkapan" aria-selected="true">Kelengkapan</a>
                                </li>
                                <?php }?>
                                
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="anak-tab" data-toggle="tab" href="#anak" role="tab" aria-controls="anak" aria-selected="false">Anak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orangtua-tab" data-toggle="tab" href="#orangtua" role="tab" aria-controls="orangtua" aria-selected="false">Orang Tua</a>
                                </li> -->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="data_diri" role="tabpanel" aria-labelledby="data_diri-tab">
                                    <div class="card-body">
                                    <P style="color:red;">*) pastikan anda sudah melengkapi data diri sebelum mengajukan kenaikan pangkat</p>
                                    <?php $current = date("Y-m-d"); ?>
                                    <?php foreach ($berkas as $mb) : ?>
                                        <?php if ($mb->id_berkas == 1 && $mb->tgl_mulai <= $current &&  $mb->tgl_selesai >= $current) {?> 
                                            <P style="color:red;">*) Masa pengajuan kenaikan pangkat dari tanggal <?php echo date("d/m/Y", strtotime($mb->tgl_mulai) ) ?> s/d <?php echo date("d/m/Y", strtotime($mb->tgl_selesai))?> </p>
                                            <?php break ?>
                                            <?php } else {?>
                                            <P style="color:red;">*) Masa pengajuan kenaikan pangkat telah berakhir per tanggal <?php echo date("d/m/Y", strtotime($mb->tgl_selesai) ); ?> </p>
                                            <?php break ?>    
                                        <?php }?>
                                        
                                    <?php endforeach;?>
                                    <div class="col-md-10 text-left"><a href="<?php echo base_url('pegawai/profil_pegawai/edit/'. $detail->id_pegawai); ?>" class="btn btn-sm btn-primary"><i></i>Update</a></div>
                                   
                                    <div class="row justify-content-center">
                                            <div class="col-md-7">
                                                <table class="table table-borderless">
                                                    <tr>
                                                        <th class="text-right">Nama Pegawai</th>
                                                        <td>: <?php echo $detail->nm_pegawai ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Jenis Kelamin</th>
                                                        <td>: <?php echo $detail->jk ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Jenis Guru</th>
                                                        <td>: <?php echo $detail->jg ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Tugas Mengajar</th>
                                                        <td>: <?php echo $detail->tm ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Unit Kerja</th>
                                                        <td>: <?php echo $detail->uk ?></td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <th class="text-right">Kecamatan</th>
                                                        <td>: <?php echo $detail->kec ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">No Sertifikat Pendidik</th>
                                                        <td>: <?php echo $detail->noserdik ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th class="text-right">No Seri Karpeg</th>
                                                        <td>: <?php echo $detail->nokarpeg ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">NIP</th>
                                                        <td>: <?php echo $detail->nip ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">NIK</th>
                                                        <td>: <?php echo $detail->nik ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">NUPTK</th>
                                                        <td>: <?php echo $detail->nuptk ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Tempat, Tanggal Lahir</th>
                                                        <td>: <?php
                                                        $timestamp = strtotime($detail->tgl_lhr);
                                                        $new_date = date("d-m-Y", $timestamp);

                                                         if ($detail->tpt_lhr == null) echo ""; else  echo $detail->tpt_lhr ?>, <?php if ($detail->tgl_lhr == null) echo ""; else echo $new_date ?></td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <th class="text-right">Tahun Pensiun</th>
                                                        <?php if ($detail->tgl_lhr != null) {
                                                            $t = strtotime($detail->tgl_lhr);
                                                            $thn_pensiun = strtotime('+58 years', $t);?>
                                                            <td>: <?php echo date('Y-m-d',$thn_pensiun) ?></td>
                                                        <?php } else {?>
                                                            <td>:</td>
                                                            <?php }?>
                                                    </tr> -->
                                                    <tr>
                                                        <th class="text-right">Agama</th>
                                                        <td>: <?php if ($detail->agama == null) echo ""; else echo $detail->agama ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Golongan Darah</th>
                                                        <td>: <?php if ($detail->gol_darah == null) echo "";else  echo $detail->gol_darah ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Status Pernikahan</th>
                                                        <td>: <?php if ($detail->stts_pnkh == null) echo ""; else echo $detail->stts_pnkh ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Status Kepegawaian</th>
                                                        <td>: <?php echo $detail->stts_kpgw ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Alamat</th>
                                                        <td>: <?php if ($detail->alamat == null) echo ""; else echo $detail->alamat ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Tanggal Masuk</th>
                                                        <td>: <?php
                                                        $timestamp = strtotime($detail->tgl_msk);
                                                        $new_date = date("d-m-Y", $timestamp);
                                                        if ($detail->tgl_msk == null) echo ""; else echo $new_date ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">TMT Pangkat Terakhir</th>
                                                        <td>: <?php 
                                                        $timestamp = strtotime($detail->tgl_knk_pkt);
                                                        $new_date = date("d-m-Y", $timestamp);
                                                        if ($detail->tgl_knk_pkt == null) echo ""; else echo $new_date ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">TMT Gaji Berkala Terakhir</th>
                                                        <td>: <?php 
                                                        $timestamp = strtotime($detail->tgl_knk_gj);
                                                        $new_date = date("d-m-Y", $timestamp);

                                                        if ($detail->tgl_knk_gj == null) echo ""; else echo $new_date ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">TMT Gaji Berkala Berikutnya</th>
                                                        <?php if ($detail->tgl_knk_gj != null) {
                                                            $t = strtotime($detail->tgl_knk_gj);
                                                            $tgk_knk_gj_berikut = strtotime('+2 years', $t);?>
                                                            <td>: <?php echo date('d-m-Y',$tgk_knk_gj_berikut) ?></td>
                                                        <?php } else {?>
                                                            <td>:</td>
                                                        <?php }?>
                                                    </tr>

                                                </table>
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
                                                                        <button type="button" class="btn btn-success">Dapat Dipertimbangkan</button>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 9){?>
                                                                        <a class="btn btn-danger" href="<?php echo base_url('pegawai/kenaikan_pangkat/tms/'.$detail->id_pegawai); ?>">Tidak Memenuhi Syarat</a><br><p></p>
                                                                        <textarea id="catatan" name="catatan" row="5" col="100%" class="md-textarea form-control"  style="background-color:green;color:#fff;" disabled><?php echo $detail->catatan; ?></textarea>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 4){?>
                                                                        <a class="btn btn-warning" href="<?php echo base_url('pegawai/kenaikan_pangkat/btl/'.$detail->id_pegawai); ?>">Berkas Tidak Lengkap</a><br><p></p>
                                                                        <textarea id="catatan" name="catatan" row="5" col="100%" class="md-textarea form-control"  style="background-color:green;color:#fff;" disabled><?php echo $detail->catatan; ?></textarea>
                                                                        <?php } else if ( $detail->stts_knk_pkt == 5) {?>
                                                                        <!--<a class="btn btn-primary" href="<?php echo base_url('pegawai/kenaikan_pangkat/pak/'.$detail->id_pegawai); ?>">Unduh PAK</a>-->
                                                                        <button type="button" class="btn btn-success">Selesai</button>
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
                                                        <?php foreach ($berkas as $mb) : ?>
                                                        <?php if ($interval->y >= 3 && $mb->id_berkas == 1 && $mb->tgl_mulai <= $current &&  $mb->tgl_selesai >= $current) {?> 
                                                            <?php if ($detail->stts_knk_pkt == 0){?> 
                                                                    <li class="list-group-item">
                                                                        <div class="row">
                                                                        <div class="col-md-2 text-left"><i class="fas fa-clipboard-list"></i></div>    
                                                                        <div class="col-md-10 text-right"><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_master_jabatan">Ajukan Kenaikan Pangkat</button>                                                           
                                                                        </div>
                                                                        </div>
                                                                    </li>   
                                                                    
                                                            <?php break ?>    
                                                            <?php }  else {?>
                                                                    <?php echo ""?>        
                                                                    
                                                            <?php break ?>    
                                                            <?php }?>
                                                            
                                                        <?php } else {?>
                                                                    <li class="list-group-item">
                                                                        <div class="row">
                                                                        <div class="col-md-2 text-left"><i class="fas fa-clipboard-list"></i></div>    
                                                                        <div class="col-md-10 text-right"><a href="" class="btn btn-sm btn-primary"><i class="fas fa-sm "></i> Belum Bisa Mengajukan Kenaikan Pangkat</a>                                 
                                                                        </div>
                                                                        </div>
                                                                    </li>
                                                                    
                                                            <?php break ?>    
                                                        <?php }?>
                                                        
                                                            <?php endforeach;?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="suami_istri" role="tabpanel" aria-labelledby="suami_istri-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>NIK</th>
                                                        <th>NAMA</th>
                                                        <th>TTL</th>
                                                        <th>PENDIDIKAN</th>
                                                        <th>PEKERJAAN</th>
                                                        <th>STATUS HUBUNGAN</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($suami_istri as $si) : ?>
                                                        <tr>
                                                            <td><?php echo $si->nik ?></td>
                                                            <td><?php echo $si->nama ?></td>
                                                            <td><?php echo $si->tpt_lhr ?>, <?php echo $si->tgl_lhr ?></td>
                                                            <td><?php echo $si->pddk ?></td>
                                                            <td><?php echo $si->pkrj ?></td>
                                                            <td><?php echo $si->stts_hub ?></td>
                                                            <td style="width:150px;">

                                                                <?php echo anchor('admin/riwayat_keluarga/data_suami_istri/edit/' . $si->id_suami_istri, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>') ?>

                                                                <?php echo anchor('admin/riwayat_keluarga/data_suami_istri/hapus/' . $si->id_suami_istri, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></button>') ?>

                                                            </td>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="kelengkapan" role="tabpanel" aria-labelledby="kelengkapan-tab">
                                    <div class="card-body">
                                    <P style="color:red;">*) jika dokumen tidak berubah saat diupload silahkan bersihkan chached image and file terlebih dahulu
                                    <br >*) bagi yang pertama kali mengajukan kenaikan pangkat SK_CPNS, SK_PNS, dan STTL_PRAJABATAN harus di isi </p>
                                    <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>JENIS BERKAS</th>
                                                        <th>FILE</th>
                                                    </tr>
                                                </thead>
                                                <?php if ($detail->stts_knk_pkt){

                                                }?>
                                                <tbody>
                                                    <?php 
                                                    foreach ($berkas as $bks) : ?>
                                                        <tr>
                                                            <td><?php echo $bks->nb ?></td>
                                                            <td>
                                                                <?php echo form_open_multipart('pegawai/profil_pegawai/upload_dokumen/'. $detail->id_pegawai.'/'.$bks->id_berkas);?>
                                                                <input id="berkas<?php echo $bks->id_berkas;?>" name="berkas<?php echo $bks->id_berkas;?>" type="file"  accept=".doc,.docs,.pdf"  value=""></input>
                                                                <?php echo form_close();?>
                                                                
                                                            </td>
                                                        </tr>
                                                        <?php foreach ($kelengkapan as $klkn) : ?>
                                                            <?php if($klkn->berkas_id == $bks->id_berkas) { ?>
                                                                
                                                                <script>
                                                                   
                                                                $(document).ready(function() {
                                                                    var urlData = "<?php echo base_url(); ?>upload/<?php echo $klkn->dokumen; ?>";
                                                                    $("#berkas<?php echo $klkn->berkas_id;?>").fileinput({ 
                                                                        uploadUrl: "<?php echo base_url('pegawai/profil_pegawai/upload_dokumen/'. $detail->id_pegawai.'/'.$bks->id_berkas); ?>",
                                                                        deleteUrl:"<?php echo base_url('pegawai/profil_pegawai/hapus_dokumen/'.$klkn->id_kelengkapan); ?>",
                                                                        theme: 'explorer-fas',
                                                                        showCaption: false, 
                                                                        showRemove: false,
                                                                        showUpload: false,
                                                                        showBrowse: true,
                                                                        showDownload: true,
                                                                        maxFileCount: 1,
                                                                        dropZoneEnabled: false,
                                                                        browseOnZoneClick: false,
                                                                        preferIconicPreview: false,
                                                                        pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
                                                                        overwriteInitial: true,
                                                                        initialPreviewAsData: true,
                                                                        initialPreview: urlData,
                                                                        initialPreviewConfig: [
                                                                            {type: 'pdf', description: "<h5>PDF File One</h5> This is a representative placeholder description number one for this PDF file.", width: "100px"}
                                                                        ]
                                                                    });});

                                                                    </script>

                                                                <?php } ?>
                                                                <?php endforeach;?>
                                                                    
                                                                <script>
                                                                     $(document).ready(function() {
                                                                        $("#berkas<?php echo $bks->id_berkas;?>").fileinput({ 
                                                                            uploadUrl: "<?php echo base_url('pegawai/profil_pegawai/upload_dokumen/'. $detail->id_pegawai.'/'.$bks->id_berkas); ?>",
                                                                            deleteUrl:"",  
                                                                            showCaption: false, 
                                                                            showRemove: false,
                                                                            showUpload: false,
                                                                            showBrowse: true,
                                                                            dropZoneEnabled: false,
                                                                            browseOnZoneClick: false,
                                                                            pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
                                                                            overwriteInitial: true,
                                                                            initialPreviewAsData: true,
                                                                            initialPreview: '',
                                                                            initialPreviewConfig: [
                                                                                {type: 'pdf', description: "<h5>PDF File One</h5> This is a representative placeholder description number one for this PDF file."}
                                                                            ]
                                                                        });});
                                                                </script>
                                                    <?php endforeach; ?> 
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h6 class="card-header" id="header3">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3">
                                <strong>DETAIL DATA KEPEGAWAIAN</strong>
                            </button>
                        </h6>
                        <div id="collapse3" class="collapse show" aria-labelledby="header3" data-parent="#bagian1">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-jabatan-tab" data-toggle="tab" href="#nav-jabatan" role="tab" aria-controls="nav-jabatan" aria-selected="true">Jabatan</a>
                                    <a class="nav-item nav-link" id="nav-pangkat-tab" data-toggle="tab" href="#nav-pangkat" role="tab" aria-controls="nav-pangkat" aria-selected="false">Pangkat</a>
                                    <a class="nav-item nav-link" id="sekolah-tab" data-toggle="tab" href="#sekolah" role="tab" aria-controls="sekolah" aria-selected="true">Pendidikan</a>
                                    <a class="nav-item nav-link" id="nav-mutasi-tab" data-toggle="tab" href="#nav-mutasi" role="tab" aria-controls="nav-mutasi" aria-selected="false">Mutasi</a>
                                    <a class="nav-item nav-link" id="diklat-tab" data-toggle="tab" href="#diklat" role="tab" aria-controls="diklat" aria-selected="true">Diklat</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-jabatan" role="tabpanel" aria-labelledby="nav-jabatan-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>JABATAN</th>
                                                        <!-- <th>JENIS GURU</th> -->
                                                        <th>JENIS PTK</th>
                                                        <th>NO. SK</th>
                                                        <th>TANGGAL SK</th>
                                                        <!--<th>AWAL MASA JBT</th>-->
                                                        <!--<th>AKHIR MASA JBT</th>-->
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($jabatan as $jbt) : ?>
                                                        <tr>
                                                            <td><?php echo $jbt->nm_jabatan ?></td>
                                                            <!-- <td><?php echo $jbt->id_master_jabatan ?></td> -->
                                                            <td><?php echo $jbt->jenis_jbt ?></td>
                                                            <td><?php echo $jbt->no_sk_jbt ?></td>
                                                            <td><?php echo date('d-m-Y', strtotime($jbt->tgl_sk_jbt)); ?></td>
                                                            <!--<td><?php echo date('d-m-Y', strtotime($jbt->awal_masa_jbt)); ?></td>-->
                                                            <!--<td><?php  echo date('d-m-Y', strtotime($jbt->akhir_masa_jbt)); ?></td>-->
                                                            <td style="width:150px;">
                                                            <?php echo anchor('pegawai/kepegawaian/jabatan/edit/' . $detail->id_pegawai.'/'. $jbt->id_jabatan, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>') ?>

                                                            <?php echo anchor('pegawai/kepegawaian/jabatan/hapus/' . $detail->id_pegawai.'/'.  $jbt->id_jabatan, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></button>') ?>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-pangkat" role="tabpanel" aria-labelledby="nav-pangkat-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>GOLONGAN</th>
                                                        <th>PANGKAT</th>
                                                        <th>TMT PANGKAT</th>
                                                        <th>PEJABAT PENGESAH SK</th>
                                                        <th>NO. SK</th>
                                                        <th>TANGGAL SK</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($pangkat as $pkt) : ?>
                                                        <tr>
                                                            <td><?php echo $pkt->golongan ?></td>
                                                            <td><?php echo $pkt->pangkat ?></td>
                                                            <td><?php echo date('d-m-Y', strtotime($pkt->tmt_pkt)); ?></td>
                                                            <td><?php echo $pkt->pjb_pgs_pkt ?></td>
                                                            <td><?php echo $pkt->no_sk_pkt ?></td>
                                                            <td><?php echo date('d-m-Y', strtotime($pkt->tgl_sk_pkt)) ?></td>
                                                            <td style="width:150px;">
                                                            <?php echo anchor('pegawai/kepegawaian/pangkat/edit/' . $detail->id_pegawai.'/'. $pkt->id_pangkat, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>') ?>

                                                            <?php echo anchor('pegawai/kepegawaian/pangkat/hapus/' . $detail->id_pegawai.'/'.  $pkt->id_pangkat, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></button>') ?>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sekolah" role="tabpanel" aria-labelledby="sekolah-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>TINGKAT</th>
                                                        <th>NAMA SEKOLAH/UNIV</th>
                                                        <th>LOKASI</th>
                                                        <th>JURUSAN</th>
                                                        <th>NO. IJAZAH</th>
                                                        <th>TANGGAL IJAZAH</th>
                                                        <th>NAMA KASEK/REKTOR</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($sekolah as $skl) : ?>
                                                        <tr>
                                                            <td><?php echo $skl->tingkat ?></td>
                                                            <td><?php echo $skl->nm_skl_uv ?></td>
                                                            <td><?php echo $skl->lokasi ?></td>
                                                            <td><?php echo $skl->jurusan ?></td>
                                                            <td><?php echo $skl->no_ijz ?></td>
                                                            <td><?php echo date('d-m-Y', strtotime($skl->tgl_ijz)); ?></td>
                                                            <td><?php echo $skl->nm_ks_rk ?></td>
                                                            <td style="width:150px;">
                                                            <?php echo anchor('pegawai/riwayat_pendidikan/sekolah/edit/' . $detail->id_pegawai.'/'. $skl->id_sekolah, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>') ?>

                                                            <?php echo anchor('pegawai/riwayat_pendidikan/sekolah/hapus/' . $detail->id_pegawai.'/'.  $skl->id_sekolah, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></button>') ?>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="tab-pane fade" id="diklat" role="tabpanel" aria-labelledby="diklat-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>NAMA DIKLAT</th>
                                                        <th>TEMPAT</th>
                                                        <th>LEMBAGA PENYELENGGARA</th>
                                                        <th>NO. SERI</th>
                                                        <th>JML JAM</th>
                                                        <th>TANGGAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-mutasi" role="tabpanel" aria-labelledby="nav-mutasi-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>JENIS MUTASI</th>
                                                        <th>NO. SK</th>
                                                        <th>TANGGAL MUTASI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($mutasi as $mts) : ?>
                                                        <tr>
                                                            <td><?php echo $mts->jenis_mutasi ?></td>
                                                            <td><?php echo $mts->no_sk_mts ?></td>
                                                            <td><?php echo $mts->tgl_mts ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                            </table>
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
            <!--<div class="col-md-10">-->
            <!--    <a href="<?php echo base_url('admin/data_pegawai/'); ?>" class="btn btn-sm btn-danger"><i class=" fas fa-arrow-left"></i> Kembali</a>-->
            <!--</div>-->
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
                *) berkas yang sudah diajukan tidak dapat diubah
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
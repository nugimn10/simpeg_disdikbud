<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Kenaikan Gaji Berkala </h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->


    <div class="row mt-3">
        <div class="col-md-3 mb-3">
            
            <?php
            $date1 = new DateTime($detail->tgl_knk_gj);
                                                        $date2 = new DateTime('now');
                                                        $interval = $date1->diff($date2);
                                                        //  echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days " . $interval->days . " days "; 
                                                        ?>
                                                        <?php foreach ($master_kgb as $mb) : ?>
                                                            <?php if ($interval->y >= 2 && $mb->id_master_kgb == 101) { ?>
                                                                <?php if ($detail->stts_knk_pkt == 0) { ?>
                                                                        <div class="row">
                                                                            <div class="col-md-10 text-right"><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#buat_kgb">Ajukan Kenaikan Gaji</button>
                                                                            </div>
                                                                        </div>

                                                                    <?php break ?>
                                                                <?php } else { ?>
                                                                    <?php echo "" ?>

                                                                    <?php break ?>
                                                                <?php } ?>

                                                            <?php } else { ?>
                                                                    <div class="row">
                                                                        <div class="col-md-2 text-left"><i class="fas fa-clipboard-list"></i></div>
                                                                        <div class="col-md-10 text-right"><a href="" class="btn btn-sm btn-primary"><i class="fas fa-sm "></i> Belum Bisa Mengajukan Kenaikan Gaji</a>
                                                                        </div>
                                                                    </div>

                                                                <?php break ?>
                                                            <?php } ?>

                                                        <?php endforeach; ?>
        </div>
    </div>

    <div class="table-responsive">
    <!-- <form action="<?php echo site_url('search/search_keyword');?>" method = "post">
        <input type="text" name = "keyword" />
        <input type="submit" value = "Search" />
    </form> -->
        <!-- table -->
        <table id="dataTables" class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA PEGAWAI</th>
                    <th>JENIS KELAMIN</th>
                    <th>UNIT KERJA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            
            
            <tbody>
                <tr><td> Belum Ada Usulan</td></tr>
                </tbody>
        </table>

    </div>

</div>



<div class="modal fade bd-example-modal-lg" id="buat_kgb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Berkas KGB</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url('pegawai/kenaikan_gaji/ajukan/'. $detail->id_pegawai); ?>" method="post">
            <div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>JENIS BERKAS</th>
                                <th>FILE</th>
                            </tr>
                        </thead>
                        <?php if ($detail->stts_knk_pkt) {
                        } ?>
                        <tbody>
                        <?php $date1 = new DateTime($detail->tgl_knk_pkt);
                                                        $date2 = new DateTime('now');
                                                        $interval = $date1->diff($date2); ?>
                            <?php
                            foreach ($master_kgb as $mkgb) : ?>
                                <tr>
                                    <td><?php echo $mkgb->nb ?></td>
                                    <td>
                                        <?php echo form_open_multipart('pegawai/kenaikan_gaji/upload_dokumen/' . $detail->id_pegawai . '/' . $mkgb->id_master_kgb); ?>
                                        <input id="berkas<?php echo $mkgb->id_master_kgb; ?>" name="berkas<?php echo $mkgb->id_master_kgb; ?>" type="file" accept=".doc,.docs,.pdf" value=""></input>
                                        <?php echo form_close(); ?>

                                    </td>
                                </tr>
                                <?php foreach ($kelengkapan as $klkn) : ?>
                                    <?php if ($klkn->berkas_id == $mkgb->id_master_kgb) { ?>

                                        <script>
                                            $(document).ready(function() {
                                                var urlData = "<?php echo base_url(); ?>upload/kgb/<?php echo $klkn->dokumen; ?>";
                                                $("#berkas<?php echo $klkn->berkas_id; ?>").fileinput({
                                                    uploadUrl: "<?php echo base_url('pegawai/kenaikan_gaji/upload_dokumen/' . $detail->id_pegawai . '/' . $mkgb->id_master_kgb); ?>",
                                                    deleteUrl: "<?php echo base_url('pegawai/kenaikan_gaji/hapus_dokumen/' . $klkn->id_kelengkapan); ?>",
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
                                                    initialPreviewConfig: [{
                                                        type: 'pdf',
                                                        description: "<h5>PDF File One</h5> This is a representative placeholder description number one for this PDF file.",
                                                        width: "100px"
                                                    }]
                                                });
                                            });
                                        </script>

                                    <?php } ?>
                                <?php endforeach; ?>

                                <script>
                                    $(document).ready(function() {
                                        $("#berkas<?php echo $mkgb->id_master_kgb; ?>").fileinput({
                                            uploadUrl: "<?php echo base_url('pegawai/kenaikan_gaji/upload_dokumen/' . $detail->id_pegawai . '/' . $mkgb->id_master_kgb); ?>",
                                            deleteUrl: "",
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
                                            initialPreviewConfig: [{
                                                type: 'pdf',
                                                description: "<h5>PDF File One</h5> This is a representative placeholder description number one for this PDF file."
                                            }]
                                        });
                                    });
                                </script>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="form-row justify-content-md-left">
                            <div class="col-md-4 text-left mt-2">
                                <label for="">No Dasar Surat KGB Terakhir</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                    <input type="text" name="nm_kadis" id="nm_kadis" class="form-control">
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


</div>


</div>


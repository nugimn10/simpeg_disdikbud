<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pengajuan Izin</h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->

    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#buat_surat_izin"><i class="fas fa-sm fa-plus"></i> Buat Surat Izin</a>
        </div>
    </div>

   

    <div class="table-responsive">
    <!-- <form action="<?php echo site_url('search/search_keyword');?>" method = "post">
        <input type="text" name = "keyword" />
        <input type="submit" value = "Search" />
    </form> -->
        <!-- table -->
        <table class="table table-bordered" id="dataTables">
            <thead class="thead-light">
                <tr>
                    <th>NIP</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>LAMA IZIN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?php if ($izin != null) echo $detail->nip; else echo "" ?></td>
                        <td style="width: 150px;"><?php if($izin != null) echo $izin->perihal; else echo ""?></td>
                        <td style="width: 45%;"><?php if($izin != null) echo $izin->keterangan; else echo ""?></td>
                        <td style="width: 150px;">
                        <?php if ($izin != null){
                            $date1 = new DateTime($izin->dari_tgl);
                            $date2 = new DateTime($izin->sampai_tgl);
                            $interval = $date1->diff($date2);
                            //  echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days " . $interval->days . " days "; 
                            echo $interval->d." hari ";
                        } else echo "";
                        ?>
                        </td>
                        <td style="width:150px;">
                            <?php if($izin != null && $izin->stts == 1) {?>
                                <a href="<?php echo base_url('pegawai/izin_pegawai/cetak_surat_izin/'.$detail->id_pegawai) ?>"type="submit" class="btn btn-primary">Cetak Surat Izin</a>
                                <?php }?>
                            </td>
                    </tr>
                </tbody>
        </table>

    </div>
</div>
</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="buat_surat_izin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Surat Izin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url('pegawai/izin_pegawai/buat_izin/'. $detail->id_pegawai); ?>" method="post">

                    <div class="form-group">
                        <label for="nm_jabatan">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nm_jabatan">Keterangan</label>
                        <textarea  name="keterangan" id="keterangan" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2 text-left mt-2">
                                <label for="">Untuk Tanggal</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                        <input type="date" name="dari_tgl" id="dari_tgl" class="form-control">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <strong>s.d.</strong>
                                    </div>
                                    <div class="col-md-5 input-group">
                                        <input type="date" name="sampai_tgl" id="sampai_tgl" class="form-control">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nm_jabatan">Berkas</label>
                        <input type="file" name="berkas1" id="berkas1" >
                    </div>
                    <div class="form-group">
                        <label for="nm_jabatan">Berkas</label>
                        <input type="file" name="berkas1" id="berkas1" >
                    </div><div class="form-group">
                        <label for="nm_jabatan">Berkas</label>
                        <input type="file" name="berkas1" id="berkas1" >
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
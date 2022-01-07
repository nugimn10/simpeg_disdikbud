<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">PEGAWAI YANG MENGAJUKAN IZIN</h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->

   

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
            <?php $id=0;
            foreach ($izin as $i) : ?>
                <?php $id = $i->pegawai_id;?>
                <tr>
                        <td><?php if ($izin != null) echo $i->nip; else echo "" ?></td>
                        <td style="width: 150px;"><?php if($i != null) echo $i->perihal; else echo ""?></td>
                        <td style="width: 45%;"><?php if($i != null) echo $i->keterangan; else echo ""?></td>
                        <td style="width: 150px;">
                        <?php if ($izin != null){
                            $date1 = new DateTime($i->dari_tgl);
                            $date2 = new DateTime($i->sampai_tgl);
                            $interval = $date1->diff($date2);
                            //  echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days " . $interval->days . " days "; 
                            echo $interval->d." hari ";
                        } else echo "";
                        ?>
                        </td>
                        <td style="width:150px;">
                        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#konfirmasi"></i> Periksa</button>

                        </td>
                    </tr>
                    <!-- Modal -->
            <?php endforeach ?>
                </tbody>
        </table>

    </div>
</div>
<!-- End of Main Content -->

<div class="modal fade bd-example-modal-lg" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Surat Izin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url('supervisor/izin_pegawai/konfirmasi/'.  $i->pegawai_id); ?>" method="post">
                        <input type="text" name="id_izin" id="id_izin" class="form-control" value="<?php echo $i->id_izin?>" hidden>
                    
                    <div class="form-group">
                        <label for="nm_jabatan">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="form-control" value="<?php echo $i->perihal?>" >
                    </div>
                    <div class="form-group">
                        <label for="nm_jabatan">Keterangan</label>
                        <input  name="keterangan" id="keterangan" class="form-control" value="<?php echo $i->keterangan;?>" >
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row justify-content-md-left">
                            <div class="col-md-2 text-left mt-2">
                                <label for="">Untuk Tanggal</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-md-5 input-group">
                                        <input type="date" name="dari_tgl" id="dari_tgl" class="form-control" value="<?php echo $i->dari_tgl;?>" >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <strong>s.d.</strong>
                                    </div>
                                    <div class="col-md-5 input-group">
                                        <input type="date" name="sampai_tgl" id="sampai_tgl" class="form-control" value="<?php echo $i->dari_tgl;?>" >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Setuju</button>
            </div>
            </form>
        </div>
    </div>
</div>
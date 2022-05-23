<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">WAKTU PENGAJUAN KENAIKAN PANGKAT</h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->

    <!-- <div class="col-md-10 text-left"><a href="<?php echo base_url('pegawai/profil_pegawai/edit/'); ?>" class="btn btn-sm btn-primary"><i></i> TANGGAL PENGAJUAN</a></div> <BR> -->
    <div class="col-md-10 text-right"><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_master_jabatan">TANGGAL PENGAJUAN</button>                                                           
                  
   

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
                    <th>USULAN</th>
                    <th>TANGGAL MULAI</th>
                    <th>TANGGAL SELESAI</th>
                </tr>
            </thead>
            
            
            <tbody>
            <?php $no = 1;
            foreach ($master_berkas as $mb) : ?>
                <?php if ($mb->id_berkas == 1 ) {?>
                    <tr>
                        <td style="width: 40px;"><?php echo $no++ ?></td>
                        <td style="width: 30%;"> BERKAS KENAIKAN PANGKAT</td>
                        <td style="width: 150px;"><?php echo $mb->tgl_mulai ?></td>
                        <td style="width: 150px;"><?php echo $mb->tgl_selesai ?></td>
                    </tr>
                <?php }?>
                <?php endforeach; ?>
                </tbody>
        </table>

    </div>

</div>

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="tambah_master_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PENETAPAN TANGGAL KENAIKAN PANGKAT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/waktu_usulan/tgl_usulan/1'); ?>" method="post">

            <div class="modal-body">
            <P style="color:red;">
                *) pastikan tanggal yang di tetapkan sudah benar
                <br>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Tanggal Mulai </th>
                    <th>Tanggal Selesai </th>
                    </tr>
                </thead>
                <td><input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"></td>
                <td><input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"></td>
                <tbody> 
                </tbody>
            </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
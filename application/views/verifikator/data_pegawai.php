<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">PEGAWAI YANG MENGAJUKAN KENAIKAN PANGKAT</h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->


   

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
            <?php $no = 1;
            foreach ($pegawai as $pgw) : ?>
                <?php if ($pgw->stts_knk_pkt == 2 ) {?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pgw->nip ?></td>
                        <td style="width: 150px;"><?php echo $pgw->nm_pegawai ?></td>
                        <td style="width: 150px;"><?php echo $pgw->jk ?></td>
                        <td><?php echo $pgw->uk ?></td>
                        <td style="width:150px;">

                            <?php echo anchor('verifikator/kenaikan_pangkat/periksa/' . $pgw->id_pegawai, '<button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detail">Periksa</button>') ?>

                        </td>
                    </tr>
                <?php }?>
                <?php endforeach; ?>
                </tbody>
        </table>

    </div>

</div>

</div>
<!-- End of Main Content -->
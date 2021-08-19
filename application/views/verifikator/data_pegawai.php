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
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA PEGAWAI</th>
                    <th>JENIS KELAMIN</th>
                    <th>UNIT KERJA</th>
                    <th>DALAM TAHAP</th>
                    <th colspan="3">AKSI</th>
                </tr>
            </thead>

            <?php $no = 1;
            foreach ($pegawai as $pgw) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pgw->nip ?></td>
                        <td style="width: 150px;"><?php echo $pgw->nm_pegawai ?></td>
                        <td style="width: 150px;"><?php echo $pgw->jk ?></td>
                        <td></td>
                        <td></td>
                        <td style="width:150px;">

                            <?php echo anchor('p' . $pgw->id_pegawai, '<button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detail">Periksa</button>') ?>

                        </td>

                    </tr>
                </tbody>

            <?php endforeach; ?>
        </table>

    </div>

</div>

</div>
<!-- End of Main Content -->
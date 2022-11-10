<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">DATA PEGAWAI</h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->

    <div class="row mt-3">
        <div class="col-md-2 mb-3">
            <a href="<?php echo base_url('admin/data_pegawai/tambah'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-sm fa-plus"></i> Tambah Pegawai</a>
        </div>
        <div class="col-md-2 mb-3">
            <a href="<?php echo base_url('admin/data_pegawai/export'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-sm fa-print"></i> Cetak Excel</a>
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
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA PEGAWAI</th>
                    <th>JENIS KELAMIN</th>
                    <th>UNIT KERJA</th>
                    <th>NO. HP</th>
                    <th>EMAIL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
                
                <tbody>
            <?php $no = 1;
            foreach ($pegawai as $pgw) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pgw->nip ?></td>
                        <td style="width: 150px;"><?php echo $pgw->nm_pegawai ?></td>
                        <td style="width: 150px;"><?php echo $pgw->jk ?></td>
                        <td><?php echo $pgw->uk ?></td>
                        <td><?php echo $pgw->no_hp ?></td>
                        <td style="width: 100px;"><?php echo $pgw->email ?></td>
                        <td style="width:150px;">

                            <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button> -->

                            <?php echo anchor('admin/data_pegawai/detail/' . $pgw->id_pegawai, '<button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-folder-open"></i></button>') ?>

                            <?php echo anchor('admin/data_pegawai/edit/' . $pgw->id_pegawai, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button>') ?>

                            <?php echo anchor('admin/data_pegawai/hapus/' . $pgw->id_pegawai, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></button>') ?>

                            <!-- <a href="<?php echo base_url('admin/data_pegawai/hapus/'); ?><?php $pgw->id_pegawai ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="far fa-trash-alt"></i></a> -->

                        </td>

                    </tr>

            <?php endforeach; ?>
                </tbody>
        </table>

    </div>

</div>

</div>
<!-- End of Main Content -->
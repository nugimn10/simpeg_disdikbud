<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo ($this->session->flashdata('message')); ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">PEGAWAI YANG BERHAK MENERIMA KGB</h1>

    <!-- Button tambah data -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pegawai"><i class="fas fa-plus-circle fa-sm"></i> Tambah Pegawai</button> -->


   

    <div class="table-responsive">
    <!-- <form action="<?php echo site_url('search/search_keyword');?>" method = "post">
        <input type="text" name = "keyword" />
        <input type="submit" value = "Search" />
    </form> -->
        <!-- table -->
        <table id="dataTablesK" class="table table-bordered">
        <thead class="thead-light">
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA PEGAWAI</th>
                    <th>JENIS JABATAN</th>
                    <th>JABATAN</th>
                    <th>KECAMATAN</th>
                    <th>UNIT KERJA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            
            
            <tbody>
            <?php $no = 1;
            foreach ($pegawai1 as $pgw) : ?>
                <?php if ($pgw->stts_knk_gj >= 1 ) {?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pgw->nip ?></td>
                        <td style="width: 150px;"><?php echo $pgw->nm_pegawai ?></td>
                        <td style="width: 150px;"><?php echo $pgw->jenis_jbt ?></td>
                        <td style="width: 150px;"><?php echo $pgw->nm_jabatan ?></td>
                        <td><?php echo $pgw->kec ?></td>
                        <td><?php echo $pgw->uk ?></td>
                        <td style="width:150px;">
                        <?php if ($pgw->stts_knk_gj != 2){?>
                            <?php echo anchor('supervisor/kenaikan_gaji/periksa/' . $pgw->id_pegawai, '<button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detail">Periksa</button>') ?>
                        <?php }?>
                        </td>
                    </tr>
                <?php }?>
                <?php endforeach; ?>
                </tbody>
        </table>

        </table>

    </div>

</div>

</div>
<!-- End of Main Content -->
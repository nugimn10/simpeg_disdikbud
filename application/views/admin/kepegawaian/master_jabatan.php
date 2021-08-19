<div class="container-fluid">
    <div class="col-md-6">
        <div class="card">


            <div class="card-header">
                <h5 class="font-weight-bold mb-0 text-gray-800">DATA MASTER JABATAN</h5>
            </div>

            <div class="card-body">
                <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_master_jabatan"><i class="fas fa-plus fa-sm"></i> Tambah Master Jabatan</button>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr align="center">
                            <th>NO</th>
                            <th>NAMA JABATAN</th>
                            <th colspan="2">AKSI</th>
                        </tr>
                        <?php $no = 1;
                        foreach ($master_jabatan as $mj) : ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $mj->nm_jabatan ?></td>
                                <td align="center">
                                    <?php echo anchor('admin/kepegawaian/master_jabatan/edit/' . $mj->id_master_jabatan, '<div class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</div>') ?>

                                    <?php echo anchor('admin/kepegawaian/master_jabatan/hapus/' . $mj->id_master_jabatan, '<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</div>') ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </table>
                </div>
            </div>

        </div>
    </div>


</div>

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="tambah_master_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA JABATAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>admin/kepegawaian/master_jabatan/tambah" method="post">

                    <div class="form-group">
                        <label for="nm_jabatan">Nama Jabatan</label>
                        <input type="text" name="nm_jabatan" id="nm_jabatan" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
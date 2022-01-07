<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA user</h1>
    </div> -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">DATA USER LOGIN</h1>

    <!-- Button tambah data jika menggunakan modal -->
    <!-- <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_user"><i class="fas fa-plus-circle fa-sm"></i> Tambah User</button> -->

    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <a href="<?php echo base_url('admin/data_user_login/tambah'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-sm fa-plus"></i> Tambah User</a>
        </div>
    </div>

    <div class="table-responsive">
        <!-- table -->
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>NO. HP</th>
                    <th>LEVEL</th>
                    <th colspan="3">AKSI</th>
                </tr>
            </thead>

            <?php $no = 1;
            foreach ($user_login as $usr) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $usr->nama ?></td>
                        <td><?php echo $usr->username ?></td>
                        <td><?php echo $usr->email ?></td>
                        <td><?php echo $usr->password ?></td>
                        <td><?php echo $usr->no_hp ?></td>
                        <td><?php echo $usr->level ?></td>
                        <td align="center">

                            <!-- <?php echo anchor('admin/data_user_login/edit/' . $usr->id_user, ' <div class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> </div>') ?> -->
                            <?php echo anchor('admin/data_user_login/edit/' . $usr->id_user, ' <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fas fa-edit"></i></button>') ?>
                            <?php if ($usr->level == 'Pegawai') : ?>
                                <?php echo anchor('admin/data_user_login/hapus/' . $usr->id_user, '<button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <i class="fas fa-trash-alt"></i></button>') ?>
                            <?php endif; ?>
                        </td>

                        <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                                <i class="fas fa-edit"></i>
                                                                                            </button> -->

                    </tr>
                </tbody>

            <?php endforeach; ?>
        </table>

    </div>

</div>

</div>
<!-- End of Main Content -->



<!-- Modal -->
<!-- <div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA USER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>admin/data_user_login/tambah" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No. HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" name="level" id="level">
                            <option selected></option>
                            <option>Administrator</option>
                            <option>Pegawai</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
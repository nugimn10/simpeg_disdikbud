<div class="container-fluid">


    <div class="card">
        <h6 class="card-header"><strong>EDIT DATA USER</strong></h6>
        <div class="card-body">
            <form action="" method="post">

                <input type="hidden" name="id_user" value="<?php echo $user_login->id_user ?>">

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $user_login->nama ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $user_login->username ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-7">
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $user_login->email ?>" >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-7">
                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $user_login->password ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="no_hp">No. HP</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $user_login->no_hp ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="level">Level</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="level" id="level" class="form-control" value="<?php echo $user_login->level ?>" disabled>
                        </div>
                    </div>
                </div>

        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('admin/data_user_login'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" name="ubah" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
        </div>

        </form>
    </div>



</div>

</div>
<!-- End of Main Content -->
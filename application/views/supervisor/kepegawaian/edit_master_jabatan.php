<div class="container-fluid">
    <div class="col-md-6">

        <div class="card">
            <h6 class="card-header"><strong>EDIT DATA JABATAN</strong></h6>
            <div class="card-body">
                <?php foreach ($master_jabatan as $mj) : ?>
                    <form action="<?php echo base_url() . 'admin/kepegawaian/master_jabatan/update' ?>" method="post">

                        <input type="hidden" name="id_master_jabatan" value="<?php echo $mj->id_master_jabatan ?>">

                        <div class="form-group">
                            <label for="nm_jabatan">NAMA JABATAN</label>
                            <input type="text" name="nm_jabatan" id="nm_jabatan" class="form-control" value="<?php echo $mj->nm_jabatan ?>">
                        </div>

                        <button href="<?php echo base_url('admin/kepegawaian/master_jabatan'); ?>" class="btn btn-danger btn-sm mt-3"><i class=" fas fa-arrow-left"></i> Kembali</button>
                        <button type="submit" class="btn btn-primary btn-sm mt-3"><i class="fas fa-save"></i> Simpan</button>

                    </form>
                <?php endforeach; ?>

            </div>
        </div>



    </div>


</div>

</div>
<!-- End of Main Content -->
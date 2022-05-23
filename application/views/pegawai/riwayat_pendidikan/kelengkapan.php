<div class="container-fluid">

    <div class="card">
        <h6 class="card-header"><strong>DATA PENDIDIKAN</strong></h6>
        <div class="card-body">
            <form action="" method="post">

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="pegawai">Pegawai</label>
                        </div>
                        <div class="col-md-7">

                            <select name="id_pegawai" class="custom-select">
                                <option selected>Pilih Pegawai</option>
                                <?php foreach ($pegawai as $pgw) : ?>
                                    <option value="<?php echo $pgw->id_pegawai ?>"><?php echo $pgw->nip ?> - <?php echo $pgw->nm_pegawai ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="tingkat">Jenis Kelengkapan</label>
                        </div>
                        <div class="col-md-7">
                            <select name="tingkat" class="custom-select">
                                <option selected>Pilih Kelengkapan</option>
                                <option>Pengantar Korwil</option>
                                <option>Rekomendasi Pengawas</option>
                                <option>DUPAK</option>
                                <option>Fc Legalisir KARPEG</option>
                                <option>Fc Legalisir SK CPNS</option>
                                <option>Fc Legalisir SK PNS</option>
                                <option>Fc Legalisir SK KONVERSI NIP</option>
                                <option>Fc Legalisir NUPTK</option>
                                <option>Fc Legalisir SK Kenaikan Pangkat Terakhir</option>
                                <option>Fc Ijazah, Akta dan Transkrip Nilai yang Belum di nilai PAK</option>
                                <option>Fc Legalisir Surat Ijin Belajar</option>
                                <option>FOrlaf Dikti</option>
                                <option>Fc Legalisir PAK Terakhir</option>
                                <option>Fc Inpasing PAK</option>
                                <option>Fc Ijazah, Akta dan Transkrip Nilai Yang ada Pada SK Terakhir</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right">
                            <label for="nm_skl_uv">Lembaga Pengesah</label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="nm_skl_uv" id="nm_skl_uv" class="form-control" placeholder="Masukkan Nama Lembaga / Instansi Pengesah Dokument">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 text-right mt-2">
                            <label for="no_ijz">No. Seri dan Tanggal</label>
                        </div>
                        <div class="col-md-7">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="no_ijz" id="no_ijz" class="form-control" placeholder="Masukkan No. Seri Dokument">
                                </div>
                                <div class="col-md-6 input-group">
                                    <input type="date" name="tgl_ijz" id="tgl_ijz" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-md-center">
                        <div class="col-md-2 col-sm-2 col-xs-2 text-right mt-2">
                            <label for="foto">Upload Dokument</label><br>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input type="file" name="dokument" id="dokument" class="form-control">
                        </div>
                    </div>
                </div>

        </div>
        <div class="card-footer text-center">
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-danger btn-sm"><i class=" fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>

        </form>
    </div>

</div>

</div>
<!-- End of Main Content -->
<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pecandu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_pecandu" value="<?= $pecandu['id_pecandu']; ?>">
                        <input type="hidden" name="id_pekerjaan" value="<?= $pecandu['id_pekerjaan']; ?>">
                        <input type="hidden" name="id_kelurahan" value="<?= $pecandu['id_kelurahan']; ?>">
                        <input type="hidden" name="id_kecamatan" value="<?= $pecandu['id_kecamatan']; ?>">
                        <input type="hidden" name="id_tahapan" value="<?= $pecandu['id_tahapan']; ?>">

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?= $pecandu['jenis_kelamin']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="text" name="usia" class="form-control" id="usia" value="<?= $pecandu['usia']; ?>">
                            <small class="form-text text-danger"><?= form_error('usia'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pecandu['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_narkoba">Jenis Narkoba</label>
                            <input type="text" name="jenis_narkoba" class="form-control" id="jenis_narkoba" value="<?= $pecandu['jenis_narkoba']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis_narkoba'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lembaga_rehab">Lembaga Rehabilitasi</label>
                            <input type="text" name="lembaga_rehab" class="form-control" id="lembaga_rehab" value="<?= $pecandu['lembaga_rehab']; ?>">
                            <small class="form-text text-danger"><?= form_error('lembaga_rehab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $pecandu['tahun']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
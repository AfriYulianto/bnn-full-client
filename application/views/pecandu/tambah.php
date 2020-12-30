<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pecandu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="text" name="usia" class="form-control" id="usia">
                            <small class="form-text text-danger"><?= form_error('usia'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_pekerjaan">ID Pekerjaan</label>
                            <input type="text" name="id_pekerjaan" class="form-control" id="id_pekerjaan">
                            <small class="form-text text-danger"><?= form_error('id_pekerjaan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_kelurahan">ID Kelurahan</label>
                            <input type="text" name="id_kelurahan" class="form-control" id="id_kelurahan">
                            <small class="form-text text-danger"><?= form_error('id_kelurahan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_kecamatan">ID Kecamatan</label>
                            <input type="text" name="id_kecamatan" class="form-control" id="id_kecamatan">
                            <small class="form-text text-danger"><?= form_error('id_kecamatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_narkoba">Jenis Narkoba</label>
                            <input type="text" name="jenis_narkoba" class="form-control" id="jenis_narkoba">
                            <small class="form-text text-danger"><?= form_error('jenis_narkoba'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_tahapan">ID Tahapan</label>
                            <input type="text" name="id_tahapan" class="form-control" id="id_tahapan">
                            <small class="form-text text-danger"><?= form_error('id_tahapan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lembaga_rehab">Lembaga Rehabilitasi</label>
                            <input type="text" name="lembaga_rehab" class="form-control" id="lembaga_rehab">
                            <small class="form-text text-danger"><?= form_error('lembaga_rehab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
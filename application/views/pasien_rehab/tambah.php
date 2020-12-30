<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pasien Rehabilitasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
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
                            <label for="id_pekerjaan">ID Pekerjaan</label>
                            <input type="text" name="id_pekerjaan" class="form-control" id="id_pekerjaan">
                            <small class="form-text text-danger"><?= form_error('id_pekerjaan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat_rehab">Tempat Rehabilitasi</label>
                            <input type="text" name="tempat_rehab" class="form-control" id="tempat_rehab">
                            <small class="form-text text-danger"><?= form_error('tempat_rehab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lama_rehab">Lama Rehabilitasi</label>
                            <input type="text" name="lama_rehab" class="form-control" id="lama_rehab">
                            <small class="form-text text-danger"><?= form_error('lama_rehab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="surat_selesai">Surat Selesai</label>
                            <input type="text" name="surat_selesai" class="form-control" id="surat_selesai">
                            <small class="form-text text-danger"><?= form_error('surat_selesai'); ?></small>
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
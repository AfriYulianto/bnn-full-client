<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pasien Rehabilitasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_pasien_rehab" value="<?= $pasien_rehab['id_pasien_rehab']; ?>">
                        <input type="hidden" name="id_kelurahan" value="<?= $pasien_rehab['id_kelurahan']; ?>">
                        <input type="hidden" name="id_kecamatan" value="<?= $pasien_rehab['id_kecamatan']; ?>">
                        <input type="hidden" name="id_pekerjaan" value="<?= $pasien_rehab['id_pekerjaan']; ?>">

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $pasien_rehab['tanggal_lahir']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat_rehab">Tempat Rehabilitasi</label>
                            <input type="text==" name="tempat_rehab" class="form-control" id="tempat_rehab" value="<?= $pasien_rehab['tempat_rehab']; ?>">
                            <small class="form-text text-danger"><?= form_error('tempat_rehab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lama_rehab">Lama Rehabilitasi</label>
                            <input type="text" name="lama_rehab" class="form-control" id="lama_rehab" value="<?= $pasien_rehab['lama_rehab']; ?>">
                            <small class="form-text text-danger"><?= form_error('lama_rehab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="surat_selesai">Surat Selesai</label>
                            <input type="text" name="surat_selesai" class="form-control" id="surat_selesai" value="<?= $pasien_rehab['surat_selesai']; ?>">
                            <small class="form-text text-danger"><?= form_error('surat_selesai'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $pasien_rehab['tahun']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
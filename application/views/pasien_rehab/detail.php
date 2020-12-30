<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pasien Rehabilitasi
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">ID Pasien Rehabilitasi</th>
                                <td>:</td>
                                <td><?= $pasien_rehab['id_pasien_rehab'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>:</td>
                                <td><?= $pasien_rehab['tanggal_lahir'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat Rehabilitasi</th>
                                <td>:</td>
                                <td><?= $pasien_rehab['tempat_rehab'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Lama Rehabilitasi</th>
                                <td>:</td>
                                <td><?= $pasien_rehab['lama_rehab'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Surat Selesai</th>
                                <td>:</td>
                                <td><?= $pasien_rehab['surat_selesai'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tahun</th>
                                <td>:</td>
                                <td><?= $pasien_rehab['tahun'] ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>pasien_rehab" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
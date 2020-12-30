<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pecandu
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">ID Pecandu</th>
                                <td>:</td>
                                <td><?= $pecandu['id_pecandu'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $pecandu['jenis_kelamin'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Usia</th>
                                <td>:</td>
                                <td><?= $pecandu['usia'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td><?= $pecandu['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Narkoba</th>
                                <td>:</td>
                                <td><?= $pecandu['jenis_narkoba'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Lembaga Rehabilitasi</th>
                                <td>:</td>
                                <td><?= $pecandu['lembaga_rehab'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tahun</th>
                                <td>:</td>
                                <td><?= $pecandu['tahun'] ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>pecandu" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>pasien_rehab/tambah" class="btn btn-primary">Tambah
                Data Pasien Rehabilitasi</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pasien Rehabilitasi</h3>

            <ul class="list-group">
                <?php foreach ($pasien_rehab as $pas) : ?>
                    <li class="list-group-item">
                        ID Pasien <?= $pas['id_pasien_rehab']; ?> <td>: Lama Rehabilitasi</td> <?= $pas['lama_rehab']; ?>
                        <a href="<?= base_url(); ?>pasien_rehab/hapus/<?= $pas['id_pasien_rehab']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>pasien_rehab/ubah/<?= $pas['id_pasien_rehab']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>pasien_rehab/detail/<?= $pas['id_pasien_rehab']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
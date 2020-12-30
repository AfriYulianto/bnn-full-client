<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>pecandu/tambah" class="btn btn-primary">Tambah
                Data Pecandu</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pecandu</h3>

            <ul class="list-group">
                <?php foreach ($pecandu as $pec) : ?>
                    <li class="list-group-item">
                        <?= $pec['jenis_kelamin']; ?> <td>: Umur</td> <?= $pec['usia']; ?>
                        <a href="<?= base_url(); ?>pecandu/hapus/<?= $pec['id_pecandu']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>pecandu/ubah/<?= $pec['id_pecandu']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>pecandu/detail/<?= $pec['id_pecandu']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
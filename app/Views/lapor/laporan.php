<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h1>SIMPLE LAPOR!</h1>

    <?php foreach ($lapor as $k) : ?>
        <div class="card text-center mb-3">
            <div class="card-header">
                <?= $k['nama']; ?>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $k['isi']; ?></p>

            </div>
            <div class="card-footer text-muted">
                <span>Lampiran : <?= $k['lampiran']; ?></span>
                <span><?= $k['created_at']; ?></span>
                <a href="/lapor/detail/<?= $k['id']; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?= $this->endSection(); ?>
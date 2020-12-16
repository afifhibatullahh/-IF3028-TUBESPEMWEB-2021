<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h1>SIMPLE LAPOR!</h1>
    <div class="row">
        <div class="col">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="/lapor/buatLapor" class="btn btn-primary mb-3 ">Buat Laporan/Komentar+</a>
            </div>
        </div>
    </div>

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
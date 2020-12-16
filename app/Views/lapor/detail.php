<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">SIMPLE LAPOR!</h5>
            <p class="card-text">Dari : <?= $lapor['nama']; ?></p>
            <p class="card-text"> <b>Pesan : </b> <?= $lapor['isi']; ?></p>
            <img src="/img/<?= $lapor['lampiran']; ?>" class="card-img-top" alt="Lampiran" style="width: 200px; height: 200px;">
            <p class="card-text"><small class="text-muted"><?= "waktu : " . $lapor['created_at'] . "Aspek : " . $lapor['aspek']; ?></small></p>
            <div>
                <button type="button" class="btn btn-warning mb-3">Ubah</button>
                <button type="button" class="btn btn-danger mb-3">Hapus</button>
            </div>
            <div>
                <a href="/">Kembali</a>
            </div>
            <!-- <p class="card-text"></p> -->
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
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
                <a href="/lapor/edit/<?= $lapor['id']; ?>" class="btn btn-warning mb-3">Ubah</a>
                <form action="/lapor/<?= $lapor['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                </form>
            </div>
            <div>
                <a href="/">Kembali</a>
            </div>
            <!-- <p class="card-text"></p> -->
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
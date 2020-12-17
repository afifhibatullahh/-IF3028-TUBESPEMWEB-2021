<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">

    <h1>SIMPLE LAPOR!</h1>

    <form action="/lapor/update/<?= $lapor['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="nama">Nama </label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama anda.." required value="<?= (old('nama')) ? old('nama') : $lapor['nama'] ?>">
        </div>

        <div class="form-group">
            <textarea class="form-control" id="isi" name="isi" rows="3" required><?= (old('isi')) ? old('isi') : $lapor['isi'] ?></textarea>
        </div>

        <div class=" form-group">
            <select class="form-control" id="aspek" name="aspek" required>
                <option selected hidden><?= $lapor['aspek']; ?></option>
                <option>Dosen</option>
                <option>Staff</option>
                <option>Mahasiswa</option>
                <option>Infrastruktur</option>
                <option>Pengajaran</option>
            </select>
        </div>

        <div class="form-group">
            <input type="file" class="form-control-file" id="lampiran" name="lampiran">
        </div>
        <a href="/" class="btn btn-primary">Kembali</a>
        <button type="submit" class="btn btn-success" onclick="return confirm('yakin edit?')">Ubah LAPOR!</button>
    </form>

</div>

<?= $this->endSection(); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data siswa
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?= $siswa['nama'] ?></h5>
                    <p class="card-text">NIM : <?= $siswa['nim'] ?></p>
                    <p class="card-text">Email : <?= $siswa['alamat'] ?></p>
                    <a href="<?= base_url() ?>siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
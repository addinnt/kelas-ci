<div class="container">
    <?php if ($this->session->flashdata('flash-data')): ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                <strong>Data Mahasiswa Berhasil </strong> <?php echo $this->session->flashdata('flash-data'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?=base_url();?>mahasiswa/tambah"class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3" style="margin-top: 25px">
                    <input type="text" class="form-control" name="keyword"
                        placeholder="Cari Data Mahasiswa" aria-label="Cari data mahasiswa" 
                        aria-describedby="button-addon2">

                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>

            <h2> Daftar Mahasiswa </h2>
            <?php if(empty($mahasiswa)): ?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa Tidak Di Temukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
            <?php foreach ($mahasiswa as $mhs) :?>
            <li class="list-group-item">
                <?= $mhs ['nama'];?>

                <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" 
                    class="badge badge-danger float-right"
                    style="margin-left: 10px"
                    onClick="return confirm('Yakin data ini akan dihapus ?')">
                    Hapus
                </a>
                
                <a href="<?= base_url() ?>mahasiswa/edit/<?= $mhs['id'] ?>" 
                    class="badge badge-success float-right"
                    style="margin-left: 10px" >
                    Edit
                </a>

                <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id'] ?>" 
                    class="badge badge-primary float-right" >
                    Detail
                </a>
            </li>
            <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
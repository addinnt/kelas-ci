<div class="container">
<div class ="row mt-3">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
           <b>Form Edit Data Mahasiswa</b>
        </div>
        <div class="card-body">
            <!-- $this->form_validation->set_message('rule,'eror message'); -->
            <?= validation_errors(); ?> 
            <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
            <div class="form-group">
                <label form="nama">  <b>Nama</b> </label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
            </div>
            <div class="form-group">
                <label form="nim">  <b>Nim </b> </label>
                <input type="number" class="form-control" id="nim" name="nim"  value="<?= $mahasiswa['nim'] ?>">
            </div>
            <div class="form-group">
                <label form="email"> <b> Email </b></label>
                <input type="email" class="form-control" id="email" name="email"  value="<?= $mahasiswa['email'] ?>">
            </div>
            <div class="form-group">
            <label form="jurusan"> <b> Jurusan </b> </label>
            <select class="form-control" id="jurusan" name="jurusan" name="jurusan"  value="">
                <option selected>------</option>
                <option value ="1">Informatika</option>
                <option value="2">Kimia</option>
                <option value="3">Mesin</option>
            </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
        </form>
        </div>
        </div>
    </div>
 </div>
</div>
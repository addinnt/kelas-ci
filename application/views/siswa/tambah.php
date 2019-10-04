<div class="container">
<div class ="row mt-3">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
           <b>Form Tambah Data Siswa</b>
           <b>Tambahkan data siswa disini</b>
        </div>
        <div class="card-body">
            <!-- $this->form_validation->set_message('rule,'eror message'); -->
            <?= validation_errors(); ?> 
            <form action="" method="post">
            <div class="form-group">
                <label form="nama">  <b>Nama</b> </label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label form="nim">  <b>Nim </b> </label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label form="alamat"> <b> Alamat </b></label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <!-- <div class="form-group">
            <label form="jurusan"> <b> Jurusan </b> </label>
            <select class="form-control" id="jurusan" name="jurusan" name="jurusan">
            <option selected>------</option>
                <option value ="1">Informatika</option>
                <option value="2">Kimia</option>
                <option value="3">Mesin</option>
            </select>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
        </form>
        </div>
        </div>
    </div>
 </div>
</div>
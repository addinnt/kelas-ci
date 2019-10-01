<?php echo form_open('login/prosess_login'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>

                        <div class="card-body">
                            <form class="form" autocomplete="off" id="formLogin" method="post" novalidate="">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail2">Username</label>
                                    <input type="text" name="uname1" class="form-control" id="exampleDropdownFormEmail2" placeholder="username">
                                </div>

                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Password</label>
                                    <input type="password" name="pwd1" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>

                    <div class="alert alert-info" role="alert">
                        <?php if(isset($pesan)){ 
                                echo $pesan;
                            } else {
                                echo "Masukkan Username & Password.";
                            } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>
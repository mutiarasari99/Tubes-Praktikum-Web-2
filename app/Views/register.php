<?= $this->extend("layout/template-login") ?>

<?= $this->section("body") ?>

<div class="container mt-5 pt-5">
    <div class="row" id="login-user">
        <div class="panel panel-primary">
            <h1>Register</h1>
            <div class="panel-body">
                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <form class="" action="<?= base_url('register') ?>" method="post">
                    <div class="form-group pb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group pb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group pb-3">
                        <label for="phone_no">Phone No</label>
                        <input type="text" class="form-control" name="phone_no" id="phone_no">
                    </div>
                    <div class="form-group pb-3">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" name="umur" id="umur">
                    </div>
                    <div class="form-group pb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="form-group pb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    </div>
                    <div class="form-group pb-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan">
                    </div>
                    <div class="form-group pb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group pb-3">
                        <label for="password_confirm">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                    </div>
                    
                    <button type="submit" class="btn btn-info">Submit</button>
                    <div class="form-group pt-3">
                        <label for=""><a href="login">Login</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?= $this->endSection() ?>
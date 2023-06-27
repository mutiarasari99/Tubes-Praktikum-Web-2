<?= $this->extend("layout/template-login") ?>

<?= $this->section("body") ?>
<div class="container mt-5 pt-5" id="login-user">
<!-- <div id="login-user"> -->
<form action="<?= base_url('login') ?>" method="post">
  <div class="form-group pb-3">
      <h1>Login</h1>
      <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group pb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-info">Submit</button>
  <div class="form-group pt-3">
  <label for=""><a href="register">Create Account</a></label>
  </div>
  </div>
</form>
<!-- </div> -->
</div>

<?= $this->endSection() ?>
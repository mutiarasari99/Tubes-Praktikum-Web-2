<?= $this->extend("layout/template-login") ?>

<?= $this->section("body") ?>

<div class="container">
<div class="dashboard" style="margin-top: 100px; padding-left:100px; padding-bottom:100px">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                <h1>Hello, <?= session()->get('name') ?></h1>
                <h3><a href="<?= site_url('logout') ?>">Logout</a></h3>
            </div>
        </div>
    </div>
    </div>
    </div>

<?= $this->endSection() ?>
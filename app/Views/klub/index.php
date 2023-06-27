<?= $this->extend('layout/template-login'); ?>
<?= $this->section('body'); ?>
<!-- <br><br><br><br><br> -->
<div class="container mt-5 pt-5">
<div class="dashboard">
    <div class="row">
      <div class="col-3">
      <div class="panel panel-primary">
            <div class="panel-body">
                <h5>Selamat bergabung, <?= session()->get('name') ?> !</h5>
                <h6><a href="<?= site_url('logout') ?>">Logout</a></h6>
                <br><hr>
            </div>
      </div>
    </div>
</div>
<div class="row">
  <h1 class="mt-5 pb-3">Jadwal</h1>
  <div class="jadwal">
    <img src="../img/calendar.svg" alt="" width="20px">
    <h5 style="padding-left: 25px;">Tiap Sabtu pukul 15:30 pm.</h5>
  </div>
</div>
<div class="row mt-5">
<div class="col">
<h1 class="mt-5">Daftar Anggota</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jurusan</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php foreach($klub as $k):?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $k['name']; ?></td>
      <td><?= $k['umur']; ?></td>
      <td><?= $k['jenis_kelamin']; ?></td>
      <td><?= $k['alamat']; ?></td>
      <td><?= $k['jurusan']; ?></td>

    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
    </div>
    </div>

<div class="container" id="data-anggota">

</div>
<?= $this->endSection(); ?>

    
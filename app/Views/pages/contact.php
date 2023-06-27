<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 pt-5" id="contact-us">
    <div class="row">
        <div class="col">
            <h1>Contact</h1>
            <?php foreach($alamat as $a): ?>
                <div class="contact">
                    <div class="card">
                    <img src="../img/mail.svg" alt="iconprofil" width="30px" >
                    <h6><?= $a['Email']; ?></h6>
                    </div>
                    <div class="card">
                    <img src="../img/instagram.svg" alt="iconprofil" width="30px" >
                    <h6><?= $a['Instagram']; ?></h6>
                    </div>
                    <div class="card">
                    <img src="../img/linkedin.svg" alt="iconprofil" width="30px" >
                    <h6><?= $a['Linkedin']; ?></h6>
                </div>
                </div>
                <div class="contact">
                    <div class="card">
                    <img src="../img/home.svg" alt="iconprofil" width="30px" >
                    <h6><?= $a['Alamat']; ?></h6>
                    </div>
                    <div class="card">
                    <img src="../img/map-pin.svg" alt="iconprofil" width="30px" >
                    <h6><?= $a['Kota']; ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
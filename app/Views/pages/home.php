<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="main mt-5">
<fieldset class="text-center pb-5">
  <h1 class="display-4 mt-5">Ayo Menggambar!</h1>
  <p class="lead mt-5">Wujudkan imajinasimu ke dalam sebuah karya yang nyata dengan menggambar.</p>
  <hr class="my-5">
  <a class="btn btn-lg" href="#about" role="button">Find More</a>
  </fieldset>
</div>

<!-- about -->
<section id="about">
    
    <div class="container pt-5">
    <div class="row text-center">
        <div class="col mt-5 pb-5">
        <h1>About Us</h1>
        </div>
    <div class="row justify-content-center mt-5">
        <div class="col-9">
        <p>Klub menggambar ini dibuat dengan tujuan sebagai wadah penampung kreatifitas mahasiswa dari berbagai jurusan khususnya yang mempunyai minat terhadap dunia menggambar</p>
         
        </div>  
    </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a8becc" fill-opacity="1" d="M0,224L40,208C80,192,160,160,240,149.3C320,139,400,149,480,176C560,203,640,245,720,229.3C800,213,880,139,960,122.7C1040,107,1120,149,1200,181.3C1280,213,1360,235,1400,245.3L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</section>

<!-- gallery -->
<section id="gallery-klub">
    <div class="container">
    <h1 id="gallery">Gallery</h1>
    <div class="row mt-5">
        <div class="col-4 pb-3"><img src="../img/gambar1.jpg" alt="" class="gallery-img"></div>
        <div class="col-4 pb-3"><img src="../img/gambar2.jpg" alt="" class="gallery-img"></div>
        <div class="col-4 pb-3"><img src="../img/gambar7.jpg" alt="" class="gallery-img"></div>
    </div>
    <div class="row">
        <div class="col-4 pb-3"><img src="../img/gambar4.jpg" alt="" class="gallery-img"></div>
        <div class="col-4 pb-3"><img src="../img/gambar5.jpg" alt="" class="gallery-img"></div>
        <div class="col-4 pb-3"><img src="../img/gambar6.jpg" alt="" class="gallery-img"></div>
    </div>
    </div>
</section>

<?= $this->endSection(); ?>
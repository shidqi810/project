<?php 
  include 'header.php';

  $get = mysqli_real_escape_string($koneksi,$_GET['judul']);
  $web = mysqli_query($koneksi,"SELECT * FROM galeri_web WHERE judul = '$get'") or die(mysqli_error($koneksi));
  $data = mysqli_fetch_array($web);

  $spasi = str_replace(' ', '', $get);
  $db = 'web_' . $spasi;
  $file = query("SELECT * FROM $db");
?>

  <!-- Start Service Area -->
  <section class="section-gap pb-0">
    <div class="container">
      <div class="section-title pb-0">
        <h2><?= $data['judul'] ?></h2>
      </div>
    </div>
  </section>
  <!-- End Service Area -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="pb-3 active"></li>
      <?php for ($i=1; $i < count($file); $i++) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="pb-3"></li>
      <?php } ?>
    </ol>
    <div class="carousel-inner container">
      <div class="carousel-item active">
        <img src="web/<?= $spasi ?>/1.png" class="d-block w-100" alt="...">
      </div>
      <?php foreach ($file as $file): ?>
      <?php if ($file['id'] >= 2): ?>
        <div class="carousel-item">
          <a href="<?= $file['file'] ?>">
            <img src="<?= $file['file'] ?>" class="d-block w-100" alt="...">
          </a>
        </div>
      <?php endif ?>
      <?php endforeach ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Portfolio Details Area -->
  <section class="portfolio_details_area">
    <div class="container">
      <div class="portfolio_details_inner">
        <div class="portfolio_right_text mt-30">
          
          <h4><?= $data['judul'] ?></h4>
          
          <ul class="list">
            <li><span>Bidang</span>: <?= $data['bidang'] ?></li>
            <li><span>Tipe Web</span>: <?= $data['tipe'] ?></li>
            <li><span>Bahasa</span>: <?= $data['bahasa'] ?></li>
            <li><span>Framework</span>: <?= $data['framework'] ?></li>
            <li><span>Link</span>: <a class="btn btn-primary" href="<?= $data['link'] ?>">Kunjungi</a></li>
          </ul>
          
          <p class="mt-3"><?= $data['desk'] ?></p>
      </div>
    </div>
  </section>
  <!-- End Portfolio Details Area -->

<?php include 'footer.php'; ?>
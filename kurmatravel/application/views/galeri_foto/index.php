  <?php
    $sql  = "SELECT *
            FROM `galeri`
            ";
    $gal = $this->db->query($sql)->result_array();
  ?>

<!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mt-4 mb-5">
          <h2 class="section-heading text-uppercase">Galeri Foto</h2>
          <h3 class="section-subheading text-muted">Galeri Kegiatan Kurma Travel</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach($gal as $gl) : ?>  
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="<?= base_url('assets/foto/') . $gl['foto']; ?>">
              <img class="img-fluid" src="<?= base_url('assets/foto/') . $gl['foto']; ?>" >
            </a>
            <div class="portfolio-caption">
              <h4><?= $gl['judul']; ?></h4>
              <p class="text-muted"><?= $gl['deskripsi']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
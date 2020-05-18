  <?php
    $sql  = "SELECT *
            FROM `galeri_harga`
            ";
    $gal_harga = $this->db->query($sql)->result_array();
  ?>

<!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mt-4 mb-5">
          <h2 class="section-heading text-uppercase">Harga</h2>
          <h3 class="section-subheading text-muted">Daftar Harga Kurma Travel.</h3>
        </div>
      </div>

      <div class="row">
        <?php foreach($gal_harga as $gh) : ?>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="card">
              <img src="<?= base_url('assets/foto_harga/') . $gh['foto_harga']; ?>" class="card-img-top zoom-effect">
              <div class="card-body">
                <h5 class="card-title"><?= $gh['judul_harga']; ?></h5>
                <p class="card-text"><?= $gh['deskripsi_harga']; ?></p>
              </div>
              <div class="card-footer">
                <a href="">
                  <small class="text-muted">Lihat Selengkapnya...</small>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>


      </div>
  </section>
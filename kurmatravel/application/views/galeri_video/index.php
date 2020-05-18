  <?php
    $sql  = "SELECT *
            FROM `galeri_video`
            ";
    $gal = $this->db->query($sql)->result_array();
  ?>

<!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mt-4 mb-5">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach($gal as $gl) : ?>  
          <div class="col-md-4 col-sm-6 portfolio-item">
            <video class="card-img img-fluid" data-toggle="modal" data-target="#modala" controls>
              <source src="<?= base_url('assets/foto/') . $gl['video']; ?>" type="video/mp4">
            <div class="portfolio-caption">
              <h4><?= $gl['judul_video']; ?></h4>
              <p class="text-muted"><?= $gl['deskripsi_video']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
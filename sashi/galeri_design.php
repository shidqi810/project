<?php 
	include 'header.php';

    $design = query("SELECT * FROM galeri_design");
?>

	<!-- start banner Area -->
	<section class="home-banner-area wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Galeri Design</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
						Sashi.id
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Work Area Area -->
	<section class="work-area section-gap-top section-gap-bottom-90" id="work">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Galeri Design</h2>
						<p>Berikut adalah hasil hasil dari design Sashi.</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="filters">
						<ul>
							<li class="active bg-primary text-white" data-filter=".all">Semua</li>
							<li class="bg-primary text-white" data-filter=".1">1</li>
							<li class="bg-primary text-white" data-filter=".2">2</li>
							<li class="bg-primary text-white" data-filter=".3">3</li>
							<li class="bg-primary text-white pr-3" data-filter=".4">4</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="filters-content wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
				<div class="row grid">
					<?php foreach ($design as $design): ?>
						<div class="mb-5 col-lg-4 col-md-6 col-sm-12 all <?= $design['hal'] ?>">
							<a href="<?= $design['file'] ?>">
								<img class="mx-auto card shadow img-thumbnail" src="<?= $design['file'] ?>">
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->

<?php include 'footer.php'; ?>
<?php 
	include 'header.php';

    $program = query("SELECT * FROM galeri_program");
?>

	<!-- start banner Area -->
	<section class="home-banner-area wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Galeri Pemrograman</h1>
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
						<h2>Galeri Pemrograman</h2>
						<p>Program program yang pernah dibuat oleh Sashi.</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="filters">
						<ul>
							<li class="active bg-primary text-white pr-3" data-filter=".all">Semua</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="filters-content wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
				<div class="row grid">
					<?php foreach ($program as $program): ?>
						<div class="mb-5 col-lg-4 col-md-6 col-sm-12 all <?= $program['hal'] ?>">
							<a href="<?= $program['file'] ?>">
								<img class="mx-auto card shadow img-thumbnail" src="<?= $program['file'] ?>">
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->

<?php include 'footer.php'; ?>
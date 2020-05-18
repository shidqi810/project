<?php
	include 'header.php';
	$prestasi = query("SELECT * FROM prestasi");

?>

	<!-- start banner Area -->
	<section class="home-banner-area wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
						<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Haii!</div>
					</div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Curiculum Vitae</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
						CV Muhammad Shidqi
					</div>
					<a href="cv.pdf" class="primary-btn" data-text="Download CV">
						<span>D</span>
						<span>o</span>
						<span>w</span>
						<span>n</span>
						<span>l</span>
						<span>o</span>
						<span>a</span>
						<span>d</span>
						<span> </span>
						<span>C</span>
						<span>V</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<div class="kepala wow zoomIn" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="container">
			<div class="heading-wrapper shadow-lg">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="info wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
							<i class="icon lnr lnr-map"></i>
							<div class="right-area">
								<h5 class="text-white">Jl. Letkol Iskandar No. 176A <br> Kelurahan 24 Ilir Palembang</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="info wow slideInUp" data-wow-duration="1s" data-wow-delay="0.7s">
							<i class="icon lnr lnr-phone-handset"></i>
							<div class="right-area">
								<h5 class="text-white">0821 - 7699 - 1834</h5>
								<h6 class="text-white">Bisa Telepon Atau Whatsapp</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="info wow slideInRight" data-wow-duration="1s" data-wow-delay="0.7s">
							<i class="icon fa fa-comment"></i>
							<div class="right-area">
								<h5 class="text-white">m.shidqi810@gmail.com</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
			
		</div><!-- container -->
	</div>

	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro shadow-lg pb-3">
						<div class="profile-img wow rotateIn" data-wow-duration="2s" data-wow-delay="1s">
							<a href="img/profile.jpg">
								<img class="img-thumbnail rounded-circle" style="max-height: 230px;" src="img/profile.jpg" alt="">
							</a>
						</div>
						<h2 class="blue"><b>Muhammad Shidqi</b></h2>
						<ul class="information mt-4 margin-tb-30">
							<li><b class="blue">LAHIR : </b>08 Oktober, 2000</li>
							<li><b class="blue">ALAMAT : </b>Jl. Letkol Iskandar Nor. 176A Rt. 008 Rw. 002 <br> Kecamatan Bukit Kecil Kelurahan 24 Ilir Palembang</li>
							<li><b class="blue">PEKERJAAN : </b>Mahasiswa</li>
							<li><b class="blue">WHATSAPP : </b>0821 - 7699 - 1834</li>
							<li><b class="blue">EMAIL : </b>m.shidqi810@gmail.com</li>
						</ul>
						<div class="ml-4 mt-4">
							<a href="mailto:m.shidqi810@gmail.com"><i class="mr-3 fa-2x fas fa-envelope"></i></a>
							<a href="https://api.whatsapp.com/send?phone=6282176991834&text=Assalamualaikum%21%20"><i class="mr-3 fa-2x fab fa-whatsapp"></i></a>
							<a href="https://www.instagram.com/shidqimuhammad/"><i class="mr-3 fa-2x fab fa-instagram"></i></a>
							<a href="https://t.me/Muhammad_shidqi"><i class="mr-3 fa-2x fab fa-telegram"></i></a>
							<a href="http://line.me/ti/p/~shidqi120"><i class="mr-3 fa-2x fab fa-line"></i></a>
						</div>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->

	<!-- Start Service Area -->
	<section class="service-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title wow fadeInUp" data-wow-duration="1s">
						<h2>Portofolio</h2>
						<p>Hasil hasil pekerjaan yang telah kami lakukan, dapat anda lihat melalui galeri yang telah kami sediakan, tergantung dari galeri mana yang anda pilih untuk dilihat.</p>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6">
					<a href="galeri_design.php">
						<div class="single-service wow fadeInUp" data-wow-duration="1s">
							<i class="fa-5x fas fa-palette"></i>
							<h4 class="mb-0">
								Design
							</h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="galeri_video.php">
						<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<i class="fa-5x fas fa-video"></i>
							<h4 class="mb-0">Video
							</h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="galeri_pemrograman.php">
						<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
							<i class="fa-5x fab fa-java"></i>
							<h4 class="mb-0">Pemrograman
							</h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="galeri_web.php">
						<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
							<i class="fa-5x fas fa-desktop"></i>
							<h4 class="mb-0">Website
							</h4>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service Area -->

	<!--================My Tabs Area =================-->
        <section class="p-5">
        	<div class="container">
        		<div class="section-title wow fadeInUp" data-wow-duration="1s">
					<h2>Prestasi & Pencapaian <i class="fas fa-trophy"></i></h2>
					<p>Berikut ini adalah prestasi dan pencapaian selama ini.</p>
				</div>

				<ul class="list-unstyled">
					<?php $i = 0 ?>
					<?php foreach ($prestasi as $prestasi): ?>
					  <li class="media">
					    <div class="media-body wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
					      <h4 class="mt-0 mb-3"><i class="<?= $prestasi['icon'] ?> mr-3 mb-3"></i> <?= $prestasi['judul'] ?></h4>
					    </div>
					  </li>
					<?php $i+=0.3 ?>
					<?php endforeach ?>
				</ul>
        	</div>
        </section>
    <!--================End My Tabs Area =================-->

	<!--================My Tabs Area =================-->
        <section class="mytabs_area p-5">
        	<div class="container">
        		<div class="section-title text-white wow zoomIn" data-wow-duration="1s">
					<h2>Pengalaman & Pendidikan</h2>
					<p>Berikut ini adalah pengalaman kerja yang telah saya lakukan serta jejak pendidikan yang telah saya tempuh selama ini.</p>
				</div>
        		<div class="tabs_inner wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.6s">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pengalaman Kerja</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Jejak Pendidikan</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<!-- list berfungsi untuk garis panjangnya -->
							<ul class="list">
								<li>
									<!-- tag span digunakan untuk membuat bulatan -->
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>Oktober 2016 s/d <br>Februari 2017</p>
										</div>
										<div class="media-body">
											<h4>Circle Hub</h4>
											<p>Freelancer Edit Gambar & Video </p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>Oktober 2017 s/d <br>Maret 2018</p>
										</div>
										<div class="media-body">
											<h4>Lenza Photo Studio</h4>
											<p>Freelancer Kameramen <br>dan Sortir Video</p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>Juni 2019 s/d <br>Agustus 2019</p>
										</div>
										<div class="media-body">
											<h4>Synapse Academy</h4>
											<p>Tim Design Grafis</p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>Sekarang</p>
										</div>
										<div class="media-body">
											<h4>Sashi</h4>
											<p>Menjalankan Usaha</p>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>2006 s/d 2012</p>
										</div>
										<div class="media-body">
											<h4>SD Negeri 158 <br>Palembang</h4>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>2012 s/d 2015</p>
										</div>
										<div class="media-body">
											<h4>MTs Negeri 2 <br>Palembang</h4>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>2015 s/d 2018</p>
										</div>
										<div class="media-body">
											<h4>MA Negeri 2 <br>Palembang</h4>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>2018 s/d Sekarang</p>
										</div>
										<div class="media-body">
											<h4>UIN Raden Fatah <br>Palembang</h4>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
        		</div>
        	</div>
        </section>
    <!--================End My Tabs Area =================-->

<?php include 'footer.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Custom fonts for this template-->
	  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	  <!-- Custom styles for this template-->
	  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<title>F O R A - Tentang Kami</title>
</head>
<body>
	<?php
    $sql  = "SELECT *
              FROM `kepengurusan`
            ";
    $pengurus = $this->db->query($sql)->result_array();
?>
	<header>
	<a href="<?= base_url(''); ?>"><img src="<?= base_url('assets/'); ?>Logo_Fora_Small.png" href></a>
	<center>
		<div class="navatas">
	  		<a href="<?= base_url(''); ?>">Beranda</a>
	  		<a class="aktif" href="<?= base_url('home/tentangkami'); ?>">Tentang Kami</a>
	  		<a href="<?= base_url('home/faq'); ?>">FAQ</a>
	  		<a class="aktif" href="<?= base_url('auth'); ?>">Login<a>
		</div>
	</center>
	</header>
	<div class="topik">
	<h2>Tentang Kami</h2>
	<p class="isi">
		FORA adalah forum berbasis komunitas atau organisasi dimana tujuannya adalah memudahkan pembelajaran dan pengenalan untuk para pelajar dan mahasiswa dalam lingkup sebuah organisasi.
	</p>
	<h2>Penamaan</h2>
	<p class="isi">
		FORA berasal dari kata romawi kuno yang berarti Forum, Selama berabad-abad, forum merupakan pusat kehidupan masyarakat Romawi: tempat prosesi kemenangan dan pemilihan umum; tempat pidato umum, pengadilan kriminal, dan pertandingan gladiator; dan inti dari segala aktivitas perdagangan. Di sini, berbagai patung dan monumen menjadi tugu peringatan bagi para pahlawan kota. Sebagai jantung Romawi kuno, forum ini disebut-sebut sebagai tempat pertemuan paling ramai sepanjang sejarah dunia. Penamaan FORA sendiri sebagai harapan agar FORA bisa menjadi pusat aktivitas organisasi yang bisa bermanfaat bagi orang banyak.
	</p>
	<h2>Logo</h2>
	<div class="text-center">
		<img src="<?= base_url('assets/'); ?>Logo_Fora.png" class="imgstatic">
	</div>
	<p class="isi">
		Logo pada FORA berasal dari Kuil Garni yaitu kuil dari bangsa Romawi. Didedikasikan untuk Helios, dewa matahari bangsa Romawi, Kuil Garni dibangun oleh Raja Armenia, TRDATES I, pada abad ke-1 masehi.
	</p>
	</div>

	<!-- Team -->
	  <section class="bg-light page-section" id="team">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-12 text-center">
	          <h3 class="section-subheading text-muted">Tim Kami Yang Luar Biasa.</h3>
	        </div>
	      </div>
	      <div class="row">
	      	<?php foreach($pengurus as $pr) : ?>
		        <div class="col-lg-4 mr-5 mb-5 pt-3 mx-auto shadow">
		          <div class="team-member">
		          	<div class="text-center mb-4">
		            	<img class="w-75 rounded-circle" src="<?= base_url('assets/img/pengurus/') . $pr['foto_pengurus']; ?>" alt="">
              		</div>
              		<label for="name_pengurus">Nama Lengkap : </label>
	            	<h5 class="font-weight-bold" id="name_pengurus" name="name_pengurus"><?= $pr['name_pengurus']; ?></h5>

	            	<label for="jabatan">Jabatan : </label>
	            	<p class="font-weight-bold" id="jabatan" name="jabatan"><?= $pr['jabatan']; ?></p>

	            	<label for="motto">Motto : </label>
	            	<p class="font-weight-bold" id="motto" name="motto"><?= $pr['motto']; ?></p>

		            <ul class="list-inline social-buttons">

		              <li class="">
		              	<div class="row">
		                    <label for="whatsapp" class="col-lg-2">
		                        <i class="fab fa-whatsapp fa-2x fa-fw"></i>
		                    </label>
		                    <div class="col-lg-10">
		                      <p id="whatsapp" name="whatsapp"><?= $pr['whatsapp']; ?></p>
		                    </div>
		                </div>

		              </li>
		              <li class="">
		              	<div class="row">
		                    <label for="facebook" class="col-lg-2">
		                        <i class="fab fa-facebook-f fa-2x fa-fw"></i>
		                    </label>
		                    <div class="col-lg-10">
		                      <p id="facebook" name="facebook"><?= $pr['facebook']; ?></p>
		                    </div>
		                </div>
		              </li>

		              <li class="">
		              	<div class="row">
		                    <label for="instagram" class="col-lg-2">
		                        <i class="fab fa-instagram fa-2x fa-fw"></i>
		                    </label>
		                    <div class="col-lg-10">
		                      <p id="instagram" name="instagram"><?= $pr['instagram']; ?></p>
		                    </div>
		                </div>
		              </li>

		            </ul>
		          </div>
		        </div>
	        <?php endforeach; ?>
	      </div>
	    </div>
	  </section>

	<div class="bawah">
	<center>
		<h1>F O R A</h1>
	</center>
	<br>
	<div class="alamat">
		<b>Alamat</b>
		<p>Fakultas Sains dan Teknologi UIN Raden Fatah Palembang
		<br>
		Kelurahan Pahlawan, Kecamatan Kemuning
		<br>
		Kota Palembang 30151</p>
	</div>
	<div class="link">
		<b>Link Eksternal</b>
		<br>
		<br>
		<a href="http://radenfatah.ac.id/">UIN Raden Fatah Palembang</a>
		<br>
		<a href="http://saintek.radenfatah.ac.id/">Fakultas Saintek UIN Raden Fatah</a>
		<br>
		<a href="http://startupdev.radenfatah.ac.id/">Startupdev UIN Raden Fatah</a>
	</div>
	</div>
	<style type="text/css">
		header{
			background:	#2e82af;
			text-align:center;
		}
		h2{
			padding-left: 20%;
			font-family: Helvetica;
		}
		.imgstatic{
			display:inline-block;
		}
		.accordion {
  			background-color: #eee;
  			color: #444;
  			cursor: pointer;
  			padding: 18px;
  			width: 100%;
  			border: none;
  			text-align: left;
  			outline: none;
  			font-size: 15px;
  			transition: 0.4s;
		}
		.aktif, .accordion:hover {
  			background-color: #ccc;
		}
		.accordion:after {
  			content: '\002B';
  			color: #777;
  			font-weight: bold;
  			float: right;
  			margin-left: 5px;
		}
		.aktif:after {
  			content: "\2212";
		}
		#panel {
  			padding: 0 18px;
  			background-color: white;
  			max-height: 0;
  			overflow: hidden;
  			transition: max-height 0.2s ease-out;
  			font-family: Helvetica;
		}
		.topik{
			background-color: white;
			padding-top: 3%;
			padding-bottom: 5%;
			padding-left: 20%;
			padding-right: 20%;
		}
		.isi{
			padding-left: 20%;
			font-family: Helvetica;
			padding-right: 20%;
		}
		.navatas {
  			overflow: hidden;
 		 	background-color: #333;
 		 	padding: 20px 0px;
		}
		.navatas a {
  			color: #f2f2f2;
  			text-align: center;
  			padding: 21px 16px;
  			text-decoration: none;
  			font-size: 17px;
  			font-family: Helvetica;
		}
		.navatas a:hover {
  			background-color: #ddd;
  			color: black;
		}
		.navatas a.aktif {
  			background-color: #4CAF50;
  			color: white;
		}
		body{
			background:#333;
			margin:0px;
		}
		.responsive {
  			width: 100%;
  			height: auto;
		}
		.bawah{
			background:#333;
			color: white;
			font-family: Helvetica;
			margin-bottom: 12%;
		}
		.alamat{
			float: left;
			padding-left: 15%;
		}
		.link{
			float: left;
			padding-left: 15%;
		}
		.link a{
			color: white;
		}
		.link a:link {
  			text-decoration: none;
		}
		.link a:hover {
			text-decoration: underline;
		}
		.link a:visited {
  			text-decoration: none;
		}
		.link a:active {
  			text-decoration: underline;
		}
	</style>

	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
</body>
</html>
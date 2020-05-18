<!DOCTYPE html>
<html>
<head>
	<title>F O R A - FAQ</title>
</head>
<body>
	<header>
	<a href="<?= base_url(''); ?>"><img src="<?= base_url('assets/'); ?>Logo_Fora_Small.png" href></a>
	<center>
		<div class="topnav">
	  		<a href="<?= base_url(''); ?>">Beranda</a>
	  		<a href="<?= base_url('home/tentangkami'); ?>">Tentang Kami</a>
	  		<a class="active" href="<?= base_url('home/faq'); ?>">FAQ</a>
	  		<a class="active" href="<?= base_url('auth'); ?>">Login<a>
		</div>
	</center>
	</header>
	<div class="topik">
		<button class="accordion">Apa itu Fora?</button>
  		<p id="panel">FORA adalah forum berbasis komunitas atau organisasi dimana tujuannya adalah memudahkan pembelajaran dan pengenalan untuk para pelajar dan mahasiswa dalam lingkup sebuah organisasi.</p>
  		<button class="accordion">Apa tujuan dibuatnya FORA?</button>
  		<p id="panel">Bertujuan agar menjadi tempat pembelajaran online serta FORA dapat membantu kita dalam mengatur organisasi</p>
  		<button class="accordion">Siapa saja yang bisa memakai FORA?</button>
  		<p id="panel">Semua anggota dan pengurus yang terdaftar pada organisasi bekerja sama dengan FORA</p>
  		<button class="accordion">Bagaimana cara registrasi FORA?</button>
  		<p id="panel">Anda tinggal melakukan pendaftaran akun pada halaman login website yang telah disediakan. Lalu hubungi admin terdekat untuk melakukan aktivasi Akun Anda!</p>
  		<button class="accordion">Bagaimana cara membuat topik baru?</button>
  		<p id="panel">Anda harus menjadi seorang admin atau pengurus. Lalu anda akan diberikan akses untuk membuat sebuah topik baru.</p>
  		<button class="accordion">Bagaimana cara menjadi pengurus atau admin?</button>
  		<p id="panel">Anda harus menjadi anggota terdaftar di organisasi yang bekerja sama dengan FORA.</p>
  		<button class="accordion">Bagaimana jika saya lupa kata sandi?</button>
  		<p id="panel">Laporkan masalah terkait kepada pengurus organisasi yang nantinya akan dilaporkan ke admin FORA</p>
	</div>
	<div class="footer">
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
		img{
			display:inline-block;
			float: center;
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
		.active, .accordion:hover {
  			background-color: #ccc;
		}
		.accordion:after {
  			content: '\002B';
  			color: #777;
  			font-weight: bold;
  			float: right;
  			margin-left: 5px;
		}
		.active:after {
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
		.topnav {
  			overflow: hidden;
 		 	background-color: #333;
 		 	padding: 20px 0px;
		}
		.topnav a {
  			color: #f2f2f2;
  			text-align: center;
  			padding: 21px 16px;
  			text-decoration: none;
  			font-size: 17px;
  			font-family: Helvetica;
		}
		.topnav a:hover {
  			background-color: #ddd;
  			color: black;
		}
		.topnav a.active {
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
		.footer{
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
	<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight) {
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  });
	}
</script>
</body>
</html>
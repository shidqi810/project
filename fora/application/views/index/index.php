<!DOCTYPE html>
<html>
<head>
	<title>F O R A</title>
</head>
<body>
	<header>
	<a href="<?= base_url(''); ?>"><img src="<?= base_url('assets/'); ?>Logo_Fora_Small.png" href></a>
	<center>
		<div class="topnav">
	  		<a class="active" href="<?= base_url(''); ?>">Beranda</a>
	  		<a href="<?= base_url('home/tentangkami'); ?>">Tentang Kami</a>
	  		<a href="<?= base_url('home/faq'); ?>">FAQ</a>
	  		<a class="active" href="<?= base_url('auth'); ?>">Login<a>
		</div>
	</center>
	</header>
	<img src="<?= base_url('assets/'); ?>Banner_Fora.png" alt="Banner" class="responsive">
	<style type="text/css">
		header{
			background:	#2e82af;
			text-align:center;
		}
		img{
			display:inline-block;
			float: center;
		}
		.topnav {
  			overflow: hidden;
  			padding: 20px 0px;
 		 	background-color: #333;
		}
		.topnav a {
  			color: #f2f2f2;
  			text-align: center;
  			padding: 20px 16px;
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
		footer{
			background:#333;
			color: white;
			font-family: Helvetica;
			margin-top: 3%;
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
</body>
<footer>
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
</footer>
</html>
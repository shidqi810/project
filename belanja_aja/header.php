<!-- penulis memisahkan header agar code isi selanjutnya menjadi pendek, dan tidak perlu melakukan pemanggilan config berulang ulang -->
<?php
	// digunakan untuk menjalankan file config.php ke dalam file ini, agar file yang memanggil header.php dapat langsung mengakses ke dalam database, karena di dalam config.php terdapat koneksi databse
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- tag link digunakan untuk memanggil framework css yaitu bootstrap yang telah dipersiapkan sebelumnya, dan juga ada untuk animasi yang menggunakan animate.css lalu icon yang menggunakan fontawesome.css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="animate/animate.css">

	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/fontawesome.css">

	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.slim.js"></script>
	<script src="js/bootstrap.js"></script>
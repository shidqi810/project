<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../animate/animate.css">

	<link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free/css/fontawesome.css">

	<script src="../js/bootstrap.bundle.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.slim.js"></script>
	<script src="../js/bootstrap.js"></script>
	<title>Halaman Admin</title>

	<?php
		// mengaktifkan session
		session_start();
		 
		// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
		if($_SESSION['status'] !="login"){
			header("location:../index.php");
		}

		require '../config.php';
	?>

	<nav class="navbar navbar-expand-lg navbar-light bg-blue">
		<!-- kita memnggil data yg berada di SESSION['name'] berdasarkan siapa yg login -->
	  <h4 class="navbar-brand font-weight-bolder text-white">(<?= $_SESSION['name'] ?>)</h4>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item mr-2">
	        <a class="nav-link text-white" href="index.php">Home</a>
	      </li>
	      <li class="nav-item mr-2">
	        <a class="nav-link text-white" href="data_pembelian_admin.php">Data Pembelian</a>
	      </li>
	      <li class="nav-item mr-2">
	        <a class="nav-link text-white" href="tentang_kami.php">Tentang Kami</a>
	      </li>
	      <li class="nav-item mr-2">
		    <a class="nav-link btn btn-danger text-white" href="logout.php">LOGOUT</a>
	      </li>
	    </ul>
	  </div>
	</nav>
</head>
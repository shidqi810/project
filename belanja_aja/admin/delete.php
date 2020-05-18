<?php
	// ../ digunakan untuk kembali 1 tingkat dari direktori sekarang
	include '../config.php';

	// variabel id yang bernilai GET id dari yg dikirimkan oleh url tadi
	// method GET menggunakan variable $_GET untuk menampung data/nilai.
	$id = $_GET['id'];

	// lalu kita menghapus dari tabel pembelian yg dimana jika id di dalam field pembelian itu bernilai id hasil kiriman url
	mysqli_query($koneksi, "DELETE FROM pembelian WHERE id='$id'");

	header("location:data_pembelian_admin.php");
?>
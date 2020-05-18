<?php 
	require 'fungsi.php';
	$nama_dosen = $_POST['nama_dosen'];
	$nip_dosen = $_POST['nip_dosen'];
	$gaji_dosen = $_POST['gaji_dosen'];
	 
	mysql_query("INSERT INTO user VALUES('','$nama_dosen','$nip_dosen','$gaji_dosen')");

	header("location:index.php?pesan=input");
?>
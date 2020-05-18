<?php
	include '../config.php';

	// untuk mengubah zona gmt ke arah jakarta (ibukota indonesia)
	ini_set('date.timezone', 'Asia/Jakarta');
	
	// menyimpan data kedalam variabel
	// function date digunakan untuk memanggil hari, bulan, tahun, jam, menit, detik saat form di inputkan
	$tanggal = date('d F Y, h:i:s');
	$nama_pembeli = $_POST['nama_pembeli'];
	$alamat = $_POST['alamat'];
	$pesanan = $_POST['pesanan'];
	$quantitas = $_POST['quantitas'];
	$harga = $_POST['harga'];
	$total = $_POST['quantitas'] * $_POST['harga'];
	$komentar = $_POST['komentar'];
	$rating = $_POST['rating'];

	// jika ada nilai di dalam checkbox bayar. maka variabel bayar akan bernilai 1. jika tidak akan bernilai 0
	if(isset($_POST['bayar']) ) {
    	$bayar = 1;
    }
    else{
        $bayar = 0;
    }
	
	// query SQL untuk insert data
	mysqli_query($koneksi,"insert into pembelian values('','$tanggal','$nama_pembeli','$alamat','$pesanan','$quantitas','$harga','$total','$komentar','$rating','$bayar')");

	header("location:data_pembelian_admin.php");
?>
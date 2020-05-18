<?php
	include 'config.php';
	
	// menyimpan data kedalam variabel
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	// query SQL untuk insert data. memanggil $koneksi. lalu memberi perintah INSERT INTO user untuk memasukkan data ke tabel user. lalu value atau nilai yang dibawa itu sesuai dengna urutan yang ada di field database user, yang kosong itu berarti id, karena id sudah dibuat auto inrement. lalu yang lainnya di ambil dari variabel di atas yg isinya dari inputan
	mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username','$password')");

	// mengalihkan ke halaman index.php
	header("location:index.php");
?>
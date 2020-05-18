<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa dengan GET</title>
</head>
<body>
	<h1>Detail Mahasiswa</h1>
	<ul>
		<li>
			<img width="140px" height="140px" src="img/<?= $_GET["gambar"] ?>">
		</li>
		<li><?= $_GET["nama"] ?></li>
		<li><?= $_GET["nim"] ?></li>
		<li><?= $_GET["email"] ?></li>
		<li><?= $_GET["jurusan"] ?></li>
	</ul>

	<a href="latihan2.php">Kembali ke halaman sebelumnya</a>
</body>
</html>
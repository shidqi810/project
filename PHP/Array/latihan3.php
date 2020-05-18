<?php
	$i = 10;
	$mahasiswa = [
				["Shidqi" , "1820803039", "sistem informasi", "shidqi810@gmail.com"],
				["Amin" , "1820803040", "sistem informasi", "amin@gmail.com"],
				["ridho" , "1820803041", "sistem informasi", "ridho@gmail.com"]
				];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<ul>
		<?= $i ?>
		<?php foreach ($mahasiswa as $mhs): ?>
			<li>Nama : <?= $mhs[0]; ?></li>
			<li>NIM : <?= $mhs[1]; ?></li>
			<li>Jurusan : <?= $mhs[2]; ?></li>
			<li>Email : <?= $mhs[3]; ?></li>
			<br>
		<?php endforeach ?>
	</ul>
</body>
</html>
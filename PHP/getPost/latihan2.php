<?php
	// variabel super global
	// array assosiative
	// Milik php

	// cara mengisi variabel $_GET

	$mahasiswa = [
					[
						"nama" => "Muhammad Shidqi",
						"nim" => "1820803039",
						"email" => "m.shidqi810@gmail.com",
						"jurusan" => "Sistem Informasi",
						"gambar" => "gambar.png"
					],
					[
						"nama" => "Budi",
						"nim" => "1820803090",
						"email" => "budi@gmail.com",
						"jurusan" => "Kimia",
						"gambar" => "gambar2.png"
					],
					[
						"nama" => "Dyah",
						"nim" => "1820803038",
						"email" => "dyah@gmail.com",
						"jurusan" => "Sistem Informasi",
						"gambar" => "gambar3.png"
					]
				];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa dengan GET</title>
</head>
<body>
	<h1>Data Mahasiswa dengan GET</h1>

	<?php foreach ($mahasiswa as $mhs): ?>
		<ul>
			<li>
				<a href="latihan3.php?nama=<?= $mhs["nama"] ?>&gambar=<?= $mhs["gambar"] ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>"><?= $mhs["nama"] ?></a>
			</li>
		</ul>
	<?php endforeach ?>
</body>
</html>
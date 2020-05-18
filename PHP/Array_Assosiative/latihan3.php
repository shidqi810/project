<?php
	$mahasiswa = [
					["nama"=>"Muhammad Shidqi",
					"nim"=>"1820803039",
					"email"=>"shidqi810@gmail.com",
					"jurusan"=>"Sistem Informasi",
					"gambar"=>"gambar.png"],

					["nama"=>"Budi",
					"nim"=>"1820803039",
					"email"=>"shidqi810@gmail.com",
					"jurusan"=>"Sistem Informasi",
					"gambar"=>"gambar2.png"],

					["nama"=>"Angga",
					"nim"=>"1820803039",
					"email"=>"shidqi810@gmail.com",
					"jurusan"=>"Sistem Informasi",
					"gambar"=>"gambar3.png"]
				];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs): ?>
		<ul>
			<li><?= $mhs["nama"]; ?></li>
			<li><?= $mhs["nim"]; ?></li>
			<li><?= $mhs["jurusan"]; ?></li>
			<li>
				<img width="140px" height="140px" src="img/<?= $mhs["gambar"] ?>">
			</li>
		</ul>
	<?php endforeach ?>
</body>
</html>
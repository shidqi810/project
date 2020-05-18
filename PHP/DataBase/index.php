<?php
	require 'fungsi.php';
	

	$mhs = query("SELECT * FROM mahasiswa");
	$dsn = query("SELECT * FROM dosen");
?>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<a href="">Tambahkan Data</a>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mhs as $row): ?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"] ?>" width="70"></td>
			<td><?= $row["nip"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach ?>
	</table>

	<hr>
	<br>

	<h1>Ini Dosen</h1>

	<table cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Nip</th>
			<th>Gaji</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($dsn as $dsn): ?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
			</td>
			<td><?= $dsn["nama_dosen"] ?></td>
			<td><?= $dsn["nip_dosen"] ?></td>
			<td><?= $dsn["gaji_dosen"] ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach ?>
	</table>

	<form action="input.php" method="post">
	  <div class="form-group">
	    <label for="nama_dosen">Nama Dosen</label>
	    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
	  </div>
	  <div class="form-group">
	    <label for="nip_dosen">Nip</label>
	    <input type="text" class="form-control" id="nip_dosen" name="nip_dosen">
	  </div>
	  <div class="form-group">
	    <label for="gaji">Gaji</label>
	    <input type="text" class="form-control" id="gaji_dosen" name="gaji_dosen">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>
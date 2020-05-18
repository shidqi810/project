<?php
	include 'header_admin.php';
?>

<body>
	<div class="container mb-4">
		<h1 class="animated fadeInDown slow text-center mt-2 text-pink bayangan2">Simulasi Pembelian User</h1>
		<form action="tambah.php" method="post">
			<div class="form-group">
				<label for="id_nama_pembeli">Nama Pembeli*</label>
				<textarea id="id_nama_pembeli" class="form-control" name="nama_pembeli" placeholder="Masukkan Nama Pembeli"></textarea>
			</div>

			<div class="form-group">
				<label for="id_alamat">alamat Pembeli*</label>
				<textarea id="id_alamat" class="form-control" name="alamat" placeholder="Masukkan Alamat Pembeli"></textarea>
			</div>

			<div class="form-group">
				<label for="id_pesanan">Pesanan Pembeli*</label>
				<textarea id="id_pesanan" class="form-control" name="pesanan" placeholder="Masukkan Pesanan Pembeli"></textarea>
			</div>

			<div class="form-group">
				<label for="id_quantitas">quantitas Pembeli*</label>
				<input type="number" id="id_quantitas" class="form-control" name="quantitas" placeholder="Masukkan quantitas Pembeli"></input>
			</div>

			<div class="form-group">
				<label for="id_harga">harga Pembeli*</label>
				<input type="number" id="id_harga" class="form-control" name="harga" placeholder="Masukkan harga Pembeli"></input>
			</div>

			<div class="form-group">
				<label for="id_komentar">komentar Pembeli*</label>
				<textarea id="id_komentar" class="form-control"name="komentar" placeholder="Masukkan komentar Pembeli"></textarea>
			</div>

			<div class="form-group">
				<label for="id_rating">rating Pembeli*</label>
				<input type="number" id="id_rating" class="form-control"name="rating" placeholder="Masukkan rating Pembeli"></input>
			</div>

			<!-- inputan bertipe checkbox -->
			<input type="checkbox" name="bayar"> Apakah User Sudah Membayar?
			<br>

			<button type="submit" class="mt-2 btn btn-success">
			    Simpan
			</button>
		</form>
	</div>
</body>
</html>
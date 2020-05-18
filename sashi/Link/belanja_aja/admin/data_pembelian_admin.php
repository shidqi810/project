<?php 
	// memanggil header_admin.php yang isinya adalah tittle, link css, js, serta include config.php untuk koneksi database
	include 'header_admin.php';

	// membuat $pembelian yang isinya adalah sebuah function query yang kita buat di dala config.php lalu parameter dari function tersebut adalah SELECT * (seluruhnya) FROM tabel pembelian ORDER BY id lalu melihat patokan dari id untuk membuat nya DESC atau menurun. Jadi data yg dipanggil mngurut dari id yang besar ke yang kecil
	$pembelian = query("SELECT * FROM pembelian ORDER BY id DESC");
?>

<body>
	<!-- mr untuk mengatur margin right ml margin left -->
	<div class="mr-5 ml-5">
		<h1 class="animated fadeInDown slow text-center mt-2 text-pink bayangan2">Data Pembelian User</h1>

		<!-- jika ingin simulasi pembelian yg baru, kita koneksikan ke dalam tambah_data.php. lalu ada class fas fa-plus yang berfungsi untuk menampilkan icon di fontawesome yaitu icon plus -->
		<a class="animated fadeInLeft slower" href="tambah_data.php"><i class="mb-4 fas fa-plus"></i> Add New</a>

		<!-- kita membuat bordernya 1 yang berarti ada border. jika 0 tidak ada lalu border tersebut berwarna putih dengan class border-white lalu class table-hover berfungsi untuk membuat table nya rapi, seperti margin, padding dan peletakkan text lainnya. lalu cellspacing berfungsi untuk mengatur jarak dari kolom dan baris yg satu dengan yg lainnya -->
		<!-- mulai tag table -->
		<table border="1" class="animated slideInRight slower border border-white table table-hover" width="1800px" cellspacing="0">
			<!-- table bagian kepala -->
			<thead class="bg-pink text-white text-center">
				<tr>
					<!-- colspan berfungsi untuk menyatukan kolom dari tabel yg ada (merge) -->
				    <th class="pt-3 pb-3" colspan="11">Data Transaksi User</th>
				</tr>
				<tr>
					<!-- rowspan berfungsi untuk menyatukan baris dari tabel yg ada (merge) -->
					<th rowspan="2">No.</th>
					<th rowspan="2">Tanggal</th>
					<th rowspan="2">Nama Pembeli</th>
					<th rowspan="2">Alamat Pembeli</th>
					<th rowspan="2">Barang Pesanan</th>
					<th rowspan="2">Quantitas</th>
					<th rowspan="2">Harga</th>
					<th rowspan="2">Total</th>
					<th colspan="2">Penilaian</th>
					<th rowspan="2">Aksi</th>
				</tr>
				<tr>
					<th>Komentar</th>
					<th>Rating</th>
				</tr>
			</thead>

			<!-- table bagian badan -->
			<tbody>
				<!-- membuat variabel i = 1 untuk dipakai sebagai penambahan angka menaik untuk nomor tabelnya. lalu variabel jumlah = 0 berfungsi untuk menjumlahkan nilai dari variabel total  -->
				<?php $i = 1; $jumlah = 0; ?>

				<!-- lakukan pengulangan sampai ke semua field databse dari variabel pembelian yang dimisalkan menjadi beli -->
				<?php foreach ($pembelian as $beli): ?>

					<!-- jika bayar nya bernilai 1 berarti dia telah membayar, dan warna kolom akan menjadi warna hijau. dan jika bernilai 0 berarti belum membayar dan akan menjadi warna merah -->
					<?php if ($beli['bayar'] == 1): ?>
					<tr class="bg-success text-white">
					<?php endif ?>

					<?php if ($beli['bayar'] == 0): ?>
					<tr class="bg-danger text-white">
					<?php endif ?>

						<td class="text-center" width="10px">
							<!-- mencetak variabel i yang dimulai dari 1 hingga n tabel -->
							<?= $i ?>
						</td>

						<td width="100px">
							<!-- mencetak variabel beli yang di dapat dari variabel pembelian yang berisikan select dari database pembelian. lalu kita panggil key dari array assosiative nya, yaitu field tanggal yang ada di dalam database -->
							<?= $beli['tanggal'] ?>
						</td>

						<td width="100px">
							<?= $beli['nama_pembeli'] ?>
						</td>

						<td width="100px">
							<?= $beli['alamat'] ?>
						</td>

						<td width="100px">
							<?= $beli['pesanan'] ?>
						</td>

						<td width="100px">
							<?= $beli['quantitas'] ?>
						</td>

						<td width="100px">
							<!-- number_format adalah sebuah function yang disediakan oleh php untuk membuat tampilan dari angka kita menjadi lebih rapi dengan bantuan titik dan koma -->
							Rp. <?= number_format($beli['harga'], 0, ',', '.') ?>
						</td>

						<td width="100px">
							Rp. <?= number_format($beli['total'], 0, ',', '.') ?>
						</td>
						
						<!-- jika bayar == 1 yang berarti user telah membayar, maka variabel jumlah yang awalnya bernilai 0 tadi akan berisikan penjumlahan diri dari setiap variabel $beli['total'] kolom total -->
						<?php if ($beli['bayar'] == 1): ?>
							<?php $jumlah += $beli['total']; ?>
						<?php endif ?>

						<td width="100px" class="text-center">
							<?= $beli['komentar'] ?>
						</td>

						<td width="40px" class="text-center">
							<?= $beli['rating'] ?>
						</td>

						<td width="30px" class="text-center">
							<!-- sebuah icon delete yang akan menuju ke file delete.php jika ditekan, lalu saat ditekan dia akan membawa data melalui url dengan menggunakan tanda tanya. lalu kita membuat variabel baru bernama id, yang isinya adalah dari $beli['id'] -->
							<!-- method GET akan menampilkan data/nilai pada URL, kemudian akan ditampung oleh action. -->
							<a href="delete.php?id=<?= $beli['id']; ?>" class="btn btn-small text-white"><i class="fas fa-trash"></i></a>
						</td>
					</tr>

				<?php $i++; ?>
				<?php endforeach ?>
					<tr class="bg-pink text-white font-weight-bold">
						<td colspan="7">TOTAL</td>
						<!-- disini kita menampilkan hasil dari penjumlahan dari datanya -->
						<td colspan="4">Rp. <?= number_format($jumlah, 0, ',', '.') ?></td>
					</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
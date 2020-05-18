<?php
	// variabel $koneksi melakukan koneksi ke databse mysqli parameter pertama adalah nama host, lalu username databse, lalu password database, dan yang terakhir adalah nama dari database yang kita buat
	$koneksi = mysqli_connect("localhost", "root", "", "belanja_aja");

	// membuat sebuah function agar kita tidak perlu membuat perintah panjang2 lagi untuk membuat sebuah foreach dengan fetch array di dalam codingan yg lain dengan nilai parameter yang kita tentukan
	function query($query) {
		// untuk mencari variabel koneksi secara global, sebab di dalam function query, $koneksi tidak ada. jadi kita harus mencari nya secara global
		global $koneksi;

		// membuat sebuah variabel $result yg berisi kan sebuah function mysqli_query yang digunakan untuk memberikan perintah query ke MySQL server, adapun perintah SQL yang digunakan seperti SELECT, INSERT dan DELETE. dengan nilai parameter nya adalah sebuah $koneksi untuk menghubungkan ke dalam database. dan juga $query yang kita inputkan secara terpisah nanti
		$result = mysqli_query($koneksi, $query);

		// bikin array kosong
		$rows = [];

		// mysqli_fetch_array() Fungsi ini akan menghasilkan associative array dengan key berupa nama dan numerik field dari tabel.
		// dibuat pengulangan untuk mengisi array yang kosong tadi dengan nilai2 key dari array assosiative field
		while ($row = mysqli_fetch_array($result)) {
			$rows[] = $row;
		}
		// kembalikan nilai dari key yang telah di masukkan tadi agar bisa digunakan
		return $rows;
	}
?>
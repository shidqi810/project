<?php
	// ambil (fetch) dari objek result
	// mysqli_fetch_row()
	// mysqli_fetch_assac()
	// mysqli_fetch_array()
	// mysqli_fetch_object()
	
	// koneksi ke databse mysqli
	$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

	// ambil data dari tabel mahasiswa / query
	
	function query($query) {
		global $koneksi;
		$result = mysqli_query($koneksi, $query);

		// bikin kotak kosong
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
?>
<?php
	$koneksi = mysqli_connect("localhost", "root", "", "sashi");

	function query($query) {
		global $koneksi;

		$result = mysqli_query($koneksi, $query);

		$rows = [];

		while ($row = mysqli_fetch_array($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
?>
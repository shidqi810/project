<!-- array adalah variabel yg mampu menampung banyak nilai
	array cara lama -->
<?php
	$hari = array("senin", "selasa", "rabu");
	//array cara lama

	$bulan = ["januari", "februari", "maret"];
	// array cara Baru

	$array = ["senin", 1234, true];

	var_dump($hari);
	
	// menambahkan elemen baru pada array
	$hari[] = "kamis";

	echo "<br>";

	var_dump($hari);
?>
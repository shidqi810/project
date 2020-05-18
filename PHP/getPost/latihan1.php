<?php
	// variabel scoope (ruang lingkup sebuah variabel)
	$x = 10;

	// buat function
	function tampil() 
	{
		global $x;
		echo $x;
	}

	tampil();
?>
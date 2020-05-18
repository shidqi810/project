<?php 

	// kita masih memulai session yang kita bawa tadi, agar sessionnya bisa kita hancurkan
	session_start();

	// lalu hancurkan session yang ada, agar tidak bisa masuk ke dalam menu yang harus login terlebih dahulu
	session_destroy();
	header("location:../index.php");
?>
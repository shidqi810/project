<?php
	require 'Animal.php';

	require 'Ape.php';

	require 'Frog.php';
	
	$sheep = new animal("Shaun");

	echo "<br>";
	echo $sheep->legs; // 2
	echo "<br>";
	echo $sheep->cold_blooded; // false

	echo "<br> <br>";

	$sungokong = new Ape("kera sakti");
	echo "<br>";
	echo $sungokong->legs = 4;
	echo "<br>";
	$sungokong->yell(); // "Auooo"

	echo "<br> <br>";
	
	$kodok = new Frog("Buduk");
	echo "<br>";
	echo $kodok->legs;
	echo "<br>";
	$kodok->jump(); // "Hop Hop"
?>
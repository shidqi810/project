<?php
	$angka = [3, 4, 5, 6, 7, 8, 9, 10];
?>

<!DOCTYPE html>
<html>
<head>
	<title>latihan2</title>
	<style type="text/css">
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<!-- menggunakan for biasa -->
	<?php for ($i=0; $i < count($angka); $i++) { ?>
		<div class="kotak"><?= $angka[$i]; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- menggunakan foreach -->
	<?php foreach ($angka as $a): ?>
		<div class="kotak"><?= $a; ?></div>
	<?php endforeach ?>

</body>
</html>
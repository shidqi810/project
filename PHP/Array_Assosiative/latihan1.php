<!DOCTYPE html>
<html>
<head>
	<title>Array Assosiative</title>
	<style type="text/css">
		.kotak {
			width: 50px;
			height: 50px;
			background-color: silver;
			line-height: 50px;
			text-align: center;
			margin: 3px;
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<?php 
		$angka = [
					[1, 2, 3],
					[4, 5, 6],
					[7, 8, 9]
				];
	?>

	<?php foreach ($angka as $a): ?>
		<?php foreach ($a as $b): ?>
			<div class="kotak"><?= $b; ?></div>
		<?php endforeach ?>
	<?php endforeach ?>
</body>
</html>
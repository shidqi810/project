<?php
	// cek apakah tombol submit sudah ditekan atau belom
	if (isset($_POST["submit"]))
	{
		// cek username dan password
		if ($_POST["username"] == "admin" && $_POST["password"] == "123")
		{
			header("Location: admin.php");
			exit;
		}
		else
		{
			$error = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if (isset($error)) { ?>
		<p style="color:red;">Username dan Password salah!!!</p>
	<?php } ?>

	<ul>
		<form action="" method="post">
			<li>
				<label for="username">Masukkan Usernam : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Masukkan Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="submit">Kirim</button>
			</li>
		</form>
	</ul>
</body>
</html>
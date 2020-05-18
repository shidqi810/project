<?php
	include 'config.php';
	 
	// mengaktifkan session php agar variabel session dapat disimpan dan digunakan
	session_start();

	// menangkap data yang dikirim dari form dengan menggunakan POST lalu menangkap variabel yang bernama 'usernama' dan 'password' dari form html tadi. lalu untuk password, setelah inputan tersebut ditangkap. akan langsung diubah kedalam enkripsi yang berbentuk md5
	// Method POST menggunakan variable $_POST untuk menampung data/nilai.
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	 
	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
	
	// menghitung banyaknya data yang ditemukan dan sesuai agar bisa melakukan login dengan menggunakan mysqli_num_rows dengan parameter nya adalah $data
	$cek = mysqli_num_rows($data);

	// Fungsi ini akan menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik.
	$user = mysqli_fetch_array($data);

	// jika banyaknya lebih dari 0, brrti ada data yang cocok dari inputan user dengan database yang ada
	if($cek > 0){
		// kita membuat sebuah session yang akan di bawa ke dalam halaman admin nanti, yang berupa session['name'], session['username'], dan session['status']
		$_SESSION['name'] = $user['nama'];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";

		// lalu diarahkan ke dalam folder admin dan menuju file index.php
		header("location:admin/index.php");
	}

	// jika tidak cocok antara inputan user dan database. maka akan kembali ke dalam index.php dan membawa variabel pesan yang berisi gagal melalui url
	else{
		header("location:index.php?pesan=gagal");
	}
?>
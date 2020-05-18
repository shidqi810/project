	<!-- digunakan untuk memanggil header.php yang berisikan link css, js serta file config.php yang melakukan koneksi ke dalam database -->
	<?php include 'header.php'; ?>
	<title>Halaman Login</title>
</head>

<!-- class bg-blue adalah sebuah class yg dibuat baru -->
<body class="bg-blue">
	<!-- container berfungsi untuk membuat isi konten yg ada menjadi di tengah layar dan tidak menyenggol tepi layar -->
	<div class="container">
		<!-- text-white berfungsi untuk membuat text berwarna putih. font-weight-bolder membuat text BOLD. text-center membuat text di tengah mt-4 membuat margin top dengan parameter 4 lalu animated bounceInLeft membuat animasi yang memantul masuk dari kiri -->
		<h1 class="text-white font-weight-bolder text-center mt-4 bayangan animated bounceInLeft">
	     	Sistem Informasi Akuntansi Belanja_aja
	    </h1>

	    <!-- row untuk membuat baris. justify-content-center membuat konten di tengah -->
		<div class="row justify-content-center">

			<!-- membuat konten mengambil setengah bagian dari full baris row (12) sehingga membuat nya ada di tengah -->
	      <div class="col-lg-6">

	      	<!-- membuat margin bagian horizontal (x) menjadi auto untuk hp juga -->
	        <div class="mx-auto">
	            <!-- membuat sebuah card atau kotak untuk wadahnya. tapi kita tidak kasih warna sehingga tidak terlihat. p-0 membuat sebuah padding kanan kiri atas bawah dengan parameter 0 -->
	         	<div class="card-body p-0">
		            <div class="row">
		             	<div class="col-lg">
			                <div class="pt-2 pl-5 pr-5 text-center">

			                	<!-- membuat animasi rollIn dengan tempo yang slow. lalu membuat gambar menjadi bulat dengan reounded-circle dan menetapkan ukuran gambar sebesar 25% dengan w-25 -->
			                	<img class="animated rollIn slow rounded-circle w-25 mb-3" src="1324.png">

			                	<!-- membuat sebuah form dengan methode POST lalu hasil dari form tersebut akan di eksekusi ke dalam file login.php. lalu onsubmit berfungsi untuk mengembalikan nilai function validasi dari javasript yang ada di bawah -->
			                	<!-- Method POST akan mengirimkan data atau nilai langsung ke action untuk ditampung, tanpa menampilkan pada URL. -->
			                 	<form class="text-white" method="post" action="login.php" onsubmit="return validasi()">

			                 		<!-- form-group adalah class yang membuat tampilan form yang berisi juga margin. lalu delay-1s untuk memnuat animasi tersebut delay selama 1 detik -->
				                    <div class="form-group animated bounceInDown delay-1s">
				                    	<!-- membuat sebuah inputan dengan id dan name nya adalah username untuk membuat hasil dari inputan tersebut dapat ditangkap di dalan login.php dengan menggunakan post melalui bantuan name. placeholder berfungsi untuk membuat text di dalam form -->
				                      <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Anda...">
				                    </div>

				                    <div class="form-group animated bounceInDown slow delay-1s">
				                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Sandi Anda...">
				                    </div>

				                 	<div class="float-left mb-3 animated jackInTheBox delay-2s">
				                 		<a class="text-white" href="registrasi.php">Buat Akun Baru</a>
				                 	</div>

				                 	<!-- membuat sebuah button yang bertipe submit (dapat mengirimkan data dari form) lalu ada class btn-block yang berfungsi untuk membuat button tersebut memenuhi block yang ada. yang dalam hal ini adalah sebuah card (kotak yang berada di tengah layar dan telah di batasi) -->
				                 	<button type="submit" class="animated lightSpeedIn slow delay-2s btn untuk-login btn-block text-white">
				                    	Login
				                    </button>
			                 	</form>
			                </div>
		             	</div>
		            </div>
	         	</div>
	        </div>

	      </div>
	    </div>
	</div>
</body>
</html>

<script type="text/javascript">
	function validasi() {
		// sebuah function untuk membuat validasi dari form yang ada

		// menangkap inputan dari user dengan menggunakan id form
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		

		// jika var username dan password yang berisikan inputan tadi tidak kosong, maka form tersebut akan bernilai true
		if (username != "" && password!="") {
			return true;
		}

		// dan jika kosong akan berisi false dan muncul alert
		else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
<?php include 'header.php'; ?>
	<title>Halaman Registrasi</title>
</head>
<body class="bg-blue">
	<div class="container">

		<!-- class bayangan untuk memberi sebuah bayangan kepada text -->
		<h1 class="text-white font-weight-bolder text-center mt-4 bayangan animated bounceInLeft">
	     	Registrasi Akun
	    </h1>

		<div class="row justify-content-center">

	      <div class="col-lg-6">

	        <div class="mx-auto">
	         	<div class="card-body p-0">
	            <!-- Nested Row within Card Body -->
		            <div class="row">
		             	<div class="col-lg">
			                <div class="pt-2 pl-5 pr-5 text-center">
			                	<img class="animated rollIn slow rounded-circle w-25 mb-3" src="1324.png">

			                 	<form class="user text-white" method="post" action="registrasi_save.php" onsubmit="return validasi()">
			                 		<div class="form-group animated bounceInDown delay-1s">
				                      <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama Anda...">
				                    </div>

				                    <div class="form-group animated bounceInDown slow delay-1s">
				                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username Anda...">
				                    </div>

				                    <div class="form-group animated bounceInDown delay-2s">
				                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Sandi Anda...">
				                    </div>

				                 	<button type="submit" class="animated lightSpeedIn slow delay-2s btn untuk-login btn-block text-white">
				                    	Regsitrasi
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
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
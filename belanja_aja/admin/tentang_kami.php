<?php
	include 'header_admin.php';

	$about = query("SELECT * FROM about");
?>

<body>
	<div class="container mb-4 text-pink">

		<h1 class="animated fadeInDown slow text-center mt-2 bayangan2">Biodata Team</h1>
		<div class="row">
		   	<?php foreach ($about as $abt): ?>
			    <div class="col-lg-4 mx-auto ">
			        <div class="animated flipInY slow shadow rounded pl-3 pr-3 pb-2">
			         	<div class="animated zoomIn slower text-center">
			         		<!-- memanggil variabel abt dengan key 'gambar' -->
			            	<img class="w-75 rounded-circle" src="img/<?= $abt['gambar'] ?>" alt="">
	              		</div>
	              		<div class="animated bounceInRight delay-1s">
		              		<label for="name">Nama Lengkap : </label>
			            	<h5 class="font-weight-bold" id="name"><?= $abt['nama_lengkap'] ?></h5>
			            </div>

			            <div class="animated bounceInLeft slower delay-1s">
			            	<label for="motto">Motto : </label>
			            	<p class="font-weight-bold" id="motto"><?= $abt['motto'] ?></p>
			            </div>

			            <ul class="list-inline social-buttons">

			              <li class="animated bounceInRight delay-2s">
			              	<div class="row">
			                    <label for="whatsapp" class="col-lg-2">
			                    	<!-- memanggil icon dari font awesome. class fa-fw berguna untuk membuat konten berada di tengah -->
			                        <i class="fab fa-whatsapp fa-2x fa-fw"></i>
			                    </label>
			                    <div class="col-lg-10">
			                      <p class="font-weight-bold" id="whatsapp"><?= $abt['wa'] ?></p>
			                    </div>
			                </div>

			              </li>
			              <li class="animated bounceInLeft slower delay-2s">
			              	<div class="row">
			                    <label for="facebook" class="col-lg-2">
			                        <i class="fab fa-facebook-f fa-2x fa-fw"></i>
			                    </label>
			                    <div class="col-lg-10">
			                      <p class="font-weight-bold" id="facebook"><?= $abt['fb'] ?></p>
			                    </div>
			                </div>
			              </li>

			              <li class="animated bounceInRight delay-3s">
			              	<div class="row">
			                    <label for="instagram" class="col-lg-2">
			                        <i class="fab fa-instagram fa-2x fa-fw"></i>
			                    </label>
			                    <div class="col-lg-10">
			                      <p class="font-weight-bold" id="instagram"><?= $abt['ig'] ?></p>
			                    </div>
			                </div>
			              </li>

			            </ul>
			        </div>
			    </div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html
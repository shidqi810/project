        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      	<h1 class="text-dark font-weight-bold"><?= $title; ?></h1>

        <?= $this->session->flashdata('message'); ?>

        <br>
		<hr class="divider">
		<br>

        <h3>Upload Soal</h3>
		<div class="p-3 mb-2 bg-info text-white rounded">
	        <?= form_open_multipart('user/fisika'); ?>
	  			<div class="form-group">
	  				<textarea type="text" class="form-control" cols="40" rows="5" placeholder="Penjelasan Soal" id="soal" name="soal"></textarea>
	  				<?= form_error('soal', '<small class="text-white ">', '</small>'); ?>
	  			</div>
	  			<tr>
		  			<th scope="col">
		  				<button type="submit" class="btn btn-primary">Submit</button>
		  				<label for="foto">
		  					<i class="ml-3 far fa-images fa-lg"></i>
		  				</label>
		  				<input type="file" style="display: none;" id="foto" name="foto"/>
		  			</th>
		  		</tr>
			</form>
		</div>

		<?php
          $sql  = "SELECT *
          			FROM `fis`
	        		";
          $fiss = $this->db->query($sql)->result_array();
        ?>

        <?php
	        $sqlKomen = "SELECT *
	        FROM `fis_komen`
			";
	        $komen = $this->db->query($sqlKomen)->result_array();
	    ?>

		<br>
		<hr class="divider">
		<br>

		<?php foreach($fiss as $fs) : ?>

			<div class="p-3 mb-5 border bg-white text-dark rounded">
				<div class="row mb-3">
					<img class="w-25 col-sm-1 img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $fs['fis_image']; ?>">	
					<span class="text-gray-600 font-weight-bold"><?= $fs['fis_name']; ?></span>
				</div>
				<small class="text-gray-600 mt-0 mb-1"><?= date('d F Y H:i', $fs['tanggal']); ?> WIB</small>
				<hr class="divider">
		 
		  			<?php if($fs['foto'] != null) : ?>
						<a href="<?= base_url('assets/fisika/') . $fs['foto']; ?>"><img class="col-sm-3 img-thumbnail" src="<?= base_url('assets/fisika/') . $fs['foto']; ?>"></a>
					<?php endif ; ?>
		  			<p class="mt-2" cols="40" rows="5"><?= $fs['soal']; ?>		  		

		  		<div class="p-3 mb-2 ml-3 border border-success bg-light text-dark rounded">
		  			<h4>Jawaban / Komentar : </h4>

		  			<?php foreach($komen as $km) : ?>
						<?php if($km['komen_id'] == $fs['id']) : ?>
							<div class="pl-3 pt-3 mb-3 border bg-white text-dark rounded">
								<div class="row mb-1">
									<img class="w-25 col-sm-1 img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $km['komen_image']; ?>">	
									<span class="text-gray-600 font-weight-bold"><?= $km['komen_name']; ?></span>
									<br>
								</div>
								<small><?= date('d F Y. H:i', $km['tanggalk']); ?> WIB</small>
								<hr class="divider">
								<?php if($km['fotok'] != null) : ?>
									<a href="<?= base_url('assets/fisika/komen/') . $km['fotok']; ?>"><img class="col-sm-3 img-thumbnail" src="<?= base_url('assets/fisika/komen/') . $km['fotok']; ?>"></a>
								<?php endif ; ?>
								<p cols="40" rows="5"><?= $km['soalk']; ?>
							</div>
						<?php endif ; ?>
			  		<?php endforeach; ?>

			        <?= form_open_multipart('user/komen'); ?>
			  			<div class="form-group">
			  				<input type="hidden" id="komen_id" name="komen_id" value="<?= $fs['id']; ?>">
			  				<textarea type="text" class="form-control" cols="40" rows="5" placeholder="Tulis kan Jawaban Atau Komentar Anda" id="soalk" name="soalk"></textarea>
			  				<?= form_error('komen', '<small class="text-white ">', '</small>'); ?>
			  			</div>
			  			<tr>
				  			<th scope="col">
				  				<button type="submit" class="btn btn-primary">Submit</button>
				  				<label for="fotok">
				  					<i class="ml-3 text-dark far fa-images fa-lg"></i>
				  				</label>
				  				<input class="text-dark" type="file" id="fotok" name="fotok"/>
				  			</th>
				  		</tr>
					</form>
				</div>
			</div>
		<?php endforeach; ?>


        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->
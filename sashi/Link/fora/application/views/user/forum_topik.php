        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <?php
          $sql  = "SELECT *
          			FROM `halaman_topik`
	        		";
          $halaman = $this->db->query($sql)->result_array();
        ?>

      	<h1 class="text-dark font-weight-bold"><?= $title; ?></h1>

        <?= $this->session->flashdata('message'); ?>

        <br>
        <div class="btn-group">
		  <?= form_open_multipart('user/forum_topik'); ?>
			  <select class="btn btn-primary dropdown-toggle" id="id_hal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="id_hal">
			    Pilih Topik
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  		<option class="text-white dropdown-item mb-2" href="#">- pilih topik -</option>
			  	<?php foreach($halaman as $hal) : ?>
				    <option class="text-white dropdown-item mb-2" href="" value="<?= $hal['id_hal']; ?>"><?= $hal['nama_topik']; ?></option>
				<?php endforeach; ?>
			  </div>
			  </select>
			  <button class="btn btn-primary ml-4" type="submit">Pindah Topik</button>
		  	</form>
		</div>
		<hr class="divider">
		<br>

		<?php
		$id_hal = $this->input->post('id_hal');
          $sql  = "SELECT *
          			FROM `for` WHERE for_id = '$id_hal'
          			ORDER BY `id` DESC
	        		";
          $forr = $this->db->query($sql)->result_array();
        ?>

        <?php
	        $sqlKomen = "SELECT *
	        FROM `for_komen`
			";
	        $komen = $this->db->query($sqlKomen)->result_array();
	    ?>

		<?php foreach($forr as $fr) : ?>

			<div class="p-3 mb-5 border bg-white text-dark rounded">
				<?php if($user['id'] == $fr['for_user']) : ?>
					<?php echo anchor('user/hapus/'.$fr['id'],'<i class="float-right fas fa-trash"></i>'); ?>
				<?php endif ; ?>

				<div class="row mb-3">
					<img class="w-25 col-sm-1 img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $fr['for_image']; ?>">	
					<span class="text-gray-600 font-weight-bold"><?= $fr['for_name']; ?></span>
				</div>
				<small class="text-gray-600 mt-0 mb-1"><?= date('d F Y H:i', $fr['tanggal']); ?> WIB</small>
				<h4 class="font-weight-bold">Judul Topik : <?= $fr['judul']; ?></h4>
				<hr class="divider">
		 
		  			<?php if($fr['foto'] != null) : ?>
		  				<?php if($fr['foto'] == "jpg" || $fr['foto'] == "png") : ?>
							<a href="<?= base_url('assets/forum/') . $fr['foto']; ?>"><img class="col-sm-3 img-thumbnail" src="<?= base_url('assets/forum/') . $fr['foto']; ?>"></a>
						<?php endif ; ?>
						<a href="<?= base_url('assets/forum/') . $fr['foto']; ?>">
							File: <?= $fr['foto']; ?>"
						</a>
					<?php endif ; ?>
		  			<p class="mt-2" cols="40" rows="5"><?= $fr['forum']; ?>		  		

		  		<div class="p-3 mb-2 ml-3 border border-success bg-light text-dark rounded">
		  			<h4>Jawaban / Komentar : </h4>

		  			<?php foreach($komen as $km) : ?>
						<?php if($km['komen_id'] == $fr['id']) : ?>

							<?php if($user['id'] == $fr['for_user']) : ?>

								<div class="mr-3">
									<?php echo anchor('user/hapus_komen/'.$km['id'],'<i class="mt-3 float-right fas fa-trash"></i>'); ?>
								</div>
							<?php endif ; ?>

							<div class="pl-3 pt-3 mb-3 border bg-white text-dark rounded">
								<div class="row mb-1">
									<img class="w-25 col-sm-1 img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $km['komen_image']; ?>">	
									<span class="text-gray-600 font-weight-bold"><?= $km['komen_name']; ?></span>
									<br>
								</div>
								<small><?= date('d F Y. H:i', $km['tanggalk']); ?> WIB</small>
								<hr class="divider">
								<?php if($km['fotok'] != null) : ?>
									<?php if($km['fotok'] == "jpg" || $km['fotok'] == "png") : ?>
										<a href="<?= base_url('assets/forum/komen') . $km['fotok']; ?>"><img class="col-sm-3 img-thumbnail" src="<?= base_url('assets/forum/komen') . $km['fotok']; ?>"></a>
									<?php endif ; ?>
									<a href="<?= base_url('assets/forum/komen') . $km['fotok']; ?>">
										File: <?= $km['fotok']; ?>"
									</a>
								<?php endif ; ?>
								<p cols="40" rows="5"><?= $km['fork']; ?>
							</div>
						<?php endif ; ?>
			  		<?php endforeach; ?>

			        <?= form_open_multipart('user/komen'); ?>
			  			<div class="form-group">
			  				<input type="hidden" id="komen_id" name="komen_id" value="<?= $fr['id']; ?>">
			  				<textarea type="text" class="form-control" cols="40" rows="5" placeholder="Tulis kan Jawaban Atau Komentar Anda" id="fork" name="fork"></textarea>
			  				<?= form_error('komen', '<small class="text-white ">', '</small>'); ?>
			  			</div>
			  			<input type="hidden" id="komen_user" name="komen_user" value="<?= $user['id']; ?>">
			  			<tr>
				  			<th scope="col">
				  				<button type="submit" class="btn btn-primary">Submit</button>
				  				<label for="fotok">
				  					<i class="ml-3 text-dark fas fa-paperclip"></i>
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
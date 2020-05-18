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

		<?php
		$id_hal = $hal['id_hal'];
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

		<br>
		<hr class="divider">
		<br>

        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->
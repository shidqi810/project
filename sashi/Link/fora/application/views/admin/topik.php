        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      	<h1 class="text-dark font-weight-bold"><?= $title; ?></h1>

      	<?php
          $sql  = "SELECT *
          			FROM `for`
	        		";
          $forr = $this->db->query($sql)->result_array();
        ?>

        <?php
          $sql  = "SELECT *
          			FROM `halaman_topik`
	        		";
          $halaman = $this->db->query($sql)->result_array();
        ?>

        <?= $this->session->flashdata('message'); ?>

        <br>
        <div class="btn-group">

        <?= form_open_multipart('admin/topik'); ?>
			  <select class="btn btn-primary dropdown-toggle" id="id_hal" name="id_hal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Pilih Topik
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  		<option class="text-white dropdown-item mb-2" href="#">- pilih topik -</option>
			  	<?php foreach($halaman as $hal) : ?>
				    <option class="text-white dropdown-item mb-2" value="<?= $hal['id_hal']; ?>"><?= $hal['nama_topik']; ?></option>
				<?php endforeach; ?>

			  </div>
			  </select>
		  
		</div>
		<div class="btn-group">
		  <button class="btn btn-info ml-4" type="button" data-toggle="modal" data-target="#tambahTopikModal">
		    Tambah Topik
		  </button>
		</div>

    <div class="btn-group">
      <button class="btn btn-danger ml-4" type="button" data-toggle="modal" data-target="#hapusTopikModal">
        Hapus Topik
      </button>
    </div>

    <!-- <div class="btn-group">
        <button class="btn btn-primary ml-4" type="button" data-toggle="modal" data-target="#editTopikModal">
          Edit Topik
        </button>
      </div> -->
		<hr class="divider">

		<div class="p-3 mb-2 bg-info text-white rounded">
	  			<div class="form-group">
	  				 
	           <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul...">
             <?= form_error('forum', '<small class="text-white ">', '</small>'); ?>

             <input type="hidden" id="for_user" name="for_user" value="<?= $user['id']; ?>">
	  				
	  				<textarea type="text" class="form-control mt-3" cols="40" rows="5" placeholder="Tuliskan Sesuatu..." id="forum" name="forum"></textarea>
	  				<?= form_error('forum', '<small class="text-white ">', '</small>'); ?>
	  			</div>
	  			<tr>
		  			<th scope="col">
		  				<button type="submit" class="btn btn-primary">Submit</button>
		  				<label for="foto">
		  					<i class="ml-3 fas fa-paperclip"></i>
		  				</label>
		  				<input type="file" id="foto" name="foto"/>
		  			</th>
		  		</tr>
			</form>
		</div>

<!-- Modal -->
<div class="modal fade" id="tambahTopikModal" tabindex="-1" role="dialog" aria-labelledby="tambahTopikModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahTopikModalLabel">Tambah Topik Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/halaman'); ?>" method="post">
          <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="nama_topik" name="nama_topik" placeholder="Nama Topik">
              </div>
              <?= form_error('halaman', '<small class="text-white ">', '</small>'); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="hapusTopikModal" tabindex="-1" role="dialog" aria-labelledby="hapusTopikModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusTopikModalLabel">Hapus Topik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
              <div class="form-group row">
                <?php foreach($halaman as $hal) : ?>
                <label for="nama_topik" class="col-sm-12">Nama Topik</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_topik" name="nama_topik" value="<?= $hal['nama_topik']; ?>">
                </div>
                <div class="col-sm-2">
                  <?php echo anchor('admin/hapus_topik/'.$hal['id_hal'],'<button class="btn btn-danger">Hapus</button>'); ?>
                </div>
                <?php endforeach ?>
              </div>
          </div>
      <?= form_error('hapus_topik', '<small class="text-white ">', '</small>'); ?>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="editTopikModal" tabindex="-1" role="dialog" aria-labelledby="editTopikModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTopikModalLabel">Edit Topik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/edit_halaman'); ?>" method="post" >
          <div class="modal-body">
              <div class="form-group row">
                <?php foreach($halaman as $hal) : ?>
                <label for="nama_topik" class="col-sm-12">Nama Topik</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_topik" name="nama_topik" value="<?= $hal['nama_topik']; ?>">
                </div>
                <input type="hidden" id="id_hal" name="id_hal" value="<?= $hal['id_hal']; ?>">
                <button type="submit" class="col-sm-2 btn btn-primary">Edit</button>
                <?php endforeach ?>
              </div>
          </div>
      <?= form_error('edit_halaman', '<small class="text-white ">', '</small>'); ?>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
      </form>
    </div>
  </div>
</div> -->

		<br>
		<hr class="divider">
		<br>

        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->


<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <?php if ($this->session->flashdata('success')): ?>
    			<div class="alert alert-success" role="alert">
    				<?= $this->session->flashdata('success'); ?>
    			</div>
    		<?php endif; ?>

        <br>

		<div class="btn-group">
		  <button class="btn btn-info ml-4" type="button" data-toggle="modal" data-target="#tambahDataJaringan">
		    Tambah Data Jaringan
		  </button>
		</div>

		<hr class="divider">
		<br>

		<div class="container-fluid">
			<div class="row">
				<?php foreach ($datajaringan as $datajaringan): ?>
					<div class="card col-lg-3 m-4">
					    <a href="<?= base_url('assets/img/jaringan/') . $datajaringan->file_jaringan ?>"><img src="<?= base_url('assets/img/jaringan/') . $datajaringan->file_jaringan ?>" class="img-thumbnail mt-3"></img></a>
					    <div class="card-body">
                <label class="font-weight-bold" for="deskripsi_jaringan">Judul</label>
                <h5><?= $datajaringan->deskripsi_jaringan ?></h5>
					    	<p class="card-text"><small class="text-muted"><?= $datajaringan->tanggal_jaringan ?></small></p>
					    </div>

					    <div class="card-footer">
                <div class="float-right">
                  <a href="<?= base_url('DataJaringan/edit/'.$datajaringan->id_jaringan) ?>" class="btn btn-primary">Edit</a>
  							  <a onclick="deleteConfirm('<?= base_url('DataJaringan/delete/'.$datajaringan->id_jaringan) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                </div>
					    </div>
					</div>
				<?php endforeach ?>
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="tambahDataJaringan" tabindex="-1" role="dialog" aria-labelledby="tambahDataJaringanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataJaringanLabel">Tambah Data Jaringan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('DataJaringan/add'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            	<div class="form-group">
					<label for="id_deskripsi_Jaringan">Detail Data</label>
					<input type="text" id="id_deskripsi_Jaringan" class="form-control <?= form_error('deskripsi_jaringan') ? 'is-invalid':'' ?>" name="deskripsi_jaringan" placeholder="deskripsi_jaringan..."></input>
					<div class="invalid-feedback">
						<?= form_error('deskripsi_jaringan') ?>
					</div>
					<br>
					<input type="file" id="file_jaringan" name="file_jaringan"></input>
				</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>
    </div>
  </div>
</div>

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
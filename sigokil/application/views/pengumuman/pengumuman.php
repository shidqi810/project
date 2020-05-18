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
		  <button class="btn btn-info ml-4" type="button" data-toggle="modal" data-target="#tambahPengumuman">
		    Tambah Pengumuman
		  </button>
		</div>

		<hr class="divider">
		<br>

		<div class="container-fluid">
			<div class="row">
				<?php foreach ($dataadmin as $dataadmin): ?>
					<div class="card col-lg-12">
					    <div class="card-body">
                <h5 class="font-weight-bold"><?= $dataadmin->pengumuman ?></h5>
					    </div>

					    <div class="card-footer">
                <div class="float-right">
                  <a href="<?= base_url('Pengumuman/edit/'.$dataadmin->id_admin) ?>" class="btn btn-primary">Edit</a>
  							  <a onclick="deleteConfirm('<?= base_url('Pengumuman/delete/'.$dataadmin->id_admin) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                </div>
					    </div>
					</div>
				<?php endforeach ?>
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="tambahPengumuman" tabindex="-1" role="dialog" aria-labelledby="tambahPengumumanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahPengumumanLabel">Tambah Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Pengumuman/add'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            	<div class="form-group">
					<label for="id_pengumuman">Isi Pengumuman</label>
					<input type="text" id="id_pengumuman" class="form-control <?= form_error('pengumuman') ? 'is-invalid':'' ?>" name="pengumuman" placeholder="pengumuman..."></input>
					<div class="invalid-feedback">
						<?= form_error('pengumuman') ?>
					</div>
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
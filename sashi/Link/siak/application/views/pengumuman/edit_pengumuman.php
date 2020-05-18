        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <?php if ($this->session->flashdata('success')): ?>
    			<div class="alert alert-success" role="alert">
    				<?= $this->session->flashdata('success'); ?>
    			</div>
    		<?php endif; ?>


		<hr class="divider">
    <a href="<?= base_url('Pengumuman') ?>"><i class="fas fa-arrow-left"></i> Back</a>
		<br> <br>

		<div class="container-fluid">
      <div class="row">
          <div class="col-lg-8">
            <form action="<?php base_url("Pengumuman/edit") ?>" method="post"
              enctype="multipart/form-data" >

              <div class="form-group">
                <label for="pengumuman" class="col-form-label">Isi Pengumuman</label>
                  <textarea class="form-control <?= form_error('pengumuman') ? 'is-invalid':'' ?>"
                 name="pengumuman" placeholder="pengumuman..."><?= $dataadmin->pengumuman ?></textarea>
              </div>

              <input type="hidden" name="id" value="<?= $dataadmin->id_admin?>" />

              <button type="submit" class="btn btn-primary" name="btn" value="Save">Edit</button>
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
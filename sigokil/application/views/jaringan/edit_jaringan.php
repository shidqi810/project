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
    <a href="<?= base_url('DataJaringan') ?>"><i class="fas fa-arrow-left"></i> Back</a>
		<br> <br>

		<div class="container-fluid">
      <div class="row">
          <div class="col-lg-8">
            <form action="<?php base_url("DataJaringan/edit") ?>" method="post"
              enctype="multipart/form-data" >

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="deskripsi_jaringan" name="deskripsi_jaringan" value="<?= $datajaringan->deskripsi_jaringan ?>">
                </div>
              </div>

              <input type="hidden" name="id" value="<?= $datajaringan->id_jaringan?>" />
              
              <div class="form-group row">
                <div class="col-sm-2">File</div>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-sm-3">
                      <a href="<?= base_url('assets/img/jaringan/') . $datajaringan->file_jaringan ?>"><img src="<?= base_url('assets/img/jaringan/') . $datajaringan->file_jaringan ?>" class="img-thumbnail mt-3" alt="..."></a>
                    </div>
                    <div class="col-sm-9">
                      <input type="file" id="file_jaringan" name="file_jaringan">
                    </div>
                  </div>          
                </div>
              </div>

              <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" name="btn" value="Save">Edit</button>
                </div>
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
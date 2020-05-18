<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('User/irigasi') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('User/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="id_pekerjaan">Pekerjaan*</label>
								<textarea id="id_pekerjaan" class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 name="pekerjaan" placeholder="pekerjaan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_lokasi">Lokasi*</label>
								<textarea id="id_lokasi" class="form-control <?php echo form_error('lokasi') ? 'is-invalid':'' ?>"
								 name="lokasi" placeholder="lokasi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('lokasi') ?>
								</div>
								<input type="file" id="lokasi_file" name="lokasi_file"></input>
							</div>

							<div class="form-group">
								<label for="id_pagu">Pagu*</label>
								<textarea id="id_pagu" class="form-control <?php echo form_error('pagu') ? 'is-invalid':'' ?>"
								 name="pagu" placeholder="pagu..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('pagu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_opd">Opd*</label>
								<textarea id="id_opd" class="form-control <?php echo form_error('opd') ? 'is-invalid':'' ?>"
								 name="opd" placeholder="opd..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('opd') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_volume">Volume* (m <sup>3</sup>)</label>
								<textarea id="id_volume" class="form-control <?php echo form_error('volume') ? 'is-invalid':'' ?>"
								 name="volume" placeholder="volume..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('volume') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_keterangan">Keterangan*</label>
								<textarea id="id_keterangan" class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="keterangan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>

							<input type="hidden" name="verifikasi" value="0">

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- /.content-wrapper -->

		</div>
</div>
<!-- /.container-fluid -->
        
</div>
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
						<a href="<?= base_url('DataIrigasi2') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('DataIrigasi2/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="id_program">Program Kegiatan*</label>
								<textarea id="id_program" class="form-control <?php echo form_error('program2') ? 'is-invalid':'' ?>"
								 name="program2" placeholder="Program Kegiatan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('program2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_lokasi">Lokasi*</label>
								<textarea id="id_lokasi" class="form-control <?php echo form_error('lokasi2') ? 'is-invalid':'' ?>"
								 name="lokasi2" placeholder="Lokasi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('lokasi2') ?>
								</div>
								<input type="file" id="lokasi_file2" name="lokasi_file2"></input>
							</div>

							<div class="form-group">
								<label for="id_outcome">Outcome*</label>
								<textarea id="id_outcome" class="form-control <?php echo form_error('outcome2') ? 'is-invalid':'' ?>"
								 name="outcome2" placeholder="Outcome..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('outcome2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_output">Output*</label>
								<textarea id="id_output" class="form-control <?php echo form_error('output2') ? 'is-invalid':'' ?>"
								 name="output2" placeholder="Output..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('output2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_pagu">Rencana Pagu*</label>
								<textarea id="id_pagu" class="form-control <?php echo form_error('rencana_pagu') ? 'is-invalid':'' ?>"
								 name="rencana_pagu" placeholder="Pagu..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('rencana_pagu') ?>
								</div>
							</div>

							<input type="hidden" name="verifikasi2" value="0">

							<?= form_checkbox('verifikasi2','1',FALSE)."Verifikasi Data Ini?";?>
							<br><br>

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
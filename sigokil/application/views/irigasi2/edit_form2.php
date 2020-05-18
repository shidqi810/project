<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?= $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?= base_url('DataIrigasi2') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("DataIrigasi2/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?= $datairigasi2->id_dataIrigasi2?>" />

 							<div class="form-group">
								<label for="name">Program*</label>
								<textarea class="form-control <?= form_error('program2') ? 'is-invalid':'' ?>"
								 name="program2"><?= $datairigasi2->program2 ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('program2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Lokasi*</label>
								<textarea class="form-control <?= form_error('lokasi2') ? 'is-invalid':'' ?>"
								 name="lokasi2"><?= $datairigasi2->lokasi2 ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('lokasi2') ?>
								</div>

								<input type="file" id="lokasi_file2" name="lokasi_file2"></input>
							</div>

							<div class="form-group">
								<label for="name">Outcome*</label>
								<textarea class="form-control <?= form_error('outcome2') ? 'is-invalid':'' ?>"
								 name="outcome2"><?= $datairigasi2->outcome2 ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('outcome2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Output*</label>
								<textarea class="form-control <?= form_error('output2') ? 'is-invalid':'' ?>"
								 name="output2"><?= $datairigasi2->output2 ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('output2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pagu*</label>
								<textarea class="form-control <?= form_error('rencana_pagu') ? 'is-invalid':'' ?>"
								 name="rencana_pagu"><?= $datairigasi2->rencana_pagu ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('rencana_pagu') ?>
								</div>
							</div>

							<?php if ($datairigasi2->verifikasi2 == 0): ?>
								<?= form_checkbox('verifikasi2','1',FALSE)."Verifikasi Data Ini?";?>
							<?php endif ?>

							<?php if ($datairigasi2->verifikasi2 == 1): ?>
								<?= form_checkbox('verifikasi2','1',TRUE)."Verifikasi Data Ini?";?>
							<?php endif ?>

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
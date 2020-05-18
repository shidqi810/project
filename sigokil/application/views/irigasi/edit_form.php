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

						<a href="<?= base_url('DataIrigasi') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("DataIrigasi/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?= $datairigasi->id_dataIrigasi?>" />

 							<div class="form-group">
								<label for="name">Program*</label>
								<textarea class="form-control <?= form_error('program') ? 'is-invalid':'' ?>"
								 name="program"><?= $datairigasi->program ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('program') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Lokasi*</label>
								<textarea class="form-control <?= form_error('lokasi') ? 'is-invalid':'' ?>"
								 name="lokasi"><?= $datairigasi->lokasi ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('lokasi') ?>
								</div>

								<input type="file" id="lokasi_file" name="lokasi_file"></input>
							</div>

							<div class="form-group">
								<label for="name">Outcome*</label>
								<textarea class="form-control <?= form_error('outcome') ? 'is-invalid':'' ?>"
								 name="outcome"><?= $datairigasi->outcome ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('outcome') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Output*</label>
								<textarea class="form-control <?= form_error('output') ? 'is-invalid':'' ?>"
								 name="output"><?= $datairigasi->output ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('output') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pengadaan*</label>
								<textarea class="form-control <?= form_error('pengadaan') ? 'is-invalid':'' ?>"
								 name="pengadaan"><?= $datairigasi->pengadaan ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('pengadaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Pagu*</label>
								<textarea class="form-control <?= form_error('pagu') ? 'is-invalid':'' ?>"
								 name="pagu"><?= $datairigasi->pagu ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('pagu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nilai Kontrak*</label>
								<textarea class="form-control <?= form_error('nilai_kontrak') ? 'is-invalid':'' ?>"
								 name="nilai_kontrak"><?= $datairigasi->nilai_kontrak ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('nilai_kontrak') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Realisasi*</label>
								<textarea class="form-control <?= form_error('realisasi') ? 'is-invalid':'' ?>"
								 name="realisasi"><?= $datairigasi->realisasi ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('realisasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Progress Keu* m <sup>3</sup></label>
								<textarea class="form-control <?= form_error('keu') ? 'is-invalid':'' ?>"
								 name="keu"><?= $datairigasi->keu ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('keu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Progress Fisik* m <sup>3</sup></label>
								<textarea class="form-control <?= form_error('fisik') ? 'is-invalid':'' ?>"
								 name="fisik"><?= $datairigasi->fisik ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('fisik') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Total*</label>
								<textarea class="form-control <?= form_error('total') ? 'is-invalid':'' ?>"
								 name="total" placeholder="total..."><?= $datairigasi->total ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('total') ?>
								</div>
							</div>

							<?php if ($datairigasi->verifikasi == 0): ?>
								<?= form_checkbox('verifikasi','1',FALSE)."Verifikasi Data Ini?";?>
							<?php endif ?>

							<?php if ($datairigasi->verifikasi == 1): ?>
								<?= form_checkbox('verifikasi','1',TRUE)."Verifikasi Data Ini?";?>
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
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
						<a href="<?= base_url('UserDataIrigasi') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('UserDataIrigasi/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="id_program">Program Kegiatan*</label>
								<textarea id="id_program" class="form-control <?php echo form_error('program') ? 'is-invalid':'' ?>"
								 name="program" placeholder="Program Kegiatan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('program') ?>
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
								<label for="id_outcome">Outcome*</label>
								<textarea id="id_outcome" class="form-control <?php echo form_error('outcome') ? 'is-invalid':'' ?>"
								 name="outcome" placeholder="Outcome..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('outcome') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_output">Output*</label>
								<textarea id="id_output" class="form-control <?php echo form_error('output') ? 'is-invalid':'' ?>"
								 name="output" placeholder="Output..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('output') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_pengadaan">Pengadaan*</label>
								<textarea id="id_pengadaan" class="form-control <?php echo form_error('pengadaan') ? 'is-invalid':'' ?>"
								 name="pengadaan" placeholder="Pengadaan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('pengadaan') ?>
								</div>
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
								<label for="id_nilai_kontrak">Nilai Kontrak*</label>
								<textarea id="id_nilai_kontrak" class="form-control <?php echo form_error('nilai_kontrak') ? 'is-invalid':'' ?>"
								 name="nilai_kontrak" placeholder="Nilai Kontrak..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('nilai_kontrak') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_realisasi">Realisasi*</label>
								<textarea id="id_realisasi" class="form-control <?php echo form_error('realisasi') ? 'is-invalid':'' ?>"
								 name="realisasi" placeholder="Realisasi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('realisasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_keu">Progress Keu* (%)</label>
								<textarea id="id_keu" class="form-control <?php echo form_error('keu') ? 'is-invalid':'' ?>"
								 name="keu" placeholder="Keu..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('keu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_fisik">Progress Fisik* (%)</label>
								<textarea id="id_fisik" class="form-control <?php echo form_error('fisik') ? 'is-invalid':'' ?>"
								 name="fisik" placeholder="Fisik..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('fisik') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_total">Total*</label>
								<textarea id="id_total" class="form-control <?php echo form_error('total') ? 'is-invalid':'' ?>"
								 name="total" placeholder="Total..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('total') ?>
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
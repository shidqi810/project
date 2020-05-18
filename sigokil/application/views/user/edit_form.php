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

						<a href="<?= base_url('User/irigasi') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("User/editIrigasi") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?= $datairigasi->id_dataIrigasi?>" />
<!-- 
							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?= form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?= $product->image ?>" />
								<div class="invalid-feedback">
									<?= form_error('image') ?>
								</div>
							</div>
 -->
 							<div class="form-group">
								<label for="name">Pekerjaan*</label>
								<textarea class="form-control <?= form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 name="pekerjaan" placeholder="pekerjaan..."><?= $datairigasi->pekerjaan ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Lokasi*</label>
								<textarea class="form-control <?= form_error('lokasi') ? 'is-invalid':'' ?>"
								 name="lokasi" placeholder="lokasi..."><?= $datairigasi->lokasi ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('lokasi') ?>
								</div>
								<input type="file" id="lokasi_file" name="lokasi_file"></input>
							</div>

							<div class="form-group">
								<label for="name">Pagu*</label>
								<textarea class="form-control <?= form_error('pagu') ? 'is-invalid':'' ?>"
								 name="pagu" placeholder="pagu..."><?= $datairigasi->pagu ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('pagu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Opd*</label>
								<textarea class="form-control <?= form_error('opd') ? 'is-invalid':'' ?>"
								 name="opd" placeholder="opd..."><?= $datairigasi->opd ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('opd') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Volume* (m <sup>3</sup>)</label>
								<textarea class="form-control <?= form_error('volume') ? 'is-invalid':'' ?>"
								 name="volume" placeholder="volume..."><?= $datairigasi->volume ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('volume') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan*</label>
								<textarea class="form-control <?= form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="Keterangan..."><?= $datairigasi->keterangan ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('keterangan') ?>
								</div>
							</div>

							<?php if ($datairigasi->verifikasi == 0): ?>
								<input type="hidden" name="verifikasi" value="0">
							<?php endif ?>

							<?php if ($datairigasi->verifikasi == 1): ?>
								<input type="hidden" name="verifikasi" value="1">
							<?php endif ?>

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
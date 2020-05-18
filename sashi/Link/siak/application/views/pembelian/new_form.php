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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('Pembelian') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('Pembelian/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="id_nama">Nama Pembeli*</label>
								<textarea id="id_nama" class="form-control <?= form_error('nama') ? 'is-invalid':'' ?>"
								 name="nama" placeholder="Nama Pembeli..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_alamat">Alamat Pembeli*</label>
								<textarea id="id_alamat" class="form-control <?= form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="Alamat Pembeli..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_pesanan">Pesanan*</label>
								<textarea id="id_pesanan" class="form-control <?= form_error('pesanan') ? 'is-invalid':'' ?>"
								 name="pesanan" placeholder="Barang Pesanan..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('pesanan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_quantitas">Quantitas*</label>
								<textarea id="id_quantitas" class="form-control <?= form_error('quantitas') ? 'is-invalid':'' ?>"
								 name="quantitas" placeholder="Quantitas..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('quantitas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_harga">Harga*</label>
								<textarea id="id_harga" class="form-control <?= form_error('harga') ? 'is-invalid':'' ?>"
								 name="harga" placeholder="Harga..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_penilaian">Penilaian*</label>
								<textarea id="id_penilaian" class="form-control <?= form_error('penilaian') ? 'is-invalid':'' ?>"
								 name="penilaian" placeholder="Penilaian..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('penilaian') ?>
								</div>
							</div>

							<input type="hidden" name="bayar" value="0">

							<?= form_checkbox('bayar','1',FALSE)."Pelanggan Sudah Membayar?";?>
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
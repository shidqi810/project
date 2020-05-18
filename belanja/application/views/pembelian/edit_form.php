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

						<a href="<?= base_url('Pembelian') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("Pembelian/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?= $pembelian->id_pembelian?>" />

 							<div class="form-group">
								<label for="id_nama">Nama Pembeli*</label>
								<textarea id="id_nama" class="form-control <?= form_error('nama') ? 'is-invalid':'' ?>"
								 name="nama"><?= $pembelian->nama ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_alamat">Alamat Pembeli*</label>
								<textarea id="id_alamat" class="form-control <?= form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat"><?= $pembelian->alamat ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_pesanan">Pesanan*</label>
								<textarea id="id_pesanan" class="form-control <?= form_error('pesanan') ? 'is-invalid':'' ?>"
								 name="pesanan"><?= $pembelian->pesanan ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('pesanan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_quantitas">Quantitas*</label>
								<textarea id="id_quantitas" class="form-control <?= form_error('quantitas') ? 'is-invalid':'' ?>"
								 name="quantitas" placeholder="Quantitas..."><?= $pembelian->quantitas ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('quantitas') ?>
								</div>
							</div>

							<input type="hidden" name="stok" value="<?= $pembelian->stok ?>">
							<input type="hidden" name="kategori" value="<?= $pembelian->kategori ?>">
							<input type="hidden" name="berat" value="<?= $pembelian->berat ?>">
							<input type="hidden" name="kondisi" value="<?= $pembelian->kondisi ?>">

							<div class="form-group">
								<label for="id_harga">Harga*</label>
								<textarea id="id_harga" class="form-control <?= form_error('harga') ? 'is-invalid':'' ?>"
								 name="harga"><?= $pembelian->harga ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_komentar">Komentar*</label>
								<textarea id="id_komentar" class="form-control <?= form_error('komentar') ? 'is-invalid':'' ?>"
								 name="komentar"><?= $pembelian->komentar ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('komentar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_penilaian">Penilaian*</label>
								<textarea id="id_penilaian" class="form-control <?= form_error('penilaian') ? 'is-invalid':'' ?>"
								 name="penilaian"><?= $pembelian->penilaian ?></textarea>
								<div class="invalid-feedback">
									<?= form_error('penilaian') ?>
								</div>
							</div>

							<?php if ($pembelian->bayar == 0): ?>
								<?= form_checkbox('bayar','1',FALSE)."Pelanggan Sudah Membayar?";?>
							<?php endif ?>

							<?php if ($pembelian->bayar == 1): ?>
								<?= form_checkbox('bayar','1',TRUE)."Pelanggan Sudah Membayar?";?>
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
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
						<a href="<?= base_url('Stok') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('Stok/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_pesanan">Variasi Barang*</label>
								<textarea id="id_pesanan" class="form-control <?= form_error('pesanan') ? 'is-invalid':'' ?>"
								 name="pesanan" placeholder="Barang Pesanan..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('pesanan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_harga">Harga Barang*</label>
								<textarea id="id_harga" class="form-control <?= form_error('harga') ? 'is-invalid':'' ?>"
								 name="harga" placeholder="Harga..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_stok">Stok Barang*</label>
								<textarea id="id_stok" class="form-control <?= form_error('stok') ? 'is-invalid':'' ?>"
								 name="stok" placeholder="stok..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('stok') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_kategori">Kategori Barang*</label>
								<textarea id="id_kategori" class="form-control <?= form_error('kategori') ? 'is-invalid':'' ?>"
								 name="kategori" placeholder="Kategori..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('kategori') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_berat">Berat Barang*</label>
								<textarea id="id_berat" class="form-control <?= form_error('berat') ? 'is-invalid':'' ?>"
								 name="berat" placeholder="Berat..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('berat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_kondisi">Kondisi Barang*</label>
								<textarea id="id_kondisi" class="form-control <?= form_error('kondisi') ? 'is-invalid':'' ?>"
								 name="kondisi" placeholder="Kondisi..."></textarea>
								<div class="invalid-feedback">
									<?= form_error('kondisi') ?>
								</div>
							</div>

							<input type="hidden" name="bayar" value="0">

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
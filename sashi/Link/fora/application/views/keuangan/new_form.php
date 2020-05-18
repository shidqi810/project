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
						<a href="<?php echo base_url('keuangan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('keuangan/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label>Jenis*</label>
								<br>
								<input type="radio" id="jenis_pemasukan" name="jenis" value="pemasukan"><label for="jenis_pemasukan">Pemasukan</label>
								<br>
								<input type="radio" id="jenis_pengeluaran" name="jenis" value="pengeluaran"><label for="jenis_pengeluaran">Pengeluaran</label>
								<!-- <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="keuangan name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="id_nominal">Nominal*</label>
								<input id="id_nominal" class="form-control <?php echo form_error('nominal') ? 'is-invalid':'' ?>"
								 type="number" name="nominal" min="0" placeholder="nominal" />
								<div class="invalid-feedback">
									<?php echo form_error('nominal') ?>
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
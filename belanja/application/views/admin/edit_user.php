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

						<a href="<?= base_url('Admin/user') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("Admin/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id_user" value="<?= $userM->id?>" />

 							<div class="form-group">
								<label for="name">Nama*</label>
								<input type="text" class="form-control <?= form_error('name') ? 'is-invalid':'' ?>" name="name" value="<?= $userM->name ?>">
								<div class="invalid-feedback">
									<?= form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email*</label>
								<input id="email" type="text" class="form-control <?= form_error('email') ? 'is-invalid':'' ?>" name="email" value="<?= $userM->email ?>" readonly>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat_user">Alamat *</label>
								<input id="alamat_user" type="text" class="form-control <?= form_error('alamat_user') ? 'is-invalid':'' ?>" name="alamat_user" value="<?= $userM->alamat_user ?>">
								<div class="invalid-feedback">
									<?= form_error('alamat_user') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telepon">Nomor Telepon*</label>
								<input id="telepon" type="text" class="form-control <?= form_error('telepon') ? 'is-invalid':'' ?>" name="telepon" value="<?= $userM->telepon ?>">
								<div class="invalid-feedback">
									<?= form_error('telepon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="catatan">Catatan*</label>
								<input id="catatan" type="text" class="form-control <?= form_error('catatan') ? 'is-invalid':'' ?>" name="catatan" value="<?= $userM->catatan ?>">
								<div class="invalid-feedback">
									<?= form_error('catatan') ?>
								</div>
							</div>

							<select class="mt-2 custom-select" id="role_id" name="role_id">
								<?php if ($userM->role_id == 1): ?>
							  		<option class="mb-2" href="#" value="1">Admin</option>
								    <option class="mb-2" href="#" value="2">User</option>
								<?php endif ?>

								<?php if ($userM->role_id == 2): ?>
							  		<option class="mb-2" href="#" value="2">User</option>
								    <option class="mb-2" href="#" value="1">Admin</option>
								<?php endif ?>
							</select>
							<br><br>

							<?php if ($userM->is_active == 0): ?>
								<?= form_checkbox('is_active','1',FALSE)."Aktif kan Akun";?>
							<?php endif ?>

							<?php if ($userM->is_active == 1): ?>
								<?= form_checkbox('is_active','1',TRUE)."Aktif kan Akun";?>
							<?php endif ?>

							<br><br>

							<button class="btn btn-success" type="submit">Save</button>
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
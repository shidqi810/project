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

							<input type="hidden" name="id_user" value="<?= $user->id?>" />

 							<div class="form-group">
								<label for="name">Nama*</label>
								<input type="text" class="form-control <?= form_error('name') ? 'is-invalid':'' ?>" name="name" value="<?= $user->name ?>">
								<div class="invalid-feedback">
									<?= form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Email*</label>
								<input type="text" class="form-control <?= form_error('email') ? 'is-invalid':'' ?>" name="email" value="<?= $user->email ?>" readonly>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
								</div>
							</div>

							<select class="mt-2 custom-select" id="role_id" name="role_id">
								<?php if ($user->role_id == 1): ?>
							  		<option class="mb-2" href="#" value="1">Admin</option>
								    <option class="mb-2" href="#" value="2">User</option>
								<?php endif ?>

								<?php if ($user->role_id == 2): ?>
							  		<option class="mb-2" href="#" value="2">User</option>
								    <option class="mb-2" href="#" value="1">Admin</option>
								<?php endif ?>
							</select>
							<br><br>

							<?php if ($user->is_active == 0): ?>
								<?= form_checkbox('is_active','1',FALSE)."Aktif kan Akun";?>
							<?php endif ?>

							<?php if ($user->is_active == 1): ?>
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
<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-body">
						<div class="table-responsive">
							
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr class="bg-primary text-white">
										<th>No.</th>
										<th>Tanggal</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Alamat Pengguna</th>
										<th>Telepon</th>
										<th>Catatan</th>
										<th>Role</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($userM as $userM): ?>

									<?php if ($userM->is_active == 0): ?>
										<tr class="bg-danger text-white">
									<?php endif ?>

									<?php if ($userM->is_active == 1): ?>
										<tr class="bg-success text-white">
									<?php endif ?>
									
										<td width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td width="100">
											<?= date('d F Y H:i', $userM->date_created); ?> WIB
										</td>

										<td width="100">
											<?= $userM->name ?>
										</td>

										<td width="100">
											<?= $userM->email ?>
										</td>

										<td width="100">
											<?= $userM->alamat_user ?>
										</td>

										<td width="100">
											<?= $userM->telepon ?>
										</td>

										<td width="100">
											<?= $userM->catatan ?>
										</td>

										<td width="100">
											<?php if ($userM->role_id == 1): ?>
												<?= "Admin"; ?>
											<?php endif ?>
											<?php if ($userM->role_id == 2): ?>
												<?= "User"; ?>
											<?php endif ?>
										</td>

										<td width="90">
											<a href="<?= base_url('Admin/edit/'.$userM->id) ?>"
											 class="btn btn-small text-white"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?= base_url('Admin/delete/'.$userM->id) ?>')"
											 href="#!" class="btn btn-small text-white"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
		</div>

</div>
<!-- /.container-fluid -->
        
</div>
		
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
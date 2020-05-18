<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('UserDataIrigasi2/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<a class="btn btn-info" href="<?= base_url("UserDataIrigasi2/action"); ?>">Export ke Excel</a>
							<br>
							<table border="1" class="border border-white table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead class="bg-primary text-white text-center">
									<tr>
							            <th class="pt-3 pb-3" colspan="8">Rencana Pekerjaan Irigasi 2020</th>
							        </tr>
									<tr>
										<th>No.</th>
										<th>Tanggal</th>
										<th>Program Kegiatan</th>
										<th>Lokasi</th>
										<th>Outcome</th>
										<th>Output</th>
										<th>Rencana Pagu</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($datairigasi2 as $datairigasi2): ?>

									<?php if ($datairigasi2->verifikasi2 == 0): ?>
										<tr class="bg-danger text-white">
									<?php endif ?>

									<?php if ($datairigasi2->verifikasi2 == 1): ?>
										<tr class="bg-success text-white">
									<?php endif ?>	
										<td class="text-center" width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td width="100">
											<?= $datairigasi2->tanggal2 ?>
										</td>

										<td width="100">
											<?= $datairigasi2->program2 ?>
										</td>

										<td width="100">
											<?php if ($datairigasi2->lokasi_file2 == "#"): ?>
												<a class="text-white" href="#"><?= $datairigasi2->lokasi2 ?></a>
											<?php endif ?>

											<?php if ($datairigasi2->lokasi_file2 != "#"): ?>
												<a class="text-white" href="<?= base_url('assets/img/irigasi2020/') . $datairigasi2->lokasi_file2 ?>"><?= $datairigasi2->lokasi2 ?></a>
											<?php endif ?>
										</td>

										<td width="100">
											<?= $datairigasi2->outcome2 ?>
										</td>

										<td width="100">
											<?= $datairigasi2->output2 ?>
										</td>

										<td width="100">
											<?= $datairigasi2->rencana_pagu ?>
										</td>

										<td width="90">
											<a href="<?= base_url('UserDataIrigasi2/edit/'.$datairigasi2->id_dataIrigasi2) ?>"
											 class="btn btn-small text-white"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?= base_url('UserDataIrigasi2/delete/'.$datairigasi2->id_dataIrigasi2) ?>')"
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
<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('User/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr class="bg-primary text-white">
										<th>No.</th>
										<th>Tanggal</th>
										<th>Pekerjaan</th>
										<th>Lokasi</th>
										<th>Pagu</th>
										<th>OPD</th>
										<th>Volume</th>
										<th>Keterangan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($datairigasi as $datairigasi): ?>

									<?php if ($datairigasi->verifikasi == 0): ?>
										<tr class="bg-danger text-white">
									<?php endif ?>

									<?php if ($datairigasi->verifikasi == 1): ?>
										<tr class="bg-success text-white">
									<?php endif ?>	
										<td width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td width="100">
											<?= $datairigasi->tanggal ?>
										</td>

										<td width="100">
											<?= $datairigasi->pekerjaan ?>
										</td>

										<td width="100">
											<?php if ($datairigasi->lokasi_file == "#"): ?>
												<a class="text-white" href="#"><?= $datairigasi->lokasi ?></a>
											<?php endif ?>

											<?php if ($datairigasi->lokasi_file != "#"): ?>
												<a class="text-white" href="<?= base_url('assets/img/dataIrigasi/') . $datairigasi->lokasi_file ?>"><?= $datairigasi->lokasi ?></a>
											<?php endif ?>
										</td>

										<td width="100">
											<?= $datairigasi->pagu ?>
										</td>

										<td width="100">
											<?= $datairigasi->opd ?>
										</td>

										<td width="50">
											<?= $datairigasi->volume ?> m <sup>3</sup>
										</td>

										<td width="100">
											<?= $datairigasi->keterangan ?>
										</td>

										<td width="90">
											<a href="<?= base_url('User/editIrigasi/'.$datairigasi->id_dataIrigasi) ?>"
											 class="btn btn-small text-white"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?= base_url('User/delete/'.$datairigasi->id_dataIrigasi) ?>')"
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
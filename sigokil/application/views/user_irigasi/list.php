<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('UserDataIrigasi/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<a class="btn btn-info" href="<?= base_url("UserDataIrigasi/action"); ?>">Export ke Excel</a>
							<br>
							<table border="1" class="border border-white" id="dataTable" width="2000px" cellspacing="0">
								<thead class="bg-primary text-white text-center">
									<tr>
							            <th class="pt-3 pb-3" colspan="14">Data Progress Irigasi 2019</th>
							        </tr>
									<tr>
										<th rowspan="2">No.</th>
										<th rowspan="2">Tanggal</th>
										<th rowspan="2">Program Kegiatan</th>
										<th rowspan="2">Lokasi</th>
										<th rowspan="2">Target Outcome</th>
										<th rowspan="2">Target Output</th>
										<th rowspan="2">Pengadaan</th>
										<th rowspan="2">Pagu</th>
										<th rowspan="2">Nilai Kontrak</th>
										<th rowspan="2">Realisasi</th>

										<th class="pt-2 pb-2" colspan="2">Progress</th>

										<th rowspan="2">Total</th>
										<th rowspan="2">Aksi</th>
									</tr>
									<tr>
										<th>Keu</th>
										<th>Fisik</th>
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
									
										<td class="text-center" width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->tanggal ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->program ?>
										</td>

										<td class="p-2" width="100px">
											<?php if ($datairigasi->lokasi_file == "#"): ?>
												<a class="text-white" href="#"><?= $datairigasi->lokasi ?></a>
											<?php endif ?>

											<?php if ($datairigasi->lokasi_file != "#"): ?>
												<a class="text-white" href="<?= base_url('assets/img/irigasi2019/') . $datairigasi->lokasi_file ?>"><?= $datairigasi->lokasi ?></a>
											<?php endif ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->outcome ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->output ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->pengadaan ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->pagu ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->nilai_kontrak ?>
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->realisasi ?>
										</td>

										<td class="text-center" width="70px">
											<?= $datairigasi->keu ?> %
										</td>

										<td class="text-center" width="70px">
											<?= $datairigasi->fisik ?> %
										</td>

										<td class="p-2" width="100px">
											<?= $datairigasi->total ?>
										</td>

										<td width="80px">
											<a href="<?= base_url('UserDataIrigasi/edit/'.$datairigasi->id_dataIrigasi) ?>"
											 class="btn btn-small text-white"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?= base_url('UserDataIrigasi/delete/'.$datairigasi->id_dataIrigasi) ?>')"
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
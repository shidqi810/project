<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">
			<div class="container-fluid">
				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo base_url('keputusan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tanggal</th>
										<th>Keterangan</th>
										<th>Catatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($keputusan as $keputusan): ?>
									<tr>
										<td width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td width="150">
											<?php echo $keputusan->tanggal ?>
										</td>

										<td width="150">
											<?php echo $keputusan->keterangan ?>
										</td>

										<td width="150">
											<?php echo $keputusan->catatan ?>
										</td>

										<td width="125">
											<a href="<?php echo base_url('keputusan/edit/'.$keputusan->id_keputusan) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo base_url('keputusan/delete/'.$keputusan->id_keputusan) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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

</div>
<!-- /.container-fluid -->
        
</div>
		
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
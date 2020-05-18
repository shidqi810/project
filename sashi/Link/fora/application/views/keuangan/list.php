<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">
			<div class="container-fluid">

				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo base_url('keuangan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Jenis</th>
										<th>Nominal</th>
										<th>Keterangan</th>
										<th>Total</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($keuangan as $keuangan): ?>
									<tr>
										<td>
											<?php 
												echo $i;
												$i++;
											?>
										</td>
										<td width="150">
											<?php echo $keuangan->tanggal ?>
										</td>

										<td>
											<?php echo $keuangan->jenis ?>
										</td>

										<td>
											<?php echo $keuangan->nominal ?>
										</td>

										<td>
											<?php echo $keuangan->keterangan ?>
										</td>

										<td>
											<?php echo $keuangan->total ?>
										</td>

										<td width="250">
											<a onclick="deleteConfirm('<?php echo base_url('keuangan/delete/'.$keuangan->id_keuangan) ?>')"
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
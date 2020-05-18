<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div id="content-wrapper">
			<div class="container-fluid">

				<!-- Data Tables -->
				<div class="card mb-3">
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
										<td width="250">
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
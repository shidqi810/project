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
										<th>No.</th>
										<th>Tanggal</th>
										<th>Keterangan</th>
										<th>Catatan</th>
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

										<td width="100">
											<?php echo $keputusan->tanggal ?>
										</td>

										<td width="200">
											<?php echo $keputusan->keterangan ?>
										</td>

										<td width="150">
											<?php echo $keputusan->catatan ?>
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
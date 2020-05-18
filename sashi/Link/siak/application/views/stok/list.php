<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div id="content-wrapper">				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('Stok/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table border="1" class="border border-white table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead class="bg-primary text-white text-center">
									<tr>
							            <th class="pt-3 pb-3" colspan="8">Data Transaksi User</th>
							        </tr>
									<tr>
										<th>No.</th>
										<th>Variasi</th>
										<th>Harga Barang</th>
										<th>Stok</th>
										<th>Kategori</th>
										<th>Berat</th>
										<th>Kondisi</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($pembelian as $pembelian): ?>

									<?php if ($pembelian->stok == 0): ?>
										<tr class="bg-danger text-white">
									<?php endif ?>

									<?php if ($pembelian->stok != 0): ?>
										<tr class="bg-success text-white">
									<?php endif ?>	
										<td class="text-center" width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td width="100">
											<?= $pembelian->pesanan ?>
										</td>

										<td width="100">
											Rp. <?= $pembelian->harga ?>
										</td>

										<td width="100">
											<?= $pembelian->stok ?>
										</td>

										<td width="100">
											<?= $pembelian->kategori ?>
										</td>

										<td width="100">
											<?= $pembelian->berat ?>
										</td>

										<td width="100">
											<?= $pembelian->kondisi ?>
										</td>

										<td width="90">
											<a href="<?= base_url('stok/edit/'.$pembelian->id_pembelian) ?>"
											 class="btn btn-small text-white"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?= base_url('stok/delete/'.$pembelian->id_pembelian) ?>')"
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
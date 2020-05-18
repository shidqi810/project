<div class="container-fluid">

    <!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div id="content-wrapper">				
				<!-- Data Tables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('Pembelian/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
								<div class="card border-left-success shadow h-100 py-2">
					                <div class="card-body">
					                  <div class="row no-gutters align-items-center">
					                    <div class="col mr-2">
					                      <div class="font-weight-bold text-success text-uppercase mb-1">Total Uang Yang Masuk</div>
					                      <h5 class="mb-0 font-weight-bold text-gray-800">Rp. <?= $totalPembelian ?></h5>
					                    </div>
					                    <div class="col-auto">
					                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
					                    </div>
					                  </div>
					                </div>
					            </div>
							<br>
							<table border="1" class="border border-white table table-hover" id="dataTable" width="1800px" cellspacing="0">
								<thead class="bg-primary text-white text-center">
									<tr>
							            <th class="pt-3 pb-3" colspan="11">Data Transaksi User</th>
							        </tr>
									<tr>
										<th rowspan="2">No.</th>
										<th rowspan="2">Tanggal</th>
										<th rowspan="2">Nama Pembeli</th>
										<th rowspan="2">Alamat Pembeli</th>
										<th rowspan="2">Barang Pesanan</th>
										<th rowspan="2">Quantitas</th>
										<th rowspan="2">Harga</th>
										<th rowspan="2">Total</th>
										<th colspan="2">Penilaian</th>
										<th rowspan="2">Aksi</th>
									</tr>
									<tr>
										<th>Komentar</th>
										<th>Rating</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($pembelian as $pembelian): ?>

									<?php if ($pembelian->bayar == 0): ?>
										<tr class="bg-danger text-white">
									<?php endif ?>

									<?php if ($pembelian->bayar == 1): ?>
										<tr class="bg-success text-white">
									<?php endif ?>	
										<td class="text-center" width="10px">
											<?php
												echo $i;
												$i++;
											?>
										</td>

										<td width="100px">
											<?= $pembelian->tanggal ?>
										</td>

										<td width="100px">
											<?= $pembelian->nama ?>
										</td>

										<td width="100px">
											<?= $pembelian->alamat ?>
										</td>

										<td width="100px">
											<?= $pembelian->pesanan ?>
										</td>

										<td width="100px">
											<?= $pembelian->quantitas ?>
										</td>

										<td width="100px">
											Rp. <?= $pembelian->harga ?>
										</td>

										<td width="100px">
											Rp. <?= $pembelian->total ?>
										</td>

										<td width="100px">
											<?= $pembelian->komentar ?>
										</td>

										<td width="80px">
											<?= $pembelian->penilaian ?>
										</td>

										<td width="90px">
											<a href="<?= base_url('pembelian/edit/'.$pembelian->id_pembelian) ?>"
											 class="btn btn-small text-white"><i class="fas fa-edit"></i></a>
											<a onclick="deleteConfirm('<?= base_url('pembelian/delete/'.$pembelian->id_pembelian) ?>')"
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
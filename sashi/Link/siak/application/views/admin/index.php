        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         	<div class="row">

            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="font-weight-bold text-primary text-uppercase mb-1">Banyak Transaksi Yang Telah Dibayar</div>
	                      <h5 class="mb-0 font-weight-bold text-gray-800"><?= $banyakTransaksi ?></h5>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
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
	            </div>

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
	                      <h5 class="mb-0 font-weight-bold text-gray-800"><?= $banyakUser; ?></h5>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	           
        	</div>

        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->
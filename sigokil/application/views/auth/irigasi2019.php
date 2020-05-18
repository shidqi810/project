

<div class="container">
    <!-- Outer Row -->

    <!-- Data Tables -->
        <div class="card mt-5 mb-3">
          <div class="card-header">
            <h1 class=" font-weight-bolder text-center">
              <?= $title; ?>
            </h1>

          </div>
          <div class="card-body">

            <div class="table-responsive">
              <a class="btn btn-info" href="<?= base_url("DataIrigasi/action"); ?>">Export ke Excel</a>
              <br>
              <table border="1" class="border border-white" id="dataTable" width="1900px" cellspacing="0">
                <thead class="bg-primary text-white text-center">
                  <tr>
                          <th class="pt-3 pb-3" colspan="13">Data Progress Irigasi 2019</th>
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
                  </tr>
                  <tr>
                    <th>Keu</th>
                    <th>Fisik</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach ($datairigasi as $datairigasi): ?>

                  <?php if ($datairigasi->verifikasi == 1): ?>
                  <tr class="bg-success text-white">
                  
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

                  </tr>
                  <?php endif ?>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

</div>
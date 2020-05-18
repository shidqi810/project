        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <?= $this->session->flashdata('message'); ?>

<?php
    $sql  = "SELECT *
              FROM `kepengurusan`
            ";
    $pengurus = $this->db->query($sql)->result_array();
?>

<!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="">
      <div class="row">
        <div class="col-lg-12 text-center mb-2">
          <h2 class="section-heading text-uppercase">Struktural Organisasi</h2>
    <hr class="divider">
        </div>
      </div>

      <div class="btn-group mb-2">
        <button class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="#tambahKepengurusanModal">
          Tambah Kepengurusan
        </button>
      </div>
      
      <div class="row">
        <?php foreach($pengurus as $pr) : ?>
          <div class="col-lg-4 mr-5 mb-5 pt-3 mx-auto shadow">
            <div class="team-member">
              <div class="text-center mb-4">
                <img class="w-75 rounded-circle" src="<?= base_url('assets/img/pengurus/') . $pr['foto_pengurus']; ?>" alt="">
              </div>

              <?= form_open_multipart('admin/struktur'); ?>

              <div class="form-group row">
                <div class="col-sm-12">
                  <input type="file" id="foto_pengurus" name="foto_pengurus">
                </div>
              </div>

              <div class="form-group row">
                <label for="name_pengurus" class="col-sm-12">Nama Lengkap</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name_pengurus" name="name_pengurus" value="<?= $pr['name_pengurus']; ?>">
                </div>
              </div>

              <input type="hidden" id="id" name="id" value="<?= $pr['id']; ?>">

              <div class="form-group row">
                <label for="jabatan" class="col-sm-12">Jabatan</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $pr['jabatan']; ?>" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="motto" class="col-sm-12">Motto Hidup</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="motto" name="motto" value="<?= $pr['motto']; ?>">
                </div>
              </div>

              <ul class="list-inline mt-2">
                <li class="">
                  <div class="form-group row">
                    <label for="whatsapp" class="col-sm-2">
                        <i class="fab fa-whatsapp fa-2x fa-fw"></i>  
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $pr['whatsapp']; ?>">
                    </div>
                  </div>
                    
                </li>
                <li class="">
                  <div class="form-group row">
                    <label for="facebook" class="col-sm-2">
                        <i class="fab fa-facebook-f fa-2x fa-fw"></i>
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $pr['facebook']; ?>">
                    </div>
                  </div>

                </li>
                <li class="">
                  <div class="form-group row">
                    <label for="instagram" class="col-sm-2">
                        <i class="fab fa-instagram fa-2x fa-fw"></i>
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $pr['instagram']; ?>">
                    </div>
                  </div>
                </li>
              </ul>

              <div class="form-group row justify-content-end">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </div>
              </form>
              
              <div class="mb-3">
                <?php echo anchor('admin/hapus/'.$pr['id'],'<button class="btn btn-danger">Hapus</button>'); ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
 
      </div>
    </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="tambahKepengurusanModal" tabindex="-1" role="dialog" aria-labelledby="tambahKepengurusanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahKepengurusanModalLabel">Tambah Kepengurusan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/tambah_struktur'); ?>" method="post">
          <div class="modal-body">
              <div class="form-group row">
                <label for="name_pengurus" class="col-sm-12">Nama Lengkap</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name_pengurus" name="name_pengurus" placeholder="Nama pengurus">
                </div>
              </div>

              <div class="form-group row">
                <label for="jabatan" class="col-sm-12">Jabatan</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label for="motto" class="col-sm-12">Motto Hidup</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto Hidup">
                </div>
              </div>

              <ul class="list-inline mt-2">
                <li class="">
                  <div class="form-group row">
                    <label for="whatsapp" class="col-sm-2">
                        <i class="fab fa-whatsapp fa-2x fa-fw"></i>  
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp">
                    </div>
                  </div>
                    
                </li>
                <li class="">
                  <div class="form-group row">
                    <label for="facebook" class="col-sm-2">
                        <i class="fab fa-facebook-f fa-2x fa-fw"></i>
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
                    </div>
                  </div>

                </li>
                <li class="">
                  <div class="form-group row">
                    <label for="instagram" class="col-sm-2">
                        <i class="fab fa-instagram fa-2x fa-fw"></i>
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
                    </div>
                  </div>
                </li>
              </ul>
              <?= form_error('tambah_struktur', '<small class="text-white ">', '</small>'); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>
    </div>
  </div>
</div>

<br>
  <hr class="divider">
<br>

        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->
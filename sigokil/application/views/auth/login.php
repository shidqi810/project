

  <div class="container">
    <!-- Outer Row -->

    <h1 class="text-white font-weight-bolder text-center mt-4">
      Sistem Informasi Pengawasan dan Pengendalian <br>
      Daerah Irigasi Kabupaten Ogan Komering Ilir <br>
      (SIGOKIL)

    </h1>
    
    <!-- <div class="bg-white rounded-circle" style="height: 80px; float: left;">
      Logo
    </div> -->
    
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="mx-auto">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="pt-5 pl-5 pr-5">
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user text-white" method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email Anda..." value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Sandi Anda...">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <div class="text-center mt-3">
                    <a class="small text-white" href="<?= base_url('auth/registration'); ?>">Buat Akun Baru!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <br><br><br>
  <marquee class="text-white">
    <h4>
      <?php foreach ($dataadmin as $dataadmin): ?>
        <?= $dataadmin->pengumuman ?>
      <?php endforeach ?>
    </h4>
  </marquee>
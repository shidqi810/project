  <div class="container">
    <h1 class="text-white font-weight-bolder text-center mt-2">SIGOKIL</h1>

    <div class="my-2 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="pt-5 pl-5 pr-5">
              <div class="text-center">
                <h1 class="h4 text-white mb-4">Buat Akun!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Masukkan Nama" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email" value="<?= set_value('name'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ketik Ulang Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftarkan!
                </button>
              </form>
              <div class="text-center mt-3">
                <a class="small text-white" href="<?= base_url('auth'); ?>">Sudah Terdaftar? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

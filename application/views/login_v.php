<div class="head">
  <div class="topbar">
    <h3 style="background-color: #01579b; padding: 1.5%; color: white;">Login</h3>
  </div>
</div>
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <img src="\pengaduan-masyarakat\assets\backend\img\logo1.png" alt="sipansi" style="width:150px; height: 150px;">
                  <h1 class="h4 text-gray-900 mb-4" style="padding-top: 8%;">Selamat Datang di Aplikasi Pelaporan Kendala Mesin Absensi</h1>
                  
                  
                </div>

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>

                <?= $this->session->flashdata('msg'); ?>
                
                <?= form_open('Auth/LoginController', 'class="user"'); ?>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autofocus value="<?= set_value('username') ?>">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('Auth/RegisterController') ?>">Register?</a>
                </div>
                <div class="text-center" style="padding-top: 5%;">
                  <img src="\pengaduan-masyarakat\assets\backend\img\kominfo.png" alt="kominfo" style="width:105px; height: 80px;">
                  <img src="\pengaduan-masyarakat\assets\backend\img\logo2.png" alt="lamongan" style="width:60px; height: 70px;">
                  <img src="\pengaduan-masyarakat\assets\backend\img\logo3.png" alt="megilan" style="width:165px; height: 50px; padding-left: 5%;">
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

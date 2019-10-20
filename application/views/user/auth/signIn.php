<section class="login_box_area p_120" style="margin-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="login_box_img">
          <img class="img-fluid" src="<?php echo asset_user('img/login.jpg') ?>" alt="">
          <div class="hover">
            <h4>Anda Pengguna baru ?</h4>
            <p>Buat akun dengan mengklik button dibawah ini dan nikmatilah kemudahan berbelanja</p>
            <a class="main_btn" href="<?= base_url(). 'Auth/signUp' ?>">Buat Akun</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="login_form_inner">
          <h1 class="mb-lg-5">LOGIN</h1>
          <form class="row login_form"  method="post" id="contactForm"
                action="<?= base_url(). 'Auth/login' ?>" novalidate="novalidate"
          >
              <?php if ($this->session->flashdata('login')): ?>
                  <div class="col-md-12">
                      <div class="alert alert-danger" role="alert">
                          <?= $this->session->flashdata('login') ?>
                      </div>
                  </div>
              <?php endif; ?>

              <?php if (!form_error(Auth_model::$EMAIL)){ ?>
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control"
                             placeholder="Email"
                             name="<?= Auth_model::$EMAIL ?>"
                             value="<?= set_value(Auth_model::$EMAIL) ?>" >
                  </div>
              <?php } else { ?>
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control is-invalid" id="validationServer04"
                             placeholder="Email"
                             name="<?= Auth_model::$EMAIL ?>"
                             value="<?= set_value(Auth_model::$EMAIL) ?>" >
                      <div class="invalid-feedback" style="text-align: start">
                          <?= form_error(Auth_model::$EMAIL) ?>
                      </div>
                  </div>
              <?php } ?>

              <?php if (!form_error(Auth_model::$PASSWORD)){ ?>
                  <div class="col-md-12 mb-3">
                      <input type="password" class="form-control"
                             placeholder="Password"
                             name="<?= Auth_model::$PASSWORD ?>"
                             value="<?= set_value(Auth_model::$PASSWORD) ?>" >
                  </div>
              <?php } else { ?>
                  <div class="col-md-12 mb-3">
                      <input type="password" class="form-control is-invalid" id="validationServer04"
                             placeholder="Password"
                             name="<?= Auth_model::$PASSWORD ?>"
                             value="<?= set_value(Auth_model::$PASSWORD) ?>" >
                      <div class="invalid-feedback" style="text-align: start">
                          <?= form_error(Auth_model::$PASSWORD) ?>
                      </div>
                  </div>
              <?php } ?>

            <div class="col-md-12 form-group">
              <button type="submit" value="submit" class="btn submit_btn">Masuk</button>
              <a href="#">Lupa Password ?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
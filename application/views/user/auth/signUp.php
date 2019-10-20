<section class="login_box_area p_120" style="margin-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="login_box_img">
          <img class="img-fluid" src="<?php echo asset_user('img/login.jpg') ?>" alt="">
          <div class="hover">
            <h4>Sudah Memiliki Akun ?</h4>
            <p>Jika anda sudah memiliki akun, anda dapat mengklik button dibawah ini</p>
            <a class="main_btn" href="<?= base_url(). 'Auth/signIn' ?>">Masuk Dengan Akun Anda</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="login_form_inner">
          <h1 class="mb-lg-5">REGISTER</h1>
          <form class="row login_form" id="contactForm"
                action="<?php echo base_url(). 'Auth/register' ?>"
                method="post"
                novalidate="novalidate"
          >
              <?php if (!form_error(Auth_model::$NAME)){ ?>
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control" placeholder="Nama"
                             name="<?= Auth_model::$NAME ?>"
                             value="<?= set_value(Auth_model::$NAME) ?>" >
                  </div>
              <?php } else { ?>
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Nama"
                             name="<?= Auth_model::$NAME ?>"
                             value="<?= set_value(Auth_model::$NAME) ?>" >
                      <div class="invalid-feedback" style="text-align: start">
                          <?= form_error(Auth_model::$NAME) ?>
                      </div>
                  </div>
              <?php } ?>

              <?php if (!form_error(Auth_model::$EMAIL)){ ?>
                  <div class="col-md-12 mb-3">
                      <input type="email" class="form-control" placeholder="Email"
                             name="<?= Auth_model::$EMAIL ?>"
                             value="<?= set_value(Auth_model::$EMAIL) ?>" >
                  </div>
              <?php } else { ?>
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Email"
                             name="<?= Auth_model::$EMAIL ?>"
                             value="<?= set_value(Auth_model::$EMAIL) ?>" >
                      <div class="invalid-feedback" style="text-align: start">
                          <?= form_error(Auth_model::$EMAIL) ?>
                      </div>
                  </div>
              <?php } ?>

              <?php if (!form_error(Auth_model::$PASSWORD)){ ?>
                  <div class="col-md-12 mb-3">
                      <input type="password" class="form-control" id="password" placeholder="Password"
                             name="<?= Auth_model::$PASSWORD ?>"
                             value="<?= set_value(Auth_model::$PASSWORD) ?>" >
                  </div>
              <?php } else { ?>
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Password"
                             name="<?= Auth_model::$PASSWORD ?>"
                             value="<?= set_value(Auth_model::$PASSWORD) ?>" >
                      <div class="invalid-feedback" style="text-align: start">
                          <?= form_error(Auth_model::$PASSWORD) ?>
                      </div>
                  </div>
              <?php } ?>

            <div class="col-md-12 mb-3">
                <div class="custom-control custom-checkbox" style="text-align: start">
                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                           name="<?= Auth_model::$UID ?>"
                           value="SELLER">
                    <label class="custom-control-label" for="customCheck1">
                        Buat Akun Sebagai Penjual
                    </label>
                </div>
            </div>

            <div class="col-md-12 form-group">
              <button type="submit" value="submit" class="btn submit_btn">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
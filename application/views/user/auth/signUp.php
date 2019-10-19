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
        <div class="login_form_inner reg_form">
          <h3>Buat Akun Baru</h3>
          <form class="row login_form" id="contactForm"
                action="<?php echo base_url(). 'Auth/register' ?>"
                method="post"
                novalidate="novalidate"
          >
            <div class="col-md-12 form-group">
              <input type="text" placeholder="Nama" class="form-control" id="name"
                     name="<?= Auth_model::$NAME ?>">
            </div>

            <div class="col-md-12 form-group">
              <input type="email" placeholder="Alamat Email" class="form-control" id="email"
                     name="<?= Auth_model::$EMAIL ?>">
            </div>

            <div class="col-md-12 form-group">
              <input type="password" placeholder="Password" class="form-control" id="password"
                     name="<?= Auth_model::$PASSWORD ?>">
            </div>

            <div class="col-md-12 form-group">
              <div class="creat_account">
                <input type="checkbox" id="f-option2"
                       name="<?= Auth_model::$UID ?>"
                       value="SELLER">
                <label for="f-option2">Buat Akun Penjual</label>
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
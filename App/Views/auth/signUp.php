<?php require_once __DIR__.'/../templates/header.php'; ?>

<section class="login_box_area p_120" style="margin-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="login_box_img">
          <img class="img-fluid" src="App/Views/templates/assets/img/login.jpg" alt="">
          <div class="hover">
            <h4>Sudah Memiliki Akun ?</h4>
            <p>Jika anda sudah memiliki akun, anda dapat mengklik button dibawah ini</p>
            <a class="main_btn" href="/login">Masuk Dengan Akun Anda</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="login_form_inner reg_form">
          <h3>Buat Akun Baru</h3>
          <form class="row login_form" action="/register" method="post" id="contactForm" novalidate="novalidate">
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
            </div>

            <div class="col-md-12 form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
            </div>

            <div class="col-md-12 form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="col-md-12 form-group">
              <div class="creat_account">
                <input type="checkbox" id="f-option2" name="uid" value="SELLER">
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

<?php require_once __DIR__.'/../templates/footer.php'; ?>
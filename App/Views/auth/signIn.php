<?php require __DIR__. "/../templates/header.php"; ?>
<!--================Login Box Area =================-->
<section class="login_box_area p_120" style="margin-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="login_box_img">
          <img class="img-fluid" src="App/Views/templates/assets/img/login.jpg" alt="">
          <div class="hover">
            <h4>Anda Pengguna baru ?</h4>
            <p>Buat akun dengan mengklik button dibawah ini dan nikmatilah kemudahan berbelanja</p>
            <a class="main_btn" href="/register">Buat Akun</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="login_form_inner">
          <h3>Masuk ke Akun Anda</h3>
          <form class="row login_form" action="/login" method="post" id="contactForm" novalidate="novalidate">
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="name" name="email" placeholder="Alamat Email">
            </div>

            <div class="col-md-12 form-group">
              <input type="password" class="form-control" id="name" name="password" placeholder="Password">
            </div>

            <div class="col-md-12 form-group">
              <div class="creat_account">
                <input type="checkbox" id="f-option2" name="selector">
                <label for="f-option2">Biarkan saya tetap masuk.</label>
              </div>
            </div>

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
<!--================End Login Box Area =================-->
<?php require_once __DIR__. "/../templates/footer.php"; ?>
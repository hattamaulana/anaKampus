<?php require_once __DIR__.'/../templates/header.php'; ?>
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-center">
        <h2>DAFTAR</h2>
        <div class="page_link">
          <a href="/">Home</a>
          <a href="#">Daftar</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="login_box_area p_120">
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

<section class="subscription-area section_gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Ayo, Ikuti kami</h2>
          <span>Kami akan mengirimkan info product yang baru dan trending</span>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div id="mc_embed_signup">
          <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
            <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" required="">
            <!-- <div style="position: absolute; left: -5000px;">
                <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
              </div> -->
            <button type="submit" class="newsl-btn">Mulai</button>
            <div class="info"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../templates/footer.php'; ?>
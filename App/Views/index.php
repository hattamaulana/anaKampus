<?php # die(print_r($data)); ?>
<?php require_once 'templates/header.php' ?>
<section class="home_banner_area">
  <div class="overlay"></div>
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content row">
        <div class="offset-lg-2 col-lg-8">
          <h3>Fashion
            <br />Mahasiswa</h3>
          <p>
            Berpenampilanlah sebaik mungkin untuk menunjukkan bahwa anda mempunyai jatidiri yang berintelektual dengan gaya jaman now.
          </p>
          <a class="white_bg_btn" href="#">Lihat Koleksi</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Clients Logo Area =================-->
<section class="clients_logo_area" style="margin-top: 50px">
  <div class="container-fluid">
    <div class="clients_slider owl-carousel">
      <div class="item">
        <img src="App/Views/templates/assets/img/clients-logo/c-logo-1.png" alt="">
      </div>
      <div class="item">
        <img src="App/Views/templates/assets/img/clients-logo/c-logo-2.png" alt="">
      </div>
      <div class="item">
        <img src="App/Views/templates/assets/img/clients-logo/c-logo-3.png" alt="">
      </div>
      <div class="item">
        <img src="App/Views/templates/assets/img/clients-logo/c-logo-4.png" alt="">
      </div>
      <div class="item">
        <img src="App/Views/templates/assets/img/clients-logo/c-logo-5.png" alt="">
      </div>
    </div>
  </div>
</section>
<!--================End Clients Logo Area =================-->

<!--================Feature Product Area =================-->
<section class="feature_product_area section_gap">
  <div class="main_box">
    <div class="container-fluid">
      <div class="row">
        <div class="main_title">
          <h2>Featured Products</h2>
          <p>Who are in extremely love with eco friendly system.</p>
        </div>
      </div>
      <div class="row">
      <?php $i = 1; ?>
      <?php foreach ($data as $key => $value) { ?>
        <div class="col col1">
          <div class="f_p_item">
            <div class="f_p_img">
              <img class="img-fluid" src="App/Views/templates/assets/img/product/feature-product/f-p-1.jpg" alt="">
              <div class="p_icon">
                <a href="#">
                  <i class="lnr lnr-cart"></i>
                </a>
              </div>
            </div>
            <a href="#">
              <h4> <?php echo $value['name']; ?> </h4>
            </a>
            <h5> Rp <?php echo $value['price']; ?>,00 </h5>
          </div>
        </div>
      <?php } ?>
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
<?php require_once 'templates/footer.php'; ?>
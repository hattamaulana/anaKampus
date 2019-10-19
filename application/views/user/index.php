<!-- Bannder -->
<section class="home_banner_area">
  <div class="overlay"></div>
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content row">
        <div class="offset-lg-2 col-lg-8">
          <h3>Fashion Mahasiswa</h3>
          <p>
            Berpenampilanlah sebaik mungkin untuk menunjukkan <br> bahwa anda mempunyai jatidiri yang berintelektual dengan gaya jaman now.
          </p>
          <a class="white_bg_btn" href="/show-category">Lihat Koleksi</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Banner -->

<!--================Feature Product Area =================-->
<section class="feature_product_area section_gap">
  <div class="main_box">
    <div class="container-fluid">
      <div class="row">
        <div class="main_title">
          <h2>Trending Produk</h2>
          <p> Produk yang sedang Trending </p>
        </div>
      </div>

      <div class="row">
      <?php $i = 1; ?>
      <?php foreach ($data as $key => $value) { ?>
        <div class="col col1">
          <div class="f_p_item">
            <div class="f_p_img">
              <img class="img-fluid" src="<?php echo ($value['photo'] == null) ? 'Storage/Product/default.jpg': $value['photo'] ?>" alt="">
              <div class="p_icon">
                <a href="/add-cart?p=<?php echo $value['pid']; ?>">
                  <i class="lnr lnr-cart"></i>
                </a>
              </div>
            </div>
            <a href="/detail-product?p=<?php echo $value['pid']; ?>">
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
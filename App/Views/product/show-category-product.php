<?php # die(print_r($data)) ?>
<?php require_once __DIR__. '/../templates/header.php'; ?>
<!--================Category Product Area =================-->
<section class="cat_product_area section_gap" style="margin-top: 100px">
<div class="container-fluid">
  <div class="row flex-row-reverse">
    <div class="col-lg-9">
      <div class="product_top_bar">
        <div class="left_dorp">
          <select class="sorting">
            <option value="1">Sorting Harga terendah</option>
            <option value="2">Sorting Harga tertinggi</option>
            <option value="4">Sorting Rating tertinggi</option>
          </select>

          <select class="show">
            <option value="1"> Show 20 </option>
            <option value="2"> Show 40 </option>
            <option value="4"> Show 80 </option>
          </select>
        </div>
      </div>

      <div class="latest_product_inner row">
        <?php foreach($data as $key => $value) { ?>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="f_p_item">
            <div class="f_p_img">
              <img class="img-fluid" src="<?php echo ($value['photo'] == null) ? 'Storage/Product/default.jpg': $value['photo'] ?>" alt="">
              <div class="p_icon">
                <a href="/add-cart?p=<?php echo $value['pid']; ?>">
                  <i class="lnr lnr-cart"></i>
                </a>
              </div>
            </div>
            <a href="/detail-product?p=<?php echo $value['pid'] ?>">
              <h4> <?php echo $value['name']; ?> </h4>
            </a>
            <h5>Rp. <?php echo $value['price']; ?>,00 </h5>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="left_sidebar_area">
        <aside class="left_widgets cat_widgets">
          <div class="l_w_title">
            <h3>Kategori Produk</h3>
          </div>
          <div class="widgets_inner">
            <ul class="list">
              <li>
                <a href="#">Sticker</a>
              </li>

              <li>
                <a href="#">T-Shirt</a>
              </li>

              <li>
                <a href="#">Hoodie</a>
              </li>
            </ul>
          </div>
        </aside>

        <aside class="left_widgets p_filter_widgets">
          <div class="l_w_title">
            <h3>Product Filters</h3>
          </div>
          <div class="widgets_inner">
            <h4>Brand</h4>
            <ul class="list">
              <li>
                <a href="#">Apple</a>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top: 100px">
    <nav class="cat_page mx-auto" aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">01</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">02</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">03</a>
        </li>
        <li class="page-item blank">
          <a class="page-link" href="#">...</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">09</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
</section>

<?php require_once __DIR__. '/../templates/footer.php'; ?>
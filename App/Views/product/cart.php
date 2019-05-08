<?php 
?>
<?php require_once __DIR__. '/../templates/header.php'; ?>
<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-center">
        <h2>Shopping Cart</h2>
        <div class="page_link">
          <a href="index.html">Home</a>
          <a href="cart.html">Cart</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Cart Area =================-->
<section class="cart_area">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Banyak Belanjaan</th>
              <th scope="col">Total Belanja</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $key => $value) { ?>
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img width="100" height="100" src="<?php echo $value['photo']; ?>" alt="">
                  </div>
                  <div class="media-body">
                    <p> <?php echo $value['name'] ?></p>
                  </div>
                </div>
              </td>
              <td>
                <h5>Rp <?php echo $value['price'] ?> ,00</h5>
              </td>
              <td>
                <div class="product_count">
                  <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                  <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                    class="increase items-count" type="button">
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                  <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                    class="reduced items-count" type="button">
                    <i class="lnr lnr-chevron-down"></i>
                  </button>
                </div>
              </td>
              <td>
                <h5>$000.00</h5>
              </td>
            </tr>
            <?php   } ?>

            <tr>
              <td></td>
              <td></td>
              <td>
                <h5>Total Semua Belanjaan</h5>
              </td>
              <td>
                <h5>Rp ,00</h5>
              </td>
            </tr>
            
            <tr class="out_button_area">
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="checkout_btn_inner">
                  <a class="gray_btn" href="/show-category">Lanjutkan Belanja</a>
                  <a class="main_btn" href="#">Lanjut ke Kasir</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--================End Cart Area =================-->
<?php require_once __DIR__. '/../templates/footer.php'; ?>
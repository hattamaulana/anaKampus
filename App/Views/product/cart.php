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
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <form action="/pay" method="post">
          <tbody>
            <?php $i = 1; $totalBelanjaan = 0; ?>
            <?php foreach($data as $key => $value) { ?>
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <input type="hidden" name="pid[]" value="<?php echo $value['pid'] ?>">
                    <img width="100" height="100" src="<?php echo $value['photo']; ?>" alt="">
                  </div>
                  <div class="media-body">
                    <p> <?php echo $value['name'] ?></p>
                  </div>
                </div>
              </td>
              <td>
                <h5>Rp <?php echo $value['price'] ?></h5>
              </td>
              <td>
                <div class="product_count">
                  <input type="text" name="qty" id="sst-<?php echo $i; ?>" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                  <button onclick="
                  var banyakbeli = document.getElementById('banyak-beli-<?php echo $i; ?>');
                  var pembayaran = document.getElementById('nominal-pembayaran');
                  var totalbeli = document.getElementById('total-beli-<?php echo $i; ?>'); 
                  var result = document.getElementById('sst-<?php echo $i; ?>'); 
                  var sst = result.value; 
                  if( !isNaN( sst )) {
                    result.value++;
                    harga = parseInt(<?php echo $value['price']; ?>);
                    totalp = pembayaran.textContent;
                    totalp = totalp.substring(3, totalp.length);
                    totalp = parseInt(totalp);
                    total = harga * result.value;
                    bayar = totalp + harga;
                    totalbeli.innerText = 'Rp '+ total;
                    pembayaran.innerText = 'Rp '+ bayar;
                    banyakbeli.innerText = result.value;
                  }

                  return false; " class="increase items-count" type="button">
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                  <button onclick="
                  var banyakbeli = document.getElementById('banyak-beli-<?php echo $i; ?>');
                  var pembayaran = document.getElementById('nominal-pembayaran');
                  var totalbeli = document.getElementById('total-beli-<?php echo $i; ?>');
                  var result = document.getElementById('sst-<?php echo $i; ?>'); 
                  var sst = result.value; 
                  if( !isNaN( sst ) &amp;&amp; sst > 1 ) {
                    result.value--;
                    totalb = totalbeli.textContent;
                    totalp = pembayaran.textContent;
                    totalb = totalb.substring(3, totalb.length);
                    totalp = totalp.substring(3, totalp.length);
                    totalb = parseInt(totalb);
                    totalp = parseInt(totalp);
                    harga = parseInt(<?php echo $value['price']; ?>);
                    total = totalb - harga;
                    bayar = totalp - harga;
                    totalbeli.innerText = 'Rp '+ total;
                    pembayaran.innerText = 'Rp '+ bayar;
                    banyakbeli.innerText = result.value;
                  }

                  return false; " class="reduced items-count" type="button">
                    <i class="lnr lnr-chevron-down"></i>
                    <input type="hidden" name="jumlahpembelian[]" id="banyak-beli-<?php echo $i; ?>" value="1">
                  </button>
                </div>
              </td>
              <td>
                <h5 id="total-beli-<?php echo $i; ?>">Rp <?php echo $value['price'] ?></h5>
              </td>
              <td>
                <a class="main_btn" href="/remove-cart?p=<?php echo $value['pid']; ?>"> Batal </a>
              </td>
            </tr>
            <?php $totalBelanjaan += $value['price']; ?>
            <?php $i++;  }  ?>

            <tr>
              <td></td>
              <td></td>
              <td>
                <h5>Total Semua Belanjaan</h5>
              </td>
              <td>
                <h5 id="nominal-pembayaran">Rp <?php echo $totalBelanjaan ?></h5>
              </td>
            </tr>
            
            <tr class="out_button_area">
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="checkout_btn_inner">
                  <input type="hidden" id="nominal-pembayaran" name="pembayaran" value="<?php echo $totalBelanjaan; ?>">
                  <a class="gray_btn" href="/show-category">Lanjutkan Belanja</a>
                  <button class="main_btn" type="submit"> Bayar Sekarang </button>
                </div>
              </td>
            </tr>
          </tbody>
          <form>
        </table>
      </div>
    </div>
  </div>
</section>
<!--================End Cart Area =================-->
<?php require_once __DIR__. '/../templates/footer.php'; ?>
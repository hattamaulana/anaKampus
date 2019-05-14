<?php require_once __DIR__. '/../templates/header.php'; ?>

<!--================Order Details Area =================-->
<section class="order_details p_120" style="margin-top: 100px">
  <div class="container">
    <h3 class="title_confirmation"> Terimakasih. Barang yang order secepatnya akan tiba di alamat anda</h3>
    <div class="row order_d_inner">
      <div class="col-lg-4">
        <div class="details_item">
          <h4>Order Info</h4>
          <ul class="list">
            <li>
              <a href="#">
                <span>Order Id</span> : <?php echo $data['order-info']['tid'] ?></a>
            </li>
            <li>
              <a href="#">
                <span>Tanggal Order</span> : <?php echo $data['order-info']['created_at']; ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Total</span> : Rp <?php echo $data['order-info']['total_pembayaran']; ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Payment method</span> : Cash</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="details_item">
          <h4>Alamat Tagihan</h4>
          <ul class="list">
            <li>
              <a href="#">
                <span>Jalan</span> : <?php echo $data['order-info']['street']; ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Kota</span> : <?php echo $data['order-info']['city']; ?></a>
            </li>
            <li>
              <a href="#">
                <span>Provinsi</span> : <?php echo $data['order-info']['province']; ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Kode Pos </span> : <?php echo $data['order-info']['zipcode']; ?></a>
            </li>
            <li>
              <a href="#">
                <span>Alamat Lengkap </span> : <?php echo $data['order-info']['address']; ?></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="details_item">
          <h4>Alamat Pengiriman</h4>
          <ul class="list">
            <li>
              <a href="#">
                <span>Jalan</span> : <?php echo $data['order-info']['street']; ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Kota</span> : <?php echo $data['order-info']['city']; ?></a>
            </li>
            <li>
              <a href="#">
                <span>Provinsi</span> : <?php echo $data['order-info']['province']; ?> </a>
            </li>
            <li>
              <a href="#">
                <span>Kode Pos </span> : <?php echo $data['order-info']['zipcode']; ?></a>
            </li>
            <li>
              <a href="#">
                <span>Alamat Lengkap </span> : <?php echo $data['order-info']['address']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="order_details_table">
      <h2>Order Details</h2>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Product</th>
              <th scope="col">Banyak beli</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['order-detail'] as $key => $value) { ?>
            <tr>
              <td>
                <p> <?php echo $value['name'] ?> </p>
              </td>
              <td>
                <h5>x <?php echo $value['banyak_pembelian'] ?> </h5>
              </td>
              <td>
                <p>Rp <?php echo ($value['banyak_pembelian'] * $value['price']) ?></p>
              </td>
            </tr>
            <?php } ?>

            <tr>
              <td>
                <h4>Total</h4>
              </td>
              <td>
                <h5></h5>
              </td>
              <td>
                <p> Rp <?php echo $data['order-info']['total_pembayaran']; ?>  </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--================End Order Details Area =================-->
<?php require_once __DIR__. '/../templates/footer.php'; ?>
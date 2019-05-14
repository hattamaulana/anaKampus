<?php require_once __DIR__.'/../templates/header.php' ?>
<div class="container" style="margin-top: 200px; margin-bottom: 200px">
  <div class="ecommerce-widget">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
          <h5 class="card-header">History Transaksi</h5>

          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-light">
                  <tr class="border-0">
                    <th class="border-0">No.</th>
                    <th class="border-0">Order Id</th>
                    <th class="border-0">Tanggal Order</th>
                    <th class="border-0">Total Transaksi</th>
                    <th class="border-0">Lebih Detail</th> 
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;  ?>
                  <?php foreach ($data as $key => $value) {  ?>
                  <tr>
                    <td> <?php echo $i ?> </td>
                    <td> <?php echo $value['tid'] ?> </td>
                    <td> <?php echo $value['created_at'] ?> </td>
                    <td> <?php echo $value['total_pembayaran'] ?> </td>
                    <td>
                      <a href="/pay-confirmation?t=<?php echo $value['tid'] ?>">
                        Tampilkan.
                      </a>
                    </td>
                    <!-- <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td> -->
                  </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__.'/../templates/footer.php' ?>
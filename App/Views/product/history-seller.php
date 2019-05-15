<?php require_once __DIR__. '/../templates/header-seller.php' ?>
<?php require_once __DIR__. '/../templates/left-sidebar-seller.php' ?>
<div class="dashboard-wrapper">
<div class="dashboard-ecommerce">
  <div class="container-fluid dashboard-content ">
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title"> History </h2>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">History</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <div class="ecommerce-widget">
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">History</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-light">
                            <tr class="border-0">
                              <th class="border-0">No.</th>
                              <th class="border-0">Id Transaksi</th>
                              <th class="border-0">Tanggal Orderan</th>
                              <th class="border-0">Detail Orderan</th>
                            </tr>
                          </thead>
                        <tbody>
                          <?php $i = 1;  ?>
                          <?php foreach ($data as $key => $value) {  ?>
                          <tr>
                            <td> <?php echo $i; ?> </td>
                            <td> <?php echo $value['tid'] ?> </td>
                            <td> <?php echo $value['created_at'] ?> </td>
                            <td>
                              <a href="#<?php echo $value['tid'] ?>">Tampilkan</a>
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
</div>

<?php require_once __DIR__. '/../templates/footer-seller.php' ?>
<?php require_once __DIR__. '/../templates/header-seller.php' ?>
<?php require_once __DIR__. '/../templates/left-sidebar-seller.php' ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<div class="dashboard-wrapper">
<div class="dashboard-ecommerce">
  <div class="container-fluid dashboard-content ">
      <!-- ============================================================== -->
      <!-- pageheader  -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title"> Data Product </h2>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data Product</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <!-- end pageheader  -->
      <!-- ============================================================== -->

      <div class="ecommerce-widget">
          <div class="row">
              <!-- ============================================================== -->
              <!-- recent orders  -->
              <!-- ============================================================== -->
              <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Data Product</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-light">
                            <tr class="border-0">
                              <th class="border-0">No.</th>
                              <th class="border-0">Photo</th>
                              <th class="border-0">Product Id</th>
                              <th class="border-0">Nama Product</th>
                              <th class="border-0">Jenis Product</th> 
                              <th class="border-0">Harga Product</th>
                              <th class="border-0"></th>
                            </tr>
                          </thead>
                        <tbody>
                          <?php $i = 1;  ?>
                          <?php foreach ($data as $key => $value) {  ?>
                          <tr>
                            <td> <?php echo $i; ?> </td>
                            <td>
                              <div class="m-r-10"><img src="App/Views/templates/assets/seller/images/product-pic.jpg" alt="user" class="rounded" width="45" height="45"></div>
                            </td>
                            <td> <?php echo $value['pid'] ?> </td>
                            <td> <?php echo $value['name'] ?> </td>
                            <td> <?php echo $value['category'] ?> </td>
                            <td> <?php echo $value['price'] ?> </td>
                            <td>
                              <form action="/update-product" method="post">
                                <input type="hidden" name="pid" value="<?php echo $value['pid'] ?> ">
                                <button tabindex="-1" type="submit" class="btn btn-secondary">
                                  EDIT
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="/delete-product" method="post">
                                <input type="hidden" name="pid" value="<?php echo $value['pid'] ?> ">
                                <button tabindex="-1" type="submit" class="btn btn-secondary">
                                  HAPUS
                                </button>
                              </form>
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
          <!-- end recent orders  -->
          <!-- ============================================================== -->
        </div>
    </div>
  </div>
</div>

<?php require_once __DIR__. '/../templates/footer-seller.php' ?>
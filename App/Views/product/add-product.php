<?php require_once __DIR__.'/../templates/header-seller.php' ?>
<?php require_once __DIR__.'/../templates/left-sidebar-seller.php' ?>

<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-10">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header" id="top">
                        <h2 class="pageheader-title">Tambah Produk Baru</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Produk</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <!-- basic form  -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Produk Baru</h5>
                        <div class="card-body">
                            <form method="post" action="/product-add" enctype="multipart/form-data">
                              <div class="form-group" id="photo-product">
                                <label>Photo Produk</label>
                                <div class="custom-file mb-3">
                                  <input type="file" name="photo" class="custom-file-input" id="customFile">
                                  <label class="custom-file-label" for="customFile">Photo Produk</label>
                                </div>
                              </div>

                              <div class="form-group" id="name-product">
                                <label for="inputText3" class="col-form-label">Nama Produk</label>
                                <input id="inputText3" name="name" type="text" class="form-control" placeholder="Nama">
                              </div>

                              <div class="form-group" id="kind-product">
                                <label for="input-select">Category Produk</label>
                                <select class="form-control" id="input-select" name="category" value="sticker">
                                    <option value="STICKER">Sticker</option>
                                    <option value="T-SHIRT">Kaos</option>
                                    <option value="HOODIE">Hoodie</option>
                                </select>
                              </div>
                                
                                <div class="form-group" id="price-product">
                                  <label> Harga Produk </label>
                                  <div class="input-group mb-3">
                                    <span class="input-group-prepend">
                                      <span class="input-group-text">
                                        Rp. 
                                      </span>
                                    </span>
                                    
                                    <input type="text" name="price" class="form-control">
                                  </div>
                                </div>

                                <div class="form-group" id="size-product">
                                  <h5> Ukuran yang disediakan </h5>

                                  <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" value="XXL" name="size[]" class="custom-control-input"><span class="custom-control-label">XXL</span>
                                  </label>

                                  <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="size[]" value="XL"class="custom-control-input"><span class="custom-control-label">XL</span>
                                  </label>

                                  <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="size[]" value="L" class="custom-control-input"><span class="custom-control-label">L</span>
                                  </label>

                                  <label class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="size[]" value="M" class="custom-control-input"><span class="custom-control-label">M</span>
                                  </label>
                                </div>

                                <div class="form-group" id="description-product">
                                    <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="form-group" id="save-data">
                                  <button tabindex="-1" type="submit" class="btn btn-secondary">
                                    Simpan
                                  </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- sidenavbar -->
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
            <div class="sidebar-nav-fixed">
                <ul class="list-unstyled">
                    <li><a href="#photo-product" class="active">Photo Product</a></li>
                    <li><a href="#name-product">Nama Product</a></li>
                    <li><a href="#kind-product">Jenis Product</a></li>
                    <li><a href="#price-product">Harga Product</a></li>
                    <li><a href="#size-product">Ukuran Product</a></li>
                    <li><a href="#deskripsi-product">Deskripsi Product</a></li>
                    <li><a href="#save-data">Simpan</a></li>
                </ul>
            </div>
        </div>
        <!-- end sidenavbar -->
        <!-- ============================================================== -->
    </div>
</div>

<?php require_once __DIR__.'/../templates/footer-seller.php' ?>
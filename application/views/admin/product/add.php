<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-10">
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

            <!-- basic form  -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Produk Baru</h5>
                        <div class="card-body">
                            <form method="post"
                                  action="<?= base_url(). 'produk/insert'?>"
                                  enctype="multipart/form-data">

                                <!-- Alert Error Input Name -->
                                <?php if (form_error(Product_model::$NAME)): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= form_error(Product_model::$NAME) ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <!-- Alert Error Input Name -->
                                <?php if (form_error(Product_model::$CATEGORY)): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= form_error(Product_model::$CATEGORY) ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <!-- Alert Error Input Name -->
                                <?php if (form_error(Product_model::$PRICE)): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= form_error(Product_model::$PRICE) ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <!-- Alert Error Input Description -->
                                <?php if (form_error(Product_model::$DESCRIPTION)): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= form_error(Product_model::$DESCRIPTION) ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group" id="photo-product">
                                    <label>Photo Produk</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile"
                                               name="<?= Product_model::$PHOTO ?>" >
                                        <label class="custom-file-label" for="customFile">Photo Produk</label>
                                    </div>
                                </div>

                                <div class="form-group" id="name-product">
                                    <label for="inputText3" class="col-form-label">Nama Produk</label>
                                    <input id="inputText3" type="text" class="form-control" placeholder="Nama"
                                           name="<?= Product_model::$NAME ?>" >
                                </div>

                              <div class="form-group" id="kind-product">
                                <label for="input-select">Category Produk</label>
                                <select class="form-control" id="input-select"
                                        name="<?= Product_model::$CATEGORY ?>"
                                        value="sticker">
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
                                    
                                    <input type="text" class="form-control"
                                           name="<?= Product_model::$PRICE ?>">
                                  </div>
                                </div>

                                <div class="form-group" id="description-product">
                                    <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                              name="<?= Product_model::$DESCRIPTION ?>"
                                    ></textarea>
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

        <!-- sidenavbar -->
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
            <div class="sidebar-nav-fixed">
                <ul class="list-unstyled">
                    <li><a href="#photo-product" class="active">Photo Product</a></li>
                    <li><a href="#name-product">Data Produk</a></li>
                    <li><a href="#save-data">Simpan</a></li>
                </ul>
            </div>
        </div>
        <!-- end sidenavbar -->
    </div>
</div>
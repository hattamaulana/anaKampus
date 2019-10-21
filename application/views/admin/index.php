<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                <!-- pageheader  -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Profil</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="<?= base_url(). 'Admin' ?>" class="breadcrumb-link">
                                                Dashboard
                                            </a>
                                        </li>

                                        <li class="breadcrumb-item">
                                            Profile
                                        </li>
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
                      <h5 class="card-header" id="informasi-toko">Profil</h5>

                      <div class="card-body">
                        <form action="/profile-edit" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="inputText3" class="col-form-label">Nama Toko</label>
                              <input id="inputText3" name="name" type="text" class="form-control"
                                     placeholder="Nama"
                                     value="<?= $name ?>" disabled>
                          </div>

                          <div class="form-group">
                              <label for="inputEmail">Alamat Email</label>
                              <input id="inputEmail" type="email" name="email" class="form-control"
                                     placeholder="name@example.com"
                                     value="<?= $email ?>" disabled>
                          </div>

                          <div class="form-group">
                              <label for="inputText4" class="col-form-label">Nomor Telepon</label>
                              <input id="inputText4" type="number" class="form-control" name="phonenumber"
                                     placeholder="Nomor Telepon"
                                     value="<?= (isset($phonenumber)) ? $phonenumber : '' ?>" disabled>
                          </div>

                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Deskripsi Toko</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                        rows="3" disabled><?= (isset($description)) ? $description : ''?>
                              </textarea>
                          </div>
                        </div>

                        <div class="card-body border-top">
                            <h3 id="alamat-toko">Alamat Toko</h3>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Jalan</label>
                                <input id="inputText3" name="street" type="text" class="form-control"
                                       value="<?= (isset($street)) ? $street : ''?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Kode Pos</label>
                                <input id="inputText3" name="zipcode" type="text" class="form-control"
                                       value="<?= (isset($zipcode)) ? $zipcode : '' ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Kota</label>
                                <input id="inputText3" name="city" type="text" class="form-control"
                                       value="<?= (isset($city)) ? $city : '' ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Provinsi</label>
                                <input id="inputText3" name="province" type="text" class="form-control"
                                       value="<?= isset($province) ? $province : '' ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                                <textarea name="address" class="form-control" id="exampleFormControlTextarea1"
                                          rows="3" disabled><?= isset($address) ? $address : ''?>
                                </textarea>
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
                        <li><a href="#informasi-toko" class="active">Informasi Toko</a></li>
                        <li><a href="#alamat-toko">Alamat Toko</a></li>
                    </ul>
                </div>
            </div>
            <!-- end sidenavbar -->
            <!-- ============================================================== -->
        </div>
    </div>